<?php

/**
 * Enqueue styles and scripts
 */

function starter_theme_scripts() {

	if ( is_page(29) ) {

		// mailchimp stylesheet
		wp_enqueue_style( 
			'mailchimp', 
			'//cdn-images.mailchimp.com/embedcode/classic-081711.css',
			array(),
			'0.0.1'
		);

		if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
			wpcf7_enqueue_scripts();
			wpcf7_enqueue_styles();
		}
	}
	
	// main stylesheet
	wp_enqueue_style( 
		'main', 
		get_template_directory_uri() . '/css/main.css',
		array(),
		'1.0.5'
	);
	
	// modernizr
	wp_enqueue_script(
		'modernizr', 
		get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js',
		array(), // dependencies
		false,   // version
		false    // in footer
	);

	// special stuff for jquery
	wp_deregister_script('jquery');
	wp_register_script(
		'jquery',
		get_template_directory_uri() . '/js/vendor/jquery-1.11.0.min.js',
        array(),
		false,
		true
	);
	wp_enqueue_script( 'jquery' );

	// plugins
	wp_enqueue_script(
		'plugins',
		get_template_directory_uri() . '/js/plugins.js',
		array(
				'jquery'
			),
		'0.0.1',
		true

	);

	// main javascript
	wp_enqueue_script(
		'main',
		get_template_directory_uri() . '/js/main.js',
		array(
				'jquery',
				'plugins'
			),
		'0.0.6',
		true

	);
}

if ( !is_admin() ) add_action( 'wp_enqueue_scripts', 'starter_theme_scripts' );

/**
 * Add support for menus
 */

function register_starter_theme_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'extra-menu' => __( 'Extra Menu' )
		)
	);
}
add_action( 'init', 'register_starter_theme_menus' );


/**
 * Add featured images support
 */

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}

/**
 * Add image size
 * 
 * example if needed
 * not active by default because WordPress will save images in the example sizes
 */

// if ( function_exists( 'add_image_size' ) ) { 
// 	add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
// 	add_image_size( 'homepage-thumb', 220, 180, true ); //(cropped)
// }


/**
 * Add support for SVG uploads
 * 
 * from http://www.leighton.com/blog/enable-upload-of-svg-to-wordpress-media-library
 * and http://css-tricks.com/snippets/wordpress/allow-svg-through-wordpress-media-uploader/
 */
function custom_mtypes( $m ){
    $m['svg'] = 'image/svg+xml';
    $m['svgz'] = 'image/svg+xml';
    return $m;
}
add_filter( 'upload_mimes', 'custom_mtypes' );

function custom_admin_head() {
  $css = '';

  $css = 'td.media-icon img[src$=".svg"] { width: 100% !important; height: auto !important; }';

  echo '<style type="text/css">'.$css.'</style>';
}
add_action('admin_head', 'custom_admin_head');





// // adding parameters to vimeo

// add_filter( 'oembed_fetch_url','add_param_oembed_fetch_url', 10, 3);
// add_filter( 'oembed_result', 'add_player_id_to_iframe', 10, 3);

// /** add extra parameters to vimeo request api (oEmbed) */
// function add_param_oembed_fetch_url( $provider, $url, $args) {

// 	// var_dump($args);

//     // unset args that WP is already taking care
//     $newargs = $args;
//     unset( $newargs['discover'] );
//     unset( $newargs['width'] );
//     unset( $newargs['height'] );

//     // build the query url
//     $parameters = urlencode( http_build_query( $newargs ) );

//     return $provider . '&'. $parameters;


// }

// /** add player id to iframe id on vimeo */
// function add_player_id_to_iframe( $html, $url, $args ) {

// 	preg_match('/src="([^"]*)"/', $html, $matches);
// 	$html = preg_replace('/src="([^"]*)"/', 'src="' . $matches[1] . '?title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=vimeoplayer1' . '" ', $html );

//     return $html;
// }

?>
