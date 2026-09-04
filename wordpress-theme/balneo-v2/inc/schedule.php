<?php
/**
 * Module réutilisable du planning journalier.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once __DIR__ . '/schedule-data.php';
require_once __DIR__ . '/schedule-admin.php';

/** Les cartes sont rendues depuis la base, sans régénérer le thème. */
function balneo_v2_schedule_render_cards(): void {
	$themes = balneo_v2_schedule_themes();
	foreach ( balneo_v2_schedule_entries() as $entry ) {
		$theme = isset( $themes[ $entry['theme'] ] ) ? $entry['theme'] : 'balneo';
		$state = $entry['default'];
		$url = $entry['url'] ?? '';
		if ( preg_match( '/^([a-z0-9-]+)\.html$/', $url, $matches ) ) { $url = home_url( '/' . $matches[1] . '/' ); }
		?>
		<article class="schedule-card schedule-card--<?php echo esc_attr( $theme ); ?>" data-schedule-entry="<?php echo esc_attr( wp_json_encode( array( 'id' => $entry['id'], 'default' => $state, 'rules' => $entry['rules'] ) ) ); ?>" <?php echo ! empty( $state['hidden'] ) ? 'hidden' : ''; ?>>
			<div class="schedule-card__top"><p class="schedule-card__category"><?php echo esc_html( $entry['category'] ); ?></p><i class="fa-solid <?php echo esc_attr( $themes[ $theme ]['icon'] ); ?>" aria-hidden="true"></i></div>
			<h3 class="schedule-card__title"><?php echo esc_html( $entry['title'] ); ?></h3>
			<p class="schedule-card__time"><?php echo esc_html( $state['time'] ?? '' ); ?></p>
			<p class="schedule-card__status"><?php echo esc_html( $state['status'] ?? '' ); ?></p>
			<p class="schedule-card__note"><?php echo esc_html( $state['note'] ?? '' ); ?></p>
			<?php if ( $url ) : ?><a class="schedule-card__link" href="<?php echo esc_url( $url ); ?>">Découvrir <span class="sr-only"><?php echo esc_html( $entry['title'] ); ?></span><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a><?php endif; ?>
		</article>
		<?php
	}
}

/**
 * Affiche le planning avec les ressources du thème, sans modifier la page enregistrée.
 *
 * @return string
 */
function balneo_v2_daily_schedule_shortcode(): string {
	$script_path = get_theme_file_path( '/js/horaires.js' );
	wp_enqueue_script(
		'balneo-v2-horaires',
		get_theme_file_uri( '/js/horaires.js' ),
		array(),
		file_exists( $script_path ) ? (string) filemtime( $script_path ) : BALNEO_V2_VERSION,
		array( 'strategy' => 'defer', 'in_footer' => true )
	);
	ob_start();
	get_template_part( 'template-parts/daily-schedule' );
	return (string) ob_get_clean();
}
add_shortcode( 'balneo_daily_schedule', 'balneo_v2_daily_schedule_shortcode' );
