<?php
add_action('wp_enqueue_scripts', 'figma_project_scripts');

function figma_project_scripts() {
    wp_enqueue_style( 'figma_project-style', get_stylesheet_uri() );

    wp_enqueue_script( 'figma_project-scripts', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
    wp_enqueue_script ('jquery');
};

add_theme_support( 'custom-logo' );

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyDo8LmKnzQb6PFLjbCiE24Q5dBtVztpA9o'; // Ваш ключ Google API
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// add_filter( 'wp_video_shortcode', 'filter_function_name_4514', 10, 5 );

function filter_function_name_4514( $output, $video ){
	// filter...

	return $output;
    
add_filter( 'wp_video_shortcode', 'filter_function_name_4514', 10, 5 );

}

?>
