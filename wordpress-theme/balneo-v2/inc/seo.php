<?php
/**
 * SEO natif : titres, descriptions, partage social et données structurées.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Métadonnées éditoriales des pages de la maquette.
 *
 * @return array<string, array<string, string>>
 */
function balneo_v2_seo_pages(): array {
	return array(
		'accueil'                 => array(
			'title'       => 'Espace Balnéo Gruissan | Piscine, bien-être & sport',
			'description' => 'Découvrez l’Espace Balnéo de Gruissan : bassins, piscine, massages, activités aquatiques, salle de sport et parc aqualudique.',
			'image'       => 'balneo-188.webp',
		),
		'acces-parking'           => array(
			'title'       => 'Accès et parking | Espace Balnéo Gruissan',
			'description' => 'Adresse, itinéraire et stationnement pour rejoindre l’Espace Balnéo, avenue des Bains à Gruissan.',
			'image'       => 'gruissan-050.webp',
		),
		'actualites'              => array(
			'title'       => 'Actualités | Espace Balnéo Gruissan',
			'description' => 'Retrouvez les actualités, ouvertures saisonnières et nouveautés de l’Espace Balnéo de Gruissan.',
			'image'       => 'dsc-0451.webp',
		),
		'aquabike'                => array(
			'title'       => 'Aquabike à Gruissan | Espace Balnéo',
			'description' => 'Cours d’aquabike de 45 minutes en petit groupe à Gruissan. Consultez les conditions et réservez votre séance.',
			'image'       => 'balneo-37.webp',
		),
		'aquagym'                 => array(
			'title'       => 'Aquagym à Gruissan | Espace Balnéo',
			'description' => 'Cours d’aquagym de 45 minutes à l’Espace Balnéo de Gruissan : activité aquatique encadrée et accessible à tous.',
			'image'       => 'aquagym.webp',
		),
		'article-parc-ete'        => array(
			'title'       => 'Ouverture du parc été 2026 | Espace Balnéo',
			'description' => 'Dates et horaires d’ouverture 2026 du parc aqualudique de l’Espace Balnéo de Gruissan.',
			'image'       => 'dsc-0451.webp',
		),
		'article-riviere'         => array(
			'title'       => 'Réouverture de la rivière extérieure | Balnéo',
			'description' => 'La rivière extérieure de l’Espace Balnéo de Gruissan est de nouveau accessible : découvrez ce parcours aquatique en plein air.',
			'image'       => 'riviere.webp',
		),
		'article-stages-natation' => array(
			'title'       => 'Stages de natation enfants 2026 à Gruissan',
			'description' => 'Stages de natation pour enfants à Gruissan du 6 juillet au 28 août 2026 : cinq séances consécutives à partir de 5 ans.',
			'image'       => 'stage-enfant.webp',
		),
		'balneo'                  => array(
			'title'       => 'Balnéo à Gruissan | Bassins, sauna et hammam',
			'description' => 'Accédez sans réservation à l’Espace Balnéo de Gruissan : bassins, jets, sauna, hammam, tarifs et abonnements.',
			'image'       => 'balneo-188.webp',
		),
		'bebes-nageurs'           => array(
			'title'       => 'Bébés nageurs à Gruissan | Espace Balnéo',
			'description' => 'Séances bébés nageurs de 5 à 36 mois dans une eau à 32 °C à l’Espace Balnéo de Gruissan.',
			'image'       => 'bebe-nageur.webp',
		),
		'brochures'               => array(
			'title'       => 'Brochures et guides | Espace Balnéo Gruissan',
			'description' => 'Consultez les guides Balnéo, activités aquatiques et parc été pour préparer votre venue à Gruissan.',
			'image'       => 'bassins-exterieurs.webp',
		),
		'contact'                 => array(
			'title'       => 'Contact | Espace Balnéo Gruissan',
			'description' => 'Contactez l’Espace Balnéo de Gruissan par téléphone ou retrouvez son adresse avenue des Bains.',
			'image'       => 'gruissan-050.webp',
		),
		'donnees-personnelles'    => array(
			'title'       => 'Données personnelles | Espace Balnéo Gruissan',
			'description' => 'Politique de protection des données personnelles du site de l’Espace Balnéo de Gruissan.',
			'image'       => 'gruissan-050.webp',
		),
		'faq'                     => array(
			'title'       => 'FAQ | Préparer sa visite à l’Espace Balnéo',
			'description' => 'Réservation, tenue de bain, serviettes, accès des enfants et paiement : les réponses aux questions fréquentes sur l’Espace Balnéo.',
			'image'       => 'riviere.webp',
		),
		'horaires'                => array(
			'title'       => 'Horaires | Espace Balnéo Gruissan',
			'description' => 'Consultez les horaires de l’Espace Balnéo, de la salle For.Me et du parc aqualudique de Gruissan.',
			'image'       => 'balneo-188.webp',
		),
		'hydromassages'           => array(
			'title'       => 'Hydromassages à Gruissan | Espace Balnéo',
			'description' => 'Découvrez les séances d’hydromassage et le Rituel Océan Relax, proposés sur rendez-vous à l’Espace Balnéo de Gruissan.',
			'image'       => 'balneo-188.webp',
		),
		'infos-pratiques'         => array(
			'title'       => 'Infos pratiques | Espace Balnéo Gruissan',
			'description' => 'Tenue, réservation, paiement et conseils : toutes les informations utiles pour préparer votre venue à l’Espace Balnéo.',
			'image'       => 'gruissan-050.webp',
		),
		'massages'                => array(
			'title'       => 'Massages bien-être à Gruissan | Espace Balnéo',
			'description' => 'Découvrez la carte des massages bien-être de l’Espace Balnéo de Gruissan et réservez votre soin sur rendez-vous.',
			'image'       => 'balneo-73.webp',
		),
		'mentions-legales'        => array(
			'title'       => 'Mentions légales | Espace Balnéo Gruissan',
			'description' => 'Mentions légales du site officiel de l’Espace Balnéo de Gruissan.',
			'image'       => 'gruissan-050.webp',
		),
		'natation'                => array(
			'title'       => 'Cours de natation à Gruissan | Espace Balnéo',
			'description' => 'Cours et stages de natation pour enfants, adolescents et adultes à l’Espace Balnéo de Gruissan.',
			'image'       => 'stage-enfant.webp',
		),
		'parc-ete'                => array(
			'title'       => 'Parc aqualudique à Gruissan | Espace Balnéo',
			'description' => 'Profitez du parc été de Gruissan : toboggans, rivière et pataugeoires dans un espace aqualudique ouvert en juillet et août.',
			'image'       => 'parc-aquatique.webp',
		),
		'privatisation'           => array(
			'title'       => 'Privatisation | Espace Balnéo Gruissan',
			'description' => 'Organisez une expérience de groupe ou un événement sur mesure à l’Espace Balnéo de Gruissan.',
			'image'       => 'bassins-exterieurs.webp',
		),
		'recuperation'            => array(
			'title'       => 'Récupération sportive à Gruissan | Espace Balnéo',
			'description' => 'Récupération active, chaleur, eau et soins pour prolonger les bienfaits de votre séance sportive à Gruissan.',
			'image'       => 'sport.webp',
		),
		'reglement'               => array(
			'title'       => 'Règlement intérieur | Espace Balnéo Gruissan',
			'description' => 'Consultez le règlement intérieur et les conditions d’accès à l’Espace Balnéo de Gruissan.',
			'image'       => 'dsc-0451.webp',
		),
		'salle-de-sport'          => array(
			'title'       => 'Salle de sport à Gruissan | Espace For.Me',
			'description' => 'Salle de cardio-musculation Technogym à Gruissan : équipements, accès, tarifs et abonnements de l’Espace For.Me.',
			'image'       => 'balneo-37.webp',
		),
		'tarifs'                  => array(
			'title'       => 'Tarifs | Espace Balnéo Gruissan',
			'description' => 'Consultez les tarifs des bassins, activités, soins, abonnements et espaces de l’Espace Balnéo de Gruissan.',
			'image'       => 'gruissan-050.webp',
		),
	);
}

/**
 * Retourne le slug éditorial de la page courante.
 */
function balneo_v2_seo_slug(): string {
	if ( is_front_page() ) {
		return 'accueil';
	}

	if ( is_singular() ) {
		return (string) get_post_field( 'post_name', get_queried_object_id() );
	}

	return '';
}

/**
 * Retourne les métadonnées SEO de la page courante.
 *
 * @return array<string, string>
 */
function balneo_v2_seo_current_page(): array {
	$pages = balneo_v2_seo_pages();
	$slug  = balneo_v2_seo_slug();
	if ( isset( $pages[ $slug ] ) ) {
		return $pages[ $slug ];
	}

	if ( ! is_singular() ) {
		return array();
	}

	$post_id     = get_queried_object_id();
	$content     = (string) get_post_field( 'post_content', $post_id );
	$description = has_excerpt( $post_id ) ? (string) get_the_excerpt( $post_id ) : wp_strip_all_tags( strip_shortcodes( $content ) );
	$image       = get_the_post_thumbnail_url( $post_id, 'full' );

	return array(
		'title'       => get_the_title( $post_id ) . ' | ' . get_bloginfo( 'name' ),
		'description' => wp_trim_words( $description, 32, '…' ),
		'image_url'   => $image ? (string) $image : balneo_v2_seo_image_url( 'balneo-188.webp' ),
	);
}

/**
 * Détecte un éventuel plugin SEO afin d’éviter les balises en double.
 */
function balneo_v2_seo_plugin_active(): bool {
	return defined( 'WPSEO_VERSION' ) || defined( 'RANK_MATH_VERSION' ) || defined( 'AIOSEO_VERSION' ) || defined( 'SEOPRESS_VERSION' ) || defined( 'THE_SEO_FRAMEWORK_VERSION' );
}

/**
 * Remplace le titre WordPress par le titre éditorial prévu.
 *
 * @param string $title Titre WordPress initial.
 */
function balneo_v2_seo_document_title( string $title ): string {
	if ( balneo_v2_seo_plugin_active() ) {
		return $title;
	}

	$page = balneo_v2_seo_current_page();
	return $page['title'] ?? $title;
}
add_filter( 'pre_get_document_title', 'balneo_v2_seo_document_title' );

/**
 * Retourne l’URL canonique de la page courante.
 */
function balneo_v2_seo_canonical_url(): string {
	if ( is_front_page() ) {
		return home_url( '/' );
	}

	if ( is_singular() ) {
		return (string) get_permalink();
	}

	return '';
}

/**
 * Construit l’URL d’une image sociale du thème.
 *
 * @param string $filename Nom du fichier WebP.
 */
function balneo_v2_seo_image_url( string $filename ): string {
	return get_theme_file_uri( '/assets/photos/' . ltrim( $filename, '/' ) );
}

/**
 * Retourne l’image sociale d’une page éditoriale ou d’un contenu WordPress.
 *
 * @param array<string, string> $page Métadonnées de la page.
 */
function balneo_v2_seo_current_image_url( array $page ): string {
	if ( ! empty( $page['image_url'] ) ) {
		return $page['image_url'];
	}

	return balneo_v2_seo_image_url( $page['image'] ?? 'balneo-188.webp' );
}

/**
 * Construit les questions structurées de la FAQ.
 *
 * @return array<int, array<string, mixed>>
 */
function balneo_v2_seo_faq_entities(): array {
	$items = array(
		'Faut-il réserver pour accéder à l’Espace Balnéo ?' => 'L’accès libre à la Balnéo ne nécessite pas de réservation. Les massages, hydromassages et activités encadrées sont proposés sur réservation.',
		'Quelle tenue de bain est autorisée ?'          => 'Les shorts et jupes de bain sont interdits. Les cheveux longs doivent être attachés.',
		'Les serviettes sont-elles fournies ?'          => 'Non, pensez à apporter votre serviette.',
		'Les enfants peuvent-ils accéder à la Balnéo ?' => 'Les moins de 18 ans doivent être accompagnés d’un adulte. Les moins de 3 ans accèdent uniquement aux trois alvéoles thématiques. Les saunas et le hammam sont accessibles à partir de 16 ans.',
		'Quels moyens de paiement sont acceptés ?'      => 'Espèces, carte bancaire et chèques ANCV au format papier.',
		'Où consulter les horaires et les tarifs ?'     => 'Les horaires et tarifs sont publiés sur leurs pages dédiées. Pour une information du jour, contactez l’accueil au 04 68 75 60 50.',
		'Comment venir et où stationner ?'              => 'L’Espace Balnéo se trouve avenue des Bains à Gruissan. Les informations d’itinéraire et de stationnement figurent sur la page Accès et parking.',
	);

	$entities = array();
	foreach ( $items as $question => $answer ) {
		$entities[] = array(
			'@type'          => 'Question',
			'name'           => $question,
			'acceptedAnswer' => array(
				'@type' => 'Answer',
				'text'  => $answer,
			),
		);
	}

	return $entities;
}

/**
 * Retourne les services structurés par slug.
 *
 * @return array<string, string>
 */
function balneo_v2_seo_services(): array {
	return array(
		'aquabike'       => 'Cours d’aquabike',
		'aquagym'        => 'Cours d’aquagym',
		'balneo'         => 'Accès à l’espace balnéo',
		'bebes-nageurs'  => 'Séances bébés nageurs',
		'hydromassages'  => 'Séances d’hydromassage',
		'massages'       => 'Massages bien-être',
		'natation'       => 'Cours et stages de natation',
		'parc-ete'       => 'Accès au parc aqualudique',
		'privatisation'  => 'Privatisation de l’Espace Balnéo',
		'recuperation'   => 'Récupération sportive',
		'salle-de-sport' => 'Accès à la salle de sport For.Me',
	);
}

/**
 * Construit un graphe lié par des identifiants stables pour les moteurs et assistants.
 *
 * @return array<string, mixed>
 */
function balneo_v2_seo_schema_graph(): array {
	$page      = balneo_v2_seo_current_page();
	$slug      = balneo_v2_seo_slug();
	$canonical = balneo_v2_seo_canonical_url();
	$base      = untrailingslashit( home_url( '/' ) );
	$image     = balneo_v2_seo_current_image_url( $page );
	$business  = $base . '/#etablissement';
	$website   = $base . '/#site-web';
	$webpage   = $canonical . '#page-web';
	$image_id  = $canonical . '#image-principale';
	$is_article = str_starts_with( $slug, 'article-' ) || is_singular( 'post' );

	$graph = array(
		array(
			'@type'           => array( 'SportsActivityLocation', 'HealthClub', 'DaySpa' ),
			'@id'             => $business,
			'name'            => 'Espace Balnéo de Gruissan',
			'alternateName'   => 'Espace Balnéo Gruissan',
			'url'             => home_url( '/' ),
			'logo'            => array(
				'@type' => 'ImageObject',
				'url'   => get_theme_file_uri( '/assets/logo-balneo-officiel.png' ),
			),
			'image'           => array( $image ),
			'description'     => 'Centre aquatique et de bien-être à Gruissan proposant balnéothérapie, piscine, massages, activités aquatiques, sport et parc aqualudique saisonnier.',
			'telephone'       => '+33468756050',
			'email'           => 'espace.balneoludique@gruissan-mediterranee.com',
			'priceRange'      => '€€',
			'currenciesAccepted' => 'EUR',
			'sameAs'          => array(
				'https://www.instagram.com/gruissan_espacebalneo/',
				'https://www.facebook.com/espacebalneoludiquegruissan.omt',
			),
			'contactPoint'    => array(
				'@type'             => 'ContactPoint',
				'telephone'         => '+33468756050',
				'contactType'       => 'customer service',
				'availableLanguage' => array( 'fr' ),
			),
			'address'         => array(
				'@type'           => 'PostalAddress',
				'streetAddress'   => 'Avenue des Bains',
				'addressLocality' => 'Gruissan',
				'postalCode'      => '11430',
				'addressCountry'  => 'FR',
			),
			'geo'             => array(
				'@type'     => 'GeoCoordinates',
				'latitude'  => 43.1182048,
				'longitude' => 3.11328202,
			),
			'hasMap'          => 'https://maps.google.fr/?saddr=&daddr=43.1182048,3.11328202',
			'areaServed'      => array(
				'@type' => 'City',
				'name'  => 'Gruissan',
			),
			'paymentAccepted' => 'Carte bancaire, espèces, chèques ANCV papier',
		),
		array(
			'@type'      => 'WebSite',
			'@id'        => $website,
			'url'        => home_url( '/' ),
			'name'       => 'Espace Balnéo Gruissan',
			'inLanguage' => 'fr-FR',
			'publisher'  => array( '@id' => $business ),
		),
		array(
			'@type'      => 'ImageObject',
			'@id'        => $image_id,
			'url'        => $image,
			'contentUrl' => $image,
		),
	);

	$page_type = 'WebPage';
	if ( 'faq' === $slug ) {
		$page_type = 'FAQPage';
	} elseif ( 'contact' === $slug ) {
		$page_type = 'ContactPage';
	} elseif ( 'actualites' === $slug ) {
		$page_type = 'CollectionPage';
	}

	$page_schema = array(
		'@type'              => $page_type,
		'@id'                => $webpage,
		'url'                => $canonical,
		'name'               => $page['title'] ?? wp_get_document_title(),
		'description'        => $page['description'] ?? '',
		'inLanguage'         => 'fr-FR',
		'isPartOf'           => array( '@id' => $website ),
		'about'              => array( '@id' => $business ),
		'primaryImageOfPage' => array( '@id' => $image_id ),
	);

	if ( 'faq' === $slug ) {
		$page_schema['mainEntity'] = balneo_v2_seo_faq_entities();
	}
	$graph[] = $page_schema;

	if ( $is_article ) {
		$publication_dates = array(
			'article-parc-ete'        => '2026-06-03T08:00:00+02:00',
			'article-riviere'         => '2026-04-01T08:00:00+02:00',
			'article-stages-natation' => '2026-06-01T08:00:00+02:00',
		);
		$graph[] = array(
			'@type'            => 'Article',
			'@id'              => $canonical . '#article',
			'headline'         => get_the_title( get_queried_object_id() ),
			'description'      => $page['description'] ?? '',
			'datePublished'    => $publication_dates[ $slug ] ?? get_the_date( DATE_W3C, get_queried_object_id() ),
			'dateModified'     => get_the_modified_date( DATE_W3C, get_queried_object_id() ),
			'mainEntityOfPage' => array( '@id' => $webpage ),
			'image'            => array( '@id' => $image_id ),
			'author'           => array( '@id' => $business ),
			'publisher'        => array( '@id' => $business ),
			'inLanguage'       => 'fr-FR',
		);
	}

	if ( 'accueil' !== $slug && $canonical ) {
		$graph[] = array(
			'@type'           => 'BreadcrumbList',
			'@id'             => $canonical . '#fil-ariane',
			'itemListElement' => array(
				array(
					'@type'    => 'ListItem',
					'position' => 1,
					'name'     => 'Accueil',
					'item'     => home_url( '/' ),
				),
				array(
					'@type'    => 'ListItem',
					'position' => 2,
					'name'     => get_the_title( get_queried_object_id() ),
					'item'     => $canonical,
				),
			),
		);
	}

	$services = balneo_v2_seo_services();
	if ( isset( $services[ $slug ] ) ) {
		$graph[] = array(
			'@type'       => 'Service',
			'@id'         => $canonical . '#service',
			'name'        => $services[ $slug ],
			'description' => $page['description'] ?? '',
			'url'         => $canonical,
			'provider'    => array( '@id' => $business ),
			'areaServed'  => array(
				'@type' => 'City',
				'name'  => 'Gruissan',
			),
		);
	}

	return array(
		'@context' => 'https://schema.org',
		'@graph'   => $graph,
	);
}

/**
 * Affiche les métadonnées SEO et sociales dans l’en-tête du document.
 */
function balneo_v2_seo_render_head(): void {
	if ( balneo_v2_seo_plugin_active() || is_admin() || is_404() || is_search() ) {
		return;
	}

	$page = balneo_v2_seo_current_page();
	if ( ! $page ) {
		return;
	}

	$title       = $page['title'];
	$description = $page['description'];
	$canonical   = balneo_v2_seo_canonical_url();
	$image       = balneo_v2_seo_current_image_url( $page );
	$og_type     = str_starts_with( balneo_v2_seo_slug(), 'article-' ) || is_singular( 'post' ) ? 'article' : 'website';

	printf( '<meta name="description" content="%s">' . "\n", esc_attr( $description ) );
	printf( '<link rel="canonical" href="%s">' . "\n", esc_url( $canonical ) );
	printf( '<meta property="og:locale" content="fr_FR">' . "\n" );
	printf( '<meta property="og:type" content="%s">' . "\n", esc_attr( $og_type ) );
	printf( '<meta property="og:title" content="%s">' . "\n", esc_attr( $title ) );
	printf( '<meta property="og:description" content="%s">' . "\n", esc_attr( $description ) );
	printf( '<meta property="og:url" content="%s">' . "\n", esc_url( $canonical ) );
	printf( '<meta property="og:site_name" content="Espace Balnéo Gruissan">' . "\n" );
	printf( '<meta property="og:image" content="%s">' . "\n", esc_url( $image ) );
	printf( '<meta property="og:image:alt" content="%s">' . "\n", esc_attr( 'Espace Balnéo de Gruissan' ) );
	printf( '<meta name="twitter:card" content="summary_large_image">' . "\n" );
	printf( '<meta name="twitter:title" content="%s">' . "\n", esc_attr( $title ) );
	printf( '<meta name="twitter:description" content="%s">' . "\n", esc_attr( $description ) );
	printf( '<meta name="twitter:image" content="%s">' . "\n", esc_url( $image ) );
	printf( '<meta name="twitter:image:alt" content="%s">' . "\n", esc_attr( 'Espace Balnéo de Gruissan' ) );

	echo '<script type="application/ld+json">' . wp_json_encode( balneo_v2_seo_schema_graph(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT ) . '</script>' . "\n";
}

if ( ! balneo_v2_seo_plugin_active() ) {
	remove_action( 'wp_head', 'rel_canonical' );
	add_action( 'wp_head', 'balneo_v2_seo_render_head', 1 );
}

/**
 * Laisse WordPress piloter le noindex global de la préproduction et ajoute les
 * directives de prévisualisation sur les pages publiques.
 *
 * @param array<string, bool|string> $robots Directives existantes.
 * @return array<string, bool|string>
 */
function balneo_v2_seo_robots( array $robots ): array {
	if ( is_404() || is_search() || is_paged() ) {
		$robots['noindex'] = true;
		$robots['follow']  = true;
		unset( $robots['index'] );
		return $robots;
	}

	if ( (bool) get_option( 'blog_public' ) ) {
		$robots['max-image-preview'] = 'large';
		$robots['max-snippet']       = '-1';
		$robots['max-video-preview'] = '-1';
	}

	return $robots;
}
add_filter( 'wp_robots', 'balneo_v2_seo_robots' );

/**
 * Précharge uniquement l’image héro de la page courante.
 */
function balneo_v2_seo_preload_hero(): void {
	$page = balneo_v2_seo_current_page();
	if ( empty( $page['image'] ) ) {
		return;
	}
	printf(
		'<link rel="preload" as="image" href="%s" type="image/webp" fetchpriority="high">' . "\n",
		esc_url( balneo_v2_seo_image_url( $page['image'] ) )
	);
}
add_action( 'wp_head', 'balneo_v2_seo_preload_hero', 2 );

// Les archives utilisateurs ne sont pas éditoriales et ne doivent pas figurer au sitemap.
add_filter(
	'wp_sitemaps_add_provider',
	static function ( $provider, string $name ) {
		return 'users' === $name ? false : $provider;
	},
	10,
	2
);

remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'rsd_link' );
