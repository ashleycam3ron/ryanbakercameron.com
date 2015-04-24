<?php
// Custom excerpt length
	function custom_excerpt_length( $length ) {
		return 18;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Custom read more
	function new_excerpt_more( $more ) {
		return '[...]';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

?>