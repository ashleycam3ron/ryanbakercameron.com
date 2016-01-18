<?php get_header(); ?>

<div id="main-content" class="main-content">
	
	<div id="primary" class="content-area">
		<?php //get_sidebar(); ?>
		
		<?php if ( has_post_thumbnail() ) { ?>
			<div id="header-img"><?php the_post_thumbnail('full');?></div>
		<?php } ?>
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post();
					get_template_part( 'content', 'page' );
				endwhile; ?>

		</div><!-- #content -->
		
		<!-- <div class="clear"></div> -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_footer();