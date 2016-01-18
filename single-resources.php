<?php get_header(); ?>

	<div id="primary" class="content-area">
		<?php //get_sidebar(); ?>
		<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
					
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
					
						<?php if($post->post_content != ""){ ?>
						<h2><?php the_title(); ?></h2>
						
						<?php the_content(); 
						}  ?>
						
						<?php if( get_field('download') ): ?>
							<ul class="grid effect-6" id="fonts">
							<?php while( has_sub_field('download') ): ?>
								<li>
								  <a href="<?php the_sub_field('file'); ?>">
								   <h3 style="display: none;"><?php the_sub_field('title'); ?></h3>
								   <img src="<?php the_sub_field('image'); ?>" />
								  </a>
								</li>
							<?php endwhile;?>
							</ul>
							<?php endif;  ?>
					
					
						<?php
							
							edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
						?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

				<?php // Previous/next post navigation.
				//twentyfourteen_post_nav();

				endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/images/masonry.pkgd.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/images/imagesloaded.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/images/classie.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/images/AnimOnScroll.js"></script>
<script>
			new AnimOnScroll( document.getElementById( 'logos' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
		</script>
<?php get_footer();