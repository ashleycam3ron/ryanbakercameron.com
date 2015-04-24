<?php get_header(); ?>

	<div id="primary" class="content-area">
		
<?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<?php else :
	$image = get_stylesheet_directory_uri() . '/images/header-print.jpg'; ?>
<?php endif; ?>

		<div id="header" style="background-image: url('<?php if ( get_field('image') ){ the_field('image'); } else { ?> <?php echo get_stylesheet_directory_uri() ?>/images/hero.jpg <?php } ?>')">
			<span class="overlay"></span>
			<h2 class="title animated fadeInDown delay-5s"><?php the_title(); ?></h2>
			<!-- <p class="animated fadeInUp delay-5s">what's happening?</p> -->
		</div>
		
		<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post();
					get_template_part( 'content', 'news' );
				endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer();