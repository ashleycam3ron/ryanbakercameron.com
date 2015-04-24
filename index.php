<?php get_header(); ?>

<div id="main-content" class="main-content">
	
	<div id="primary" class="content-area">	
		<div id="header-img">	
	<?php //get last post featured image
		$last = get_posts("post_type=post&numberposts=1");			
			the_post_thumbnail($last[0]->ID,'full');
			if ( has_post_thumbnail() ) { ?>
				<?php the_post_thumbnail('full');?>
		<?php } else { ?>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero.jpg" alt="hero">
		<?php } ?>
			<div id="text">
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			</div>
		</div>

<div id="controls">
	<div id="filters" class="button-group">
	  <h2>Filter</h2>
	  <button class="button is-checked" data-filter="*">all</button>
	  <button class="button" data-filter=".category-news">news</button>
	  <button class="button" data-filter=".category-architecture">architecture</button>
	  <button class="button" data-filter=".category-projects">projects</button>
	  <button class="button" data-filter=".category-software">software</button>
	  <button class="button" data-filter=".category-engineering">engineering</button>
	</div>
	
	<div id="sorts" class="button-group">
	  <h2>Sort</h2>
	  <button class="button is-checked" data-sort-by="original-order">date</button>
	  <button class="button" data-sort-by="name">Title</button>
	<!--   <button class="button" data-sort-by="category">category</button> -->
	</div><div class="clear"></div>
</div>

<!--
<ul class="categories">
<?php
    $args = array (
        'echo' => 0,
        'show_count' => 1,
        'title_li' => '',
        'depth' => 1
    );
    $variable = wp_list_categories($args);
    $variable = str_replace ( "(" , "<span>", $variable );
    $variable = str_replace ( ")" , "</span>", $variable );
    echo $variable;
?>
</ul>
-->
		<div id="content" class="site-content" role="main">
		
			<?php while ( have_posts() ) : the_post();
					get_template_part( 'content', 'blog' );
				endwhile; ?>

			 <!--
 <article class="element-item transition metal " data-category="transition">
			    <h3 class="name">Mercury</h3>
			  </article>
-->

		</div><!-- #content -->
		
		<!-- <div class="clear"></div> -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<script src="http://codepen.io/assets/libs/fullpage/jquery.js"></script>
<!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/isotope/isotope.pkgd.min.js"></script> -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/isotope/isotope.js"></script>
<script src="http://isotope.metafizzy.co/beta/isotope.pkgd.js"></script>

  <script src='http://isotope.metafizzy.co/beta/bower_components/isotope-cells-by-column/cells-by-column.js'></script>
  <script src='http://isotope.metafizzy.co/beta/bower_components/isotope-cells-by-row/cells-by-row.js'></script>
  <script src='http://isotope.metafizzy.co/beta/bower_components/isotope-fit-columns/fit-columns.js'></script>
  <script src='http://isotope.metafizzy.co/beta/bower_components/isotope-horizontal/horizontal.js'></script>
  <script src='http://isotope.metafizzy.co/beta/bower_components/isotope-masonry-horizontal/masonry-horizontal.js'></script>


<?php get_footer();