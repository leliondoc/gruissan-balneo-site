(function () {
  'use strict';

  // Les dates du planning sont celles de Gruissan, quel que soit le fuseau du visiteur.
  var dayFormatter = new Intl.DateTimeFormat('fr-FR', { dateStyle: 'full', timeZone: 'UTC' });
  var monthFormatter = new Intl.DateTimeFormat('fr-FR', { month: 'long', year: 'numeric', timeZone: 'UTC' });

  function dateKey(date) { return date.toISOString().slice(0, 10); }
  function todayInGruissan() {
    var parts = new Intl.DateTimeFormat('en-CA', {
      timeZone: 'Europe/Paris', year: 'numeric', month: '2-digit', day: '2-digit'
    }).formatToParts(new Date());
    var values = {};
    parts.forEach(function (part) { values[part.type] = part.value; });
    return new Date(values.year + '-' + values.month + '-' + values.day + 'T12:00:00Z');
  }
  function addDays(date, days) { return new Date(date.getTime() + days * 86400000); }
  function matches(rule, date) {
    var key = dateKey(date);
    return (!rule.startDate || key >= rule.startDate) &&
      (!rule.endDate || key <= rule.endDate) &&
      (!rule.dates || rule.dates.indexOf(key) !== -1) &&
      (!rule.months || rule.months.indexOf(date.getUTCMonth() + 1) !== -1) &&
      (!rule.weekdays || rule.weekdays.indexOf(date.getUTCDay()) !== -1);
  }
  function stateFor(entry, date) {
    // La dernière règle correspondante gagne : les exceptions suivent les récurrences.
    return (entry.rules || []).reduce(function (state, rule) {
      return matches(rule, date) ? Object.assign({}, state, rule) : state;
    }, Object.assign({}, entry.default));
  }

  document.querySelectorAll('.daily-schedule').forEach(function (module) {
    var calendar = module.querySelector('[data-schedule-calendar]');
    if (!calendar) return;
    var cards = Array.from(module.querySelectorAll('[data-schedule-entry]')).map(function (element) {
      try { return { element: element, entry: JSON.parse(element.dataset.scheduleEntry) }; }
      catch (_) { return null; }
    }).filter(Boolean);
    var selected = todayInGruissan();
    var visibleMonth = new Date(Date.UTC(selected.getUTCFullYear(), selected.getUTCMonth(), 1, 12));

    // Structure fixe ; aucun contenu éditorial n'est injecté sous forme de HTML.
    calendar.innerHTML = '<p class="schedule-calendar__eyebrow">Votre date</p>' +
      '<div class="schedule-calendar__navigation"><button type="button" data-month-step="-1" aria-label="Mois précédent"><i class="fa-solid fa-arrow-left" aria-hidden="true"></i></button>' +
      '<h3 class="schedule-calendar__month" aria-live="polite"></h3>' +
      '<button type="button" data-month-step="1" aria-label="Mois suivant"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></button></div>' +
      '<div class="schedule-calendar__weekdays" aria-hidden="true"><span>Lun</span><span>Mar</span><span>Mer</span><span>Jeu</span><span>Ven</span><span>Sam</span><span>Dim</span></div>' +
      '<div class="schedule-calendar__days" role="group" aria-label="Choisir une date"></div>' +
      '<div class="schedule-calendar__footer"><span><i aria-hidden="true"></i>Aujourd’hui</span><button type="button" data-schedule-today>Revenir à aujourd’hui<i class="fa-solid fa-arrow-turn-up" aria-hidden="true"></i></button></div>';
    module.classList.add('daily-schedule--ready');
    var grid = calendar.querySelector('.schedule-calendar__days');

    function renderCalendar(focusKey) {
      var today = dateKey(todayInGruissan());
      calendar.querySelector('.schedule-calendar__month').textContent = monthFormatter.format(visibleMonth);
      grid.replaceChildren();
      var offset = (visibleMonth.getUTCDay() + 6) % 7;
      var lastDay = new Date(Date.UTC(visibleMonth.getUTCFullYear(), visibleMonth.getUTCMonth() + 1, 0, 12)).getUTCDate();
      var total = Math.ceil((offset + lastDay) / 7) * 7;
      var tabKey = focusKey || (selected.getUTCMonth() === visibleMonth.getUTCMonth() && selected.getUTCFullYear() === visibleMonth.getUTCFullYear() ? dateKey(selected) : dateKey(visibleMonth));
      for (var index = 0; index < total; index++) {
        var date = addDays(visibleMonth, index - offset);
        var key = dateKey(date);
        var button = document.createElement('button');
        button.type = 'button';
        button.className = 'schedule-calendar__day';
        button.textContent = date.getUTCDate();
        button.dataset.date = key;
        button.tabIndex = key === tabKey ? 0 : -1;
        button.setAttribute('aria-label', dayFormatter.format(date));
        button.setAttribute('aria-pressed', String(key === dateKey(selected)));
        if (date.getUTCMonth() !== visibleMonth.getUTCMonth()) button.classList.add('is-outside');
        if (key === today) button.setAttribute('aria-current', 'date');
        grid.appendChild(button);
      }
      if (focusKey) grid.querySelector('[data-date="' + focusKey + '"]').focus();
    }

    function renderProgramme(announce) {
      var count = 0;
      cards.forEach(function (card) {
        var state = stateFor(card.entry, selected);
        card.element.hidden = state.hidden === true;
        card.element.classList.toggle('is-closed', state.closed === true);
        if (!card.element.hidden) count++;
        ['time', 'status', 'note'].forEach(function (field) {
          var target = card.element.querySelector('.schedule-card__' + field);
          if (target) target.textContent = state[field] || '';
        });
      });
      var dateLabel = dayFormatter.format(selected);
      module.querySelector('.daily-schedule__date').textContent = dateLabel;
      module.querySelector('.daily-schedule__day-label').textContent = dateKey(selected) === dateKey(todayInGruissan()) ? 'Aujourd’hui chez nous' : 'Votre programme';
      module.querySelector('.daily-schedule__count').textContent = count + (count === 1 ? ' espace / activité' : ' espaces & activités');
      module.querySelector('.daily-schedule__empty').hidden = count > 0;
      if (announce) module.querySelector('[data-schedule-announcement]').textContent = dateLabel + ' : ' + count + ' espaces et activités renseignés.';
    }

    function selectDate(date, focus) {
      selected = date;
      visibleMonth = new Date(Date.UTC(date.getUTCFullYear(), date.getUTCMonth(), 1, 12));
      renderCalendar(focus ? dateKey(date) : null);
      renderProgramme(true);
    }

    calendar.addEventListener('click', function (event) {
      var button = event.target.closest('button');
      if (!button) return;
      if (button.dataset.date) selectDate(new Date(button.dataset.date + 'T12:00:00Z'), true);
      if (button.hasAttribute('data-month-step')) {
        visibleMonth = new Date(Date.UTC(visibleMonth.getUTCFullYear(), visibleMonth.getUTCMonth() + Number(button.dataset.monthStep), 1, 12));
        renderCalendar();
      }
      if (button.hasAttribute('data-schedule-today')) selectDate(todayInGruissan(), false);
    });

    grid.addEventListener('keydown', function (event) {
      var key = event.target.dataset.date;
      if (!key) return;
      var date = new Date(key + 'T12:00:00Z');
      var delta = { ArrowLeft: -1, ArrowRight: 1, ArrowUp: -7, ArrowDown: 7 }[event.key];
      if (event.key === 'Home') delta = -((date.getUTCDay() + 6) % 7);
      if (event.key === 'End') delta = 6 - ((date.getUTCDay() + 6) % 7);
      if (delta === undefined && event.key !== 'PageUp' && event.key !== 'PageDown') return;
      event.preventDefault();
      if (delta !== undefined) date = addDays(date, delta);
      else {
        var nextMonth = date.getUTCMonth() + (event.key === 'PageUp' ? -1 : 1);
        var maxDay = new Date(Date.UTC(date.getUTCFullYear(), nextMonth + 1, 0, 12)).getUTCDate();
        date = new Date(Date.UTC(date.getUTCFullYear(), nextMonth, Math.min(date.getUTCDate(), maxDay), 12));
      }
      visibleMonth = new Date(Date.UTC(date.getUTCFullYear(), date.getUTCMonth(), 1, 12));
      renderCalendar(dateKey(date));
    });

    renderCalendar();
    renderProgramme(false);
  });
})();
