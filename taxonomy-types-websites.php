<?php
wp_enqueue_style('animate', get_stylesheet_directory_uri().'/css/animate.css', NULL, true);
 get_header(); ?>

	<section id="primary" class="content-area">
		<?php get_sidebar(); ?>
		<div id="header">
			<h1 class="arrow animated fadeInDown">Websites</h1>
			<p class="animated fadeInUp delay-5s">online presence / tool / co-speaker </p>
		</div>
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<ul id="thumbs" class="thumbs print">
						<?php while ( have_posts() ) : the_post(); ?>
						<li>
							<a href="#<?php //the_permalink(); ?>">						
								<?php if ( has_post_thumbnail() ){  the_post_thumbnail(); 
									} else { ?>
									 <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/no-image.png" />
									<?php } ?>
								<div>
								  <span>
								    <h3><?php the_title(); ?></h3>								    
								    <?php //credits
								    	if( has_term('minnow', 'post_tag' )){ get_template_part('credits'); } ?>
								  </span>
								</div>
								<?php
									//the_excerpt();
									edit_post_link( 'Edit', '', '', $post_id );
								?>
								<?php if (get_field('link')){ ?><a class="link" target="_blank" href="<?php the_field('link'); ?>"><?php the_field('link'); ?></a><?php } ?>
							</a>
						</li>
					<?php endwhile; ?>
					</ul>
				</article><!-- #post-## -->
			<?php endif;?>

		</div><!-- #content -->
	</section><!-- #primary -->

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.hoverdir.js"></script>
<script type="text/javascript">
	$(function() {
		$(' #thumbs > li ').each( function() { $(this).hoverdir(); } );
	});
</script>

<?php get_footer(); ?>