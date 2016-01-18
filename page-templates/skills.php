<?php
/*
Template Name: Skills
*/
?>
<?php add_action('wp_print_styles', 'stylesheet');
function stylesheet(){?>
	<style>
		body {
		    font-family: arial,verdana, sans-serif;
		    font-size: 11px;
		    color:#555;}
	</style>
<?php } ?>

<?php get_header();?>
<h2 id="the_title"><?php the_title();?></h2>
<?php //the_post();?>
<?php //the_content();?>
<?php 
    /*
query_posts(array( 
        'post_type' => '',
        'showposts' => -1,
		'orderby' => 'date',
		'order' => 'ASC'
    ) ); 
*/ 
?>
<?php while (have_posts()) : the_post(); ?>
<?php endwhile;?>

<ul id="skills">
<li data-dimension="175" data-text="Ai" data-info="Master" data-width="20" data-fontsize="30" data-percent="99.7" data-fgcolor="#ffa624" data-bgcolor="#eee"></li>

<li data-dimension="175" data-text="Ps" data-info="Expert" data-width="20" data-fontsize="30" data-percent="96" data-fgcolor="#3c3582" data-bgcolor="#eee"></li>

<li data-dimension="175" data-text="Id" data-info="Expert" data-width="20" data-fontsize="30" data-percent="90" data-fgcolor="#e23996" data-bgcolor="#eee"></li>

<li data-dimension="175" data-text="Dw" data-info="Expert" data-width="20" data-fontsize="30" data-percent="80" data-fgcolor="#87ed05" data-bgcolor="#eee"></li>

<li data-dimension="175" data-text="Coda" data-info="Expert" data-width="20" data-fontsize="30" data-percent="80" data-fgcolor="#67c01e" data-bgcolor="#eee"></li>

<li data-dimension="175" data-text="Flash" data-info="Proficient" data-width="20" data-fontsize="30" data-percent="55" data-fgcolor="#d3170b" data-bgcolor="#eee"></li>

<li data-dimension="175" data-text="WordPress" data-info="Expert" data-width="20" data-fontsize="20" data-percent="90" data-fgcolor="#bbb" data-bgcolor="#eee"></li>

<li data-dimension="175" data-text="HTML" data-info="Expert" data-width="20" data-fontsize="30" data-percent="90" data-fgcolor="#f3c50c" data-bgcolor="#eee"></li>

<li data-dimension="175" data-text="CSS" data-info="Expert" data-width="20" data-fontsize="30" data-percent="93" data-fgcolor="#18d590" data-bgcolor="#eee"></li>

<li data-dimension="175" data-text="jQuery" data-info="Proficient" data-width="20" data-fontsize="30" data-percent="70" data-fgcolor="#0769AD" data-bgcolor="#eee"></li>

<li data-dimension="175" data-text="PHP" data-info="Beginner" data-width="20" data-fontsize="30" data-percent="55" data-fgcolor="#9F91E6" data-bgcolor="#eee"></li>


<!-- <li data-dimension="175" data-text="HTML" data-info="85%" data-width="20" data-fontsize="32" data-percent="85" data-fgcolor="#61a9dc" data-bgcolor="#fff" data-fill="#ddd"></li> -->
</ul>

<script>
$( document ).ready(function() {
		$('#skills li').circliful();
    });
</script>


<?php get_footer();?>