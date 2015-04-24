<?php 
/* 
Template Name: Snippets 
*/ 

add_action('wp_print_styles', 'stylesheet');
function stylesheet(){ ?>
    <style>
		#main{background:#FDF8F8;}
		h1{text-transform: uppercase;letter-spacing: .1em;}
		h2{margin: 10px 0 3px 0;padding:.4em 3.5%;color:white;font-size:1.2em;letter-spacing: .1em;width: 93%;
font-weight: normal;display:block;}
		h2#html{background: #DE4206;}
		h2#css,
		#quick > div :nth-child(2):hover,
		#quick > div :nth-child(2).active{background: #FD7C2A;}
		h2#functions,
		a#functions {background: #EFB62B;}
		h2#jquery,
		#quick div :nth-child(3):hover,
		#quick div :nth-child(3).active{background: #9ACA27;}
		h2#sql,
		a#sql {background: #3CC16E;}
		h2#wordpress,
		#quick div :nth-child(4):hover,
		#quick div :nth-child(4).active{background: #229DEE;}
		#quick div input{background: #555;}
        ul.code{list-style:none;margin:0;width: 100%;clear: left;}
		ul.code li:nth-child(even){background:#DFE3F0;}
		ul.code li:nth-child(odd){background:#fff;}
		ul.code li{padding: 0 12px;position: relative;z-index: 2;}
		ul.code li:hover{background:#646464;}
		ul.code a{display:block;}
		#main a{color: #777;font-size: 1.1em;text-decoration: none;padding: .4em 2em .4em 1em;border: 0;}
		#main li:hover a{border:0;color:#eee;}
		#snippets{padding-top: 41px;}
		#quick{z-index:5;background:#333;color: #FFF;left: 0;position: absolute;width: 100%;border-bottom: 1px solid #FFF;}
		#quick > div{float:left;width: 77%;}
		#quick a{padding:9px 2%;border-right: 1px dotted #FFF;color:#7C7C7C;display: inline-block;float: left;}
		#quick a:hover, #quick a.active{color:white;}
		#quick h3{margin: 0 0 0 180px;display: inline;text-transform: uppercase;font-size: 1em;font-weight: normal;letter-spacing: .2em;border-right: 1px dotted #FFF;padding: 9px 2%;float: left;}
		#top{color: white;}
		.entry-content h2{margin: -42px 0 0;padding-top: 50px;}
		.entry-content li{margin:0;}
    </style>
<?php } ?>
<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content stickem-container">
    <?php //List posts by taxonomy tag
        $terms = get_terms('language'); 
            if (count($terms)) {
            echo "<div id='quick' class='stickem'><div><h3>Quick links</h3>";
            }
        $i=0; // counter for printing separator bars
            foreach ($terms as $term) {
                $wpq = array ('taxonomy'=>'language','term'=>$term->slug);
                $query = new WP_Query ($wpq);
                $article_count = $query->post_count;
                echo "<a class='scroll' href=\"#".$term->slug."\">".$term->name."</a>";
                // output separator bar if not last item in list
                if ( $i < count($terms)-1 ) {
                //echo " | " ;
                }
            $i++;
            } ?>
            <a href="#site-navigation" class="scroll" id="top">BACK TO TOP</a>
			</div>
            <?php get_search_form(); ?>
        </div>
        <div id="snippets">
        <?php foreach ($terms as $term) {
            $wpq = array ('taxonomy'=>'language','term'=>$term->slug, 'posts_per_page' => -1,'orderby'=>'title', 'order'=>'ASC');
            $query = new WP_Query ($wpq);
            $article_count = $query->post_count; ?>
            <h2 id="<?php echo $term->slug ?>" class="doc-section"><?php echo $term->name; ?></h2>
            <?php if ($article_count) { ?>
            <ul class="code">
            <?php $posts = $query->posts;
            foreach ($posts as $post) {
            echo "<li><a href=\"".get_permalink()."\">".$post->post_title."</a></li>";
            } ?>
            </ul>
            <?php }} ?>
            </div>
    </div>
	<?php wp_reset_query(); ?>
</article>

<?php wp_enqueue_script(array('waypoints')); ?>
<script>
jQuery(document).ready(function($) {
 	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
	});
	
	$(window).scroll(function(){
		var scrollTop = 195;
		if($(window).scrollTop() >= scrollTop){
			$('#quick').css({
				position : 'fixed',
				top : '0'
			});
		}
		if($(window).scrollTop() < scrollTop){
			$('#quick').removeAttr('style');	
		}
	})
	
	$('#quick div :nth-child(2)').addClass('active');
	$("#quick a").click(function(){
		$('#quick div a').removeClass('active'); //remove the class *only* from this one
        $(this).addClass('active');
	});
	
});	
//highlight navigation as scrolling
	/* Docs nav highlighting */
  /*$(function() {
    $('.doc-section')
      .waypoint(function(direction) {
        var $links = $('a[href="#' + this.id + '"]');
        $links.toggleClass('active', direction === 'down');
      }, {
        context: '#snippets',
        offset: '100%'
      })
      .waypoint(function(direction) {
        var $links = $('a[href="#' + this.id + '"]');
        $links.toggleClass('active', direction === 'up');
      }, {
        context: '#snippets',
        offset: function() {
          return $.waypoints('viewportHeight') / 5 - $(this).outerHeight();
  }
      });
  });*/

	
</script>

<?php get_footer();?>