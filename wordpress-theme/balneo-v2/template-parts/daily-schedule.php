<?php
/**
 * Planning journalier.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>
<?php $schedule = balneo_v2_schedule_context(); ?>
<section class="section daily-schedule" aria-labelledby="schedule-title">
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
		<div class="daily-schedule__date-heading"><div><p class="daily-schedule__eyebrow daily-schedule__day-label">Aujourd’hui chez nous</p><h2 class="daily-schedule__date"><?php echo esc_html( $schedule['label'] ); ?></h2></div><span class="daily-schedule__count"><?php echo esc_html( (string) $schedule['count'] ); ?> espaces & activités</span></div>
		<div class="daily-schedule__cards"><?php balneo_v2_schedule_render_cards(); ?></div>
		<p class="daily-schedule__empty" <?php echo $schedule['count'] > 0 ? 'hidden' : ''; ?>>Aucune activité renseignée pour cette date. Contactez l’accueil pour préparer votre visite.</p>
		<p class="daily-schedule__notice"><i class="fa-solid fa-circle-info" aria-hidden="true"></i>Horaires habituels, sous réserve de modification. Jours fériés, fermetures techniques et séances encadrées : pensez à vérifier auprès de l’accueil.</p>
		<div class="sr-only" role="status" aria-live="polite" aria-atomic="true" data-schedule-announcement></div>
		</div>
	</div>
	</div>
</section>
