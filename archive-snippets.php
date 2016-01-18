<?php 
/* 
Template Name: Snippets 
*/ 
wp_dequeue_script('jquery');
wp_enqueue_script('jquery');
wp_enqueue_script('jquery-ui', '//code.jquery.com/ui/1.11.1/jquery-ui.js', NULL, true);

add_action('wp_print_styles', 'stylesheet');
function stylesheet(){ ?>
    <style>
    	#content{background: #555;}
    	#content .entry-content{padding:0 0 50px;margin: 0 auto;}
    	.ui-tabs { width:80%; }
		.ui-tabs .ui-tabs-nav { padding:0; float: left;width: 25%;; }
		.ui-tabs .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
		.ui-tabs .ui-tabs-nav li a { display:block; }
		.ui-tabs .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; border-right-width: 1px; }
		.ui-tabs .ui-tabs-panel {float: right; width:75%;}
		
		li.css.ui-state-active{background: #FD7C2A;
			/* IE9 SVG, needs conditional override of 'filter' to 'none' */
/*
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMCUiPgogICAgPHN0b3Agb2Zmc2V0PSI1NCUiIHN0b3AtY29sb3I9IiNmZDdjMmEiIHN0b3Atb3BhY2l0eT0iMSIvPgogICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjZmQ3YzJhIiBzdG9wLW9wYWNpdHk9IjAiLz4KICA8L2xpbmVhckdyYWRpZW50PgogIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjZ3JhZC11Y2dnLWdlbmVyYXRlZCkiIC8+Cjwvc3ZnPg==);
background: -moz-linear-gradient(left,  rgba(253,124,42,1) 54%, rgba(253,124,42,0) 100%); 
background: -webkit-gradient(linear, left top, right top, color-stop(54%,rgba(253,124,42,1)), color-stop(100%,rgba(253,124,42,0))); 
background: -webkit-linear-gradient(left,  rgba(253,124,42,1) 54%,rgba(253,124,42,0) 100%); 
background: -o-linear-gradient(left,  rgba(253,124,42,1) 54%,rgba(253,124,42,0) 100%); 
background: -ms-linear-gradient(left,  rgba(253,124,42,1) 54%,rgba(253,124,42,0) 100%);
background: linear-gradient(to right,  rgba(253,124,42,1) 54%,rgba(253,124,42,0) 100%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fd7c2a', endColorstr='#00fd7c2a',GradientType=1 ); 
*//* IE6-8 */
}
		li.jquery.ui-state-active{background: #9ACA27;
			/* IE9 SVG, needs conditional override of 'filter' to 'none' */
/*
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMCUiPgogICAgPHN0b3Agb2Zmc2V0PSI1NCUiIHN0b3AtY29sb3I9IiM5YWNhMjciIHN0b3Atb3BhY2l0eT0iMSIvPgogICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjOWFjYTI3IiBzdG9wLW9wYWNpdHk9IjAiLz4KICA8L2xpbmVhckdyYWRpZW50PgogIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjZ3JhZC11Y2dnLWdlbmVyYXRlZCkiIC8+Cjwvc3ZnPg==);
background: -moz-linear-gradient(left,  rgba(154,202,39,1) 54%, rgba(154,202,39,0) 100%); 
background: -webkit-gradient(linear, left top, right top, color-stop(54%,rgba(154,202,39,1)), color-stop(100%,rgba(154,202,39,0))); 
background: -webkit-linear-gradient(left,  rgba(154,202,39,1) 54%,rgba(154,202,39,0) 100%); 
background: -o-linear-gradient(left,  rgba(154,202,39,1) 54%,rgba(154,202,39,0) 100%);
background: -ms-linear-gradient(left,  rgba(154,202,39,1) 54%,rgba(154,202,39,0) 100%); 
background: linear-gradient(to right,  rgba(154,202,39,1) 54%,rgba(154,202,39,0) 100%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9aca27', endColorstr='#009aca27',GradientType=1 );
*/ /* IE6-8 */
}
		li.wordpress.ui-state-active{background: #229DEE;
			/* IE9 SVG, needs conditional override of 'filter' to 'none' */
/*
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMCUiPgogICAgPHN0b3Agb2Zmc2V0PSI1NCUiIHN0b3AtY29sb3I9IiMyMjlkZWUiIHN0b3Atb3BhY2l0eT0iMSIvPgogICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjMjI5ZGVlIiBzdG9wLW9wYWNpdHk9IjAiLz4KICA8L2xpbmVhckdyYWRpZW50PgogIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjZ3JhZC11Y2dnLWdlbmVyYXRlZCkiIC8+Cjwvc3ZnPg==);
background: -moz-linear-gradient(left,  rgba(34,157,238,1) 54%, rgba(34,157,238,0) 100%);
background: -webkit-gradient(linear, left top, right top, color-stop(54%,rgba(34,157,238,1)), color-stop(100%,rgba(34,157,238,0)));
background: -webkit-linear-gradient(left,  rgba(34,157,238,1) 54%,rgba(34,157,238,0) 100%); 
background: -o-linear-gradient(left,  rgba(34,157,238,1) 54%,rgba(34,157,238,0) 100%); 
background: -ms-linear-gradient(left,  rgba(34,157,238,1) 54%,rgba(34,157,238,0) 100%); 
background: linear-gradient(to right,  rgba(34,157,238,1) 54%,rgba(34,157,238,0) 100%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#229dee', endColorstr='#00229dee',GradientType=1 );
*/ /* IE6-8 */

		}
		#tabs .nav{margin: 38px 0 0 0;box-shadow: inset 0 0 9px rgba(0, 0, 0, 0.7);position: relative;z-index: 2;}
		#tabs .nav li{padding: 0;}
		#tabs .nav a {font-size: 1.2em;color: #8B8989;padding: 10px 20px 9px;border-bottom: 1px solid #555;/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMCUiPgogICAgPHN0b3Agb2Zmc2V0PSI1NCUiIHN0b3AtY29sb3I9IiM0NDQ0NDQiIHN0b3Atb3BhY2l0eT0iMSIvPgogICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjNDQ0NDQ0IiBzdG9wLW9wYWNpdHk9IjAiLz4KICA8L2xpbmVhckdyYWRpZW50PgogIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjZ3JhZC11Y2dnLWdlbmVyYXRlZCkiIC8+Cjwvc3ZnPg==);
background: -moz-linear-gradient(left,  rgba(68,68,68,1) 54%, rgba(68,68,68,0) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right top, color-stop(54%,rgba(68,68,68,1)), color-stop(100%,rgba(68,68,68,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(left,  rgba(68,68,68,1) 54%,rgba(68,68,68,0) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(left,  rgba(68,68,68,1) 54%,rgba(68,68,68,0) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(left,  rgba(68,68,68,1) 54%,rgba(68,68,68,0) 100%); /* IE10+ */
background: linear-gradient(to right,  rgba(68,68,68,1) 54%,rgba(68,68,68,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#444444', endColorstr='#00444444',GradientType=1 ); /* IE6-8 */
}
		#tabs .nav a:hover {background: #444;}
		#tabs > div {border-left: 7px solid #555;position: relative;z-index: 1;}
		#tabs > div#css.active{border-color:#FD7C2A;}
		#tabs > div#jquery.active{border-color:#9ACA27;}
		#tabs > div#wordpress.active{border-color:#229DEE;}
		#tabs .ui-state-active a{box-shadow: none;color: white;background: none;}
	    #tabs ul{list-style:none;margin:0;padding: 0;}
	    #tabs li{margin: 0;}
		#tabs a{display:block;border: 0;padding: 10px 20px;outline: none;}
		
		.snippets li:nth-child(even){background:#DFE3F0;}
		.snippets li:nth-child(odd){background:#fff;}
		.snippets li:hover{background:#F0F0F0;}
    </style>
<?php } ?>
<?php get_header(); ?>

<section id="primary" class="content-area">
	<?php get_sidebar(); ?>
	<div id="header">
		<h1 class="arrow animated fadeInDown">Snippets</h1>
		<p class="animated fadeInUp delay-5s">show me your tricks</p>
	</div>
	<div id="content" class="site-content" role="main">
		<div class="entry-content" id="tabs">
	<?php //List posts by taxonomy tag
        $terms = get_terms('language'); 
            if (count($terms)) { ?>
            <ul class="nav">
        <?php }
			$i=0; // counter for printing separator bars
            foreach ($terms as $term) {
                $wpq = array ('taxonomy'=>'language','term'=>$term->slug);
                $query = new WP_Query ($wpq);
                $snippets = $query->post_count;
                echo "<li class='".$term->slug."'><a href=\"#".$term->slug."\">".$term->name."</a></li>";
                // output separator bar if not last item in list
                if ( $i < count($terms)-1 ) {
                //echo " | " ;
                }
            $i++;
            } ?>
			</ul>
			
        <?php foreach ($terms as $term) {
            $wpq = array (
            	'taxonomy'=>'language',
            	'term'=>$term->slug, 
            	'posts_per_page' => -1,
            	'orderby'=>'title', 
            	'order'=>'ASC');
            $query = new WP_Query ($wpq);
            $snippets = $query->post_count; ?>
            <?php if ($snippets) { ?>
            <div id="<?php echo $term->slug ?>" class="snippets">
	            <ul>
	            <?php $posts = $query->posts;
	            foreach ($posts as $post) { ?>
	              <li>
					  <?php echo "<a href=\"".get_permalink()."\">".$post->post_title."</a>"; ?>
					  <?php //echo $post->post_title ?>
					  <?php //echo $post->post_content ?>
	              </li>
	            <?php } ?>
	            </ul>
            </div>
            <?php }} ?>
            <?php wp_reset_query(); ?>
        <div class="clear"></div>
		</div><!-- .entry-content -->
	</div><!-- #content -->
</section><!-- #primary -->

<script>
jQuery(document).ready(function($) {
  $(function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs" );
    $(".snippets[aria-hidden='false']").addClass( 'active');
  });
  $(function(){
	  $("#tabs a").click(function(){
	  	  $(".snippets").removeClass( 'active');
		  $(".snippets[aria-hidden='false']").addClass( 'active');
	  })
  })	
});
</script>

<?php get_footer();?>