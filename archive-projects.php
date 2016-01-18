<?php
wp_enqueue_style('animate', get_stylesheet_directory_uri().'/js/parallax/css/main.css', NULL, true);
get_header(); ?>

	<section id="primary" class="content-area">
		<div id="header">
			<h1 class="arrow animated fadeInDown">Projects</h1>
			<p class="animated fadeInUp delay-4s">architecture / engineering / technology</p>
		</div>
		<div id="content" class="site-content" role="main">



								<?php /*
if ( has_post_thumbnail() ){  the_post_thumbnail('medium');
									} else { ?>
									 <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/no-image.png" />
								<?php }
*/ ?>


			<?php
				$i = 1;
				//$full_img = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'full' );

				if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post();
					$large_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
				?>

				<article id="slide-<?php echo $i++; ?>" class="homeSlide homeSlideTall">
					<div class="bcg skrollable skrollable-after" data-center="background-position: 50% 0px;" data-bottom-top="background-position: 50% 100px;" data-top-bottom="background-position: 50% -100px;" style="background-image:url(<?php echo $large_img[0]; ?>); background-repeat: no-repeat;background-size:cover; background-position: 50% -100px;">
						<div class="curtainContainer">
							<div class="curtain skrollable skrollable-after" data-bottom-top="opacity: 0" data-106-top="height: 1%; opacity: 0; top: -10%;" data-center="height: 100%; opacity: 0.6; top: 0%;" style="opacity: 0.6; height: 100%; top: 0%;">
							</div>
							<div class="copy skrollable skrollable-after" data-bottom-top="opacity: 0" data--100-bottom="opacity: 0" data--280-bottom="opacity: 1;" data-280-top="opacity: 1;" data-106-top="opacity: 0;" style="opacity: 0;">
								<h2><?php the_title(); ?></h2>
								<?php the_excerpt(); ?>
								<?php if( has_tag() ) { ?><span class="tags">Tags: <?php the_tags( '', '/', ''); ?></span><?php } ?>
								<?php edit_post_link( 'Edit', '', '', $post_id ); ?>
							</div>
						</div>
					</div>
				</article><!-- #post-## -->
				<?php endwhile; ?>
			<?php endif;?>


		</div><!-- #content -->
	</section><!-- #primary -->

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/parallax/imagesloaded.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/parallax/skrollr.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/parallax/_main.js"></script>

<?php get_footer(); ?>