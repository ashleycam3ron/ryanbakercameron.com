<?php get_header(); ?>
		
<section id="services">
<?php $post_id = 76;
	  $image = get_sub_field('image');
	  $title = $image['title'];
	  $i=7;
	if( get_field('slideshow', $post_id) ){ ?>
	<ul class="slides">
    <?php while( the_repeater_field('slideshow') ){ ?>
       <li style="background:url(<?php the_sub_field('image'); ?>) center no-repeat; background-size:cover;max-height:800px;">
       	 <div class="text">
       	 	<h1 class="arrow animated fadeInDown"><?php the_sub_field('title'); ?></h1>
       	 	<p class="animated fadeInUp delay-<?php echo $i++ * 1; ?>s"><?php the_sub_field('subtitle'); ?></p>
       	 </div>
       	 <img src="<?php the_sub_field('image'); ?>" style="visibility:hidden;max-height:800px;" title"" />
       </li>
    <?php } ?>
	</ul>
<?php } ?>
</section>

<section class="portfolio text-center section-padding" id="portfolio">
  <div class="container">
    <div class="row">
      <div id="portfolioSlider">
<?php $projects = new WP_Query( array(
		'post_type' => 'projects',
	    'showposts' => 3,
		'orderby' => 'date',
		'order' => 'DESC'
		));
	  $i=2;
		if ( $projects->have_posts() ) { ?>
		<ul class="slides">
			<li>
			<?php while ( $projects->have_posts() ) { $projects->the_post(); ?>
			<div class="col-md-4 wp4 delay-<?php echo $i++; ?>s">
	          <div class="overlay-effect effects clearfix">
	            <div class="img">
	              <?php if ( has_post_thumbnail() ){  the_post_thumbnail('medium'); 
					    } else { ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/no-image.png" />
				  <?php } ?>
	              <div class="overlay">
	                <a href="/projects<?php //the_permalink(); ?>" class="expand"><i class="fa fa-search"></i><br>View More</a>
	                <a class="close-overlay hidden">x</a>
	              </div>
	            </div>
	          </div>
	          <h2><?php the_title(); ?></h2>
	          <p><?php the_excerpt(); ?></p>
	        </div>
			<?php } ?>
			</li>
		</ul>
		<?php } wp_reset_postdata(); ?>
	  </div>
    </div>
  </div>
</section>

<section id="twitter">
	<?php dynamic_sidebar('twitter'); ?>
	<div class="clear"></div>
</section>

<section id="speaking"></section>

<?php get_footer();