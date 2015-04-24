<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() ){  the_post_thumbnail('blog-thumb'); } ?>
		<h2 class="name"><?php the_title(); ?></h2>
	</a>
	<span class="date"><?php echo get_the_date(); ?></span>
	<?php the_excerpt(); ?>
	<?php wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
		) );

		edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
	?>
	<span class="tags"><?php the_tags( '', '', ''); ?></span>
	<div class="clear"></div>
</article><!-- #post-## -->