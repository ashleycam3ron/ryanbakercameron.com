<?php
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rel_canonical');

if(!function_exists('initialize')){
	function initialize() {
		add_theme_support('post-thumbnails');
		//add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
	}
	add_action('init','initialize');
}

function custom_login_logo(){
	$path = get_stylesheet_directory_uri().'/images/logo1.png';
	$logo = get_stylesheet_directory_uri().'/images/logo1.png';
	$images = get_stylesheet_directory_uri().'/images/';
	//$l = getimagesize($path);
	echo '<style type="text/css">
			h1 a { background-image:url("'. $logo .'") !important; background-size:100% !important;width:200px !important;height:120px !important;margin: 0 auto !important;}
			/*body.login {background:url("'. $images .'stripe1.png") !important;} */
			.login form {background: #fff !important;border: 1px solid #EEE !important;}
		</style>';
}
add_action('login_head','custom_login_logo');
function login_header_url() {
    return home_url();
}
add_filter('login_headerurl', 'login_header_url');

function login_header_title() {
    return get_bloginfo('name');
}
add_filter('login_headertitle', 'login_header_title');

/*
function change_menu_labels($t) {
    global $menu;
	//pre($menu);exti;
    $menu[103][0] = 'Backup';
    foreach($menu as $k=>$v){
	    if($v[0]==''){

	    }
    }
}
add_action('admin_menu', 'change_menu_labels' ,1000);
*/

?>