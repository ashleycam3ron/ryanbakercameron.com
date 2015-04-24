// remap jQuery to $
(function($){})(window.jQuery);
/* trigger when page is ready */
	$(document).ready(function (){  

//smooth scroll
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

	/*
$(".page-loader").delay( 800 ).fadeOut(1500);
	$( "#post-340 h3,#post-340 h4" ).wrap( "<div class='heading'></div>" );
*/
/*
 $('.gn-icon-menu').click( function() { // Execute when the toggle button is clicked.
    $(this).toggle(function() {      // Attach toggle function that fire different
      $(this).animate({width:"340px"});
    }
  });
*/
  
  /*
$('.gn-icon-menu').toggle(function() {
	  $(this).animate({width:'340px'});
	}, function() {
	  $(this).animate({width:'60px'});
	});
*/
  
    
  /*
$('gn-scroller').hover(function() {
  	$('.gn-icon-menu').animate({width:'toggle'});
  });
  
  $('#recent-posts-3 ul li').addClass("gn-icon gn-icon-rocket");
  
*/
  /*
$('.sidebar .btn').hover(function() {
  	$('.sidebar').toggleClass('open');
  });
*/
  
  /*
$('.sidebar').hover(function() {
	  $(this).animate({right:'0px'});
	  $('#main').animate({left: '-250px'});
	}, function() {
	  $(this).animate({right:'-250px'}, 1000);
	  $('#main').animate({left: '0px'}, 1000);
	});
*/
  
  
  
});