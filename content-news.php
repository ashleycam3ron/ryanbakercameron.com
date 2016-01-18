<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (has_post_thumbnail() ){ the_post_thumbnail('medium'); } ?>
	<div class="entry-content">
		
		<h2><?php the_title(); ?></h2>
		<span class="date"><?php echo get_the_date(); ?></span>
		<?php the_content();
			edit_post_link( __( 'Edit', 'ashleycameron' ), '<span class="edit-link">', '</span>' );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'ashleycameron' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) ); ?>
		<div class="clear"></div>
		<?php if( has_tag() ) { ?><span class="tags">Tags: <?php the_tags( '', '/', ''); ?></span><?php } ?>
		
		<div class="clear"></div>
	</div><!-- .entry-content -->
	
		
	<nav class="post">
        <div class="prev">
        	<span class="sub-title" >Previous article</span>
			<?php previous_post_link('<span class="prev-link">%link</span>'); ?>
			<i class="icon-chevron-left"></i>
		</div>
        <span class="sep"></span>
        <div class="next">
        	<span class="sub-title">Next article</span>
        	<?php next_post_link('<span class="next-link">%link</span>'); ?>
			<i class="icon-chevron-right"></i>
			
		</div>
		<div class="clear"></div>
    </nav>
</article><!-- #post-## -->
