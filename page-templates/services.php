<?php
/*
Template Name: Services
*/
?>
<?php get_header(); ?>

<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<?php get_sidebar(); ?>
	    <div id="header">
		    <ul id="scene">
			  <li class="layer shadow" data-depth="0.05"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/animals-shadow.png"></li>
			  <li class="layer" data-depth="-0.07"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/animals.png"></li>
			  <li class="layer" data-depth="-0.25"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/animals-outline.png"></li>
			</ul>
	    </div>
		<div id="content" class="site-content services" role="main">

			<?php while ( have_posts() ) : the_post();
					get_template_part( 'content', 'page' );
				endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/parallax.min.js"></script>
<script>
	var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);
</script>

<?php get_footer();