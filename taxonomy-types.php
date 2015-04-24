<?php get_header(); ?>

	<section id="primary" class="content-area">
		<?php get_sidebar(); ?>
		<div id="content" class="site-content portfolio" role="main">

			<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
					
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					
					<div class="entry-content">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php if ( has_post_thumbnail() ){ ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail(); ?>
							</a>
						<?php } else {
							//no image
							echo "no image";
							
						} ?>

						<?php
							the_content();
											
							edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
						?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
				
				

					<?php endwhile; ?>
					
					<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

<?php endif;?>


		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>
