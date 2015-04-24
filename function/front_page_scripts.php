<?php
function enqueue_front_page_scripts() {
    if( is_front_page() )
    {   
    	//styles
    	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css', NULL, true);
    	wp_enqueue_style('flexslider', get_stylesheet_directory_uri().'/css/flexslider.css', NULL, true);
    	wp_enqueue_style('home', get_stylesheet_directory_uri().'/css/home.css', NULL, true);
    
    	//scripts
    	wp_enqueue_script('home', get_stylesheet_directory_uri().'/js/home.js', array( 'jquery' ), null, true );
		wp_enqueue_script('waypoints', get_stylesheet_directory_uri().'/js/waypoints.min.js', array( 'jquery' ), null, true );
		wp_enqueue_script('flexslider', get_stylesheet_directory_uri().'/js/jquery.flexslider.js', array( 'jquery' ), null, true );
		wp_enqueue_script('overlay', get_stylesheet_directory_uri().'/js/overlay.js', array( 'jquery' ), null, true );


    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_front_page_scripts' );
?>