(function () {
  'use strict';
  var form = document.querySelector('[data-planning-form]');
  if (!form) return;
  var rules = form.querySelector('[data-planning-rules]');
  var template = form.querySelector('[data-rule-template]');
  var add = form.querySelector('[data-rule-add]');
  var status = document.querySelector('[data-planning-status]');
  var nextIndex = rules.children.length;
  var dirty = false;

  function refresh() {
    Array.from(rules.children).forEach(function (rule, index) {
      var kind = rule.querySelector('select[name$="[kind]"]').value;
      rule.querySelector('legend').textContent = (index + 1) + '. ' + (kind === 'exception' ? 'Exception' : 'Période / récurrence');
      rule.querySelector('[data-rule-period]').hidden = kind !== 'period';
      rule.querySelector('[data-rule-exception]').hidden = kind !== 'exception';
      rule.querySelector('[data-rule-up]').disabled = index === 0;
      rule.querySelector('[data-rule-down]').disabled = index === rules.children.length - 1;
    });
    add.disabled = rules.children.length >= 20;
  }
  form.addEventListener('input', function () { dirty = true; });
  form.addEventListener('change', function () { dirty = true; refresh(); });
  form.addEventListener('click', function (event) {
    var button = event.target.closest('button');
    if (!button) return;
    var rule = button.closest('[data-rule]');
    if (button.hasAttribute('data-rule-add') && rules.children.length < 20) {
      var fragment = template.content.cloneNode(true);
      fragment.querySelectorAll('[name], [id], [for]').forEach(function (element) {
        ['name', 'id', 'for'].forEach(function (attribute) {
          if (element.hasAttribute(attribute)) element.setAttribute(attribute, element.getAttribute(attribute).replace(/__INDEX__/g, String(nextIndex)));
        });
      });
      nextIndex++;
      rules.appendChild(fragment);
      rules.lastElementChild.querySelector('select').focus();
      status.textContent = 'Nouvelle règle ajoutée. Pensez à enregistrer.';
    } else if (rule && button.hasAttribute('data-rule-remove')) {
      // La suppression reste locale au formulaire jusqu'à sa sauvegarde explicite.
      rule.remove();
      add.focus();
      status.textContent = 'Règle retirée du formulaire. Rechargez la fiche pour annuler, ou enregistrez pour confirmer.';
    } else if (rule && button.hasAttribute('data-rule-up') && rule.previousElementSibling) {
      rules.insertBefore(rule, rule.previousElementSibling);
      button.focus();
    } else if (rule && button.hasAttribute('data-rule-down') && rule.nextElementSibling) {
      rules.insertBefore(rule.nextElementSibling, rule);
      button.focus();
    } else { return; }
    dirty = true;
    refresh();
  });
  form.addEventListener('submit', function () { dirty = false; });
  window.addEventListener('beforeunload', function (event) {
    if (dirty) { event.preventDefault(); event.returnValue = ''; }
  });
  refresh();
})();
