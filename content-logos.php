<h2 style="display: none;"><?php the_title(); ?></h2>
						
						
<?php if( get_field('portfolio') ): ?>
	<ul class="grid effect-6" id="logos">
	<?php while( has_sub_field('portfolio') ): ?>
		<li><img src="<?php the_sub_field('image'); ?>" /></li>
	<?php endwhile;?>
	</ul>
<?php endif;  ?>
	
	
	