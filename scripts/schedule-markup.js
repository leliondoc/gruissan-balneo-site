const entries = require('../data/horaires.json');

function escapeHtml(value) {
  return String(value).replace(/[&<>"']/g, (character) => ({
    '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;',
  })[character]);
}

function renderDailySchedule({ dynamic = false } = {}) {
  const cards = dynamic ? '<?php balneo_v2_schedule_render_cards(); ?>' : entries.map((entry) => `<article class="schedule-card schedule-card--${escapeHtml(entry.theme)}" data-schedule-entry="${escapeHtml(JSON.stringify({ id: entry.id, default: entry.default, rules: entry.rules }))}">
    <div class="schedule-card__top"><p class="schedule-card__category">${escapeHtml(entry.category)}</p><i class="fa-solid ${escapeHtml(entry.icon)}" aria-hidden="true"></i></div>
    <h3 class="schedule-card__title">${escapeHtml(entry.title)}</h3>
    <p class="schedule-card__time">${escapeHtml(entry.default.time)}</p>
    <p class="schedule-card__status">${escapeHtml(entry.default.status)}</p>
    <p class="schedule-card__note">${escapeHtml(entry.default.note)}</p>
    ${entry.url ? `<a class="schedule-card__link" href="${escapeHtml(entry.url)}">Découvrir <span class="sr-only">${escapeHtml(entry.title)}</span><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>` : ''}
  </article>`).join('\n').replace(/[\t ]+$/gm, '');

  return `${dynamic ? '<?php $schedule = balneo_v2_schedule_context(); ?>\n' : ''}<section class="section daily-schedule" aria-labelledby="schedule-title">
  <div class="container">
    <div class="daily-schedule__intro">
      <div><p class="daily-schedule__eyebrow">On se retrouve quand ?</p><h2 id="schedule-title">À chacun son rythme.</h2></div>
      <p>Choisissez votre date.<br>Retrouvez vos espaces et activités.</p>
    </div>
    <div class="daily-schedule__layout">
      <div class="daily-schedule__sidebar">
        <div class="schedule-calendar" data-schedule-calendar></div>
        <div class="schedule-help"><i class="fa-solid fa-phone" aria-hidden="true"></i><div><p>Un doute avant de venir ?</p><a href="tel:+33468756050">04 68 75 60 50</a></div></div>
      </div>
      <div class="daily-schedule__programme">
        <div class="daily-schedule__date-heading"><div><p class="daily-schedule__eyebrow daily-schedule__day-label">${dynamic ? 'Aujourd’hui chez nous' : 'Préparer votre visite'}</p><h2 class="daily-schedule__date">${dynamic ? '<?php echo esc_html( $schedule[\'label\'] ); ?>' : 'Vos espaces & activités'}</h2></div><span class="daily-schedule__count">${dynamic ? '<?php echo esc_html( (string) $schedule[\'count\'] ); ?>' : entries.length} espaces & activités</span></div>
        <div class="daily-schedule__cards">${cards}</div>
        <p class="daily-schedule__empty" ${dynamic ? '<?php echo $schedule[\'count\'] > 0 ? \'hidden\' : \'\'; ?>' : 'hidden'}>Aucune activité renseignée pour cette date. Contactez l’accueil pour préparer votre visite.</p>
        <p class="daily-schedule__notice"><i class="fa-solid fa-circle-info" aria-hidden="true"></i>Horaires habituels, sous réserve de modification. Jours fériés, fermetures techniques et séances encadrées : pensez à vérifier auprès de l’accueil.</p>
        <div class="sr-only" role="status" aria-live="polite" aria-atomic="true" data-schedule-announcement></div>
      </div>
    </div>
  </div>
</section>`;
}

module.exports = { renderDailySchedule };
