<?php
wp_enqueue_style('animate', get_stylesheet_directory_uri().'/css/animate.css', NULL, true);
 get_header(); ?>

	<section id="primary" class="content-area">
		<div id="header">
			<h1 class="arrow animated fadeInDown">Projects</h1>
			<p class="animated fadeInUp delay-4s">architecture / engineering / technology</p>
		</div>
		<div id="content" class="site-content" role="main">

			<?php
/*
$args = array(
  'orderby' => 'name',
  'parent' => 0
  );
$categories = get_categories( $args );
foreach ( $categories as $category ) {
	echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a><br/>';
}
*/
?>

<?php
//list terms in a given taxonomy using wp_list_categories  (also useful as a widget)
/*
$orderby = 'name';
$show_count = 1; // 1 for yes, 0 for no
$pad_counts = 1; // 1 for yes, 0 for no
$hierarchical = 1; // 1 for yes, 0 for no
$taxonomy = 'projects';
$title = '';

$args = array(
	'post_type' => 'projects',
  'orderby' => 'name',
  'show_count' => $show_count,
  'pad_counts' => $pad_counts,
  'hierarchical' => $hierarchical,
  //'taxonomy' => $taxonomy,
  'title_li' => $title
);
*/
?>
<!--
<ul>
<?php
//wp_list_categories($args);
?>
</ul>
-->


			<?php if ( have_posts() ) : ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<ul id="thumbs" class="thumbs print">
						<?php while ( have_posts() ) : the_post(); ?>
						<li>
							<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
							<a href="<?php echo $large_image_url[0]; ?>">						
								<?php if ( has_post_thumbnail() ){  the_post_thumbnail('medium'); 
									} else { ?>
									 <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/no-image.png" />
								<?php } ?>
								<div>
								  <span>
								      <h3><?php the_title(); ?></h3>		
								  </span>
								</div>
								<?php
									//the_excerpt();
									edit_post_link( 'Edit', '', '', $post_id );
								?>
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