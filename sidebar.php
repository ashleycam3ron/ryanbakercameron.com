<div class="sidebar col">
	<div class="open apps">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apps.png">
	</div>
	<div class="close apps" style="display: none;">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apps-close.png">
	</div>
	<h1 class="widget-title">Connect</h1>
	<nav id="social">
		<h2>Social Navigation</h2>
		<?php wp_nav_menu(array('menu' => 'social')); ?>
	</nav>
	
	<?php if ( ! is_active_sidebar( 'sidebar-2' ) ) {
		return;
	} ?>
	<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
		
		
	</div><!-- #content-sidebar -->

</div>
