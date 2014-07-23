/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
      $('.img-container').imgLiquid();
      $('.img-video-tab > .entry-content-asset').fitVids();
      $('.vid-container').fitVids();
      $('.myzebra-prime-name-post_tag > .myzebra-text').attr("placeholder", "Sum it up in one word.");

      //jquery to pull artist id 

      var artID = $('#artist-content').text(); //gets the id
      $('#field_rk2uay').val(artID); //puts it in the form

      soundManager.setup({
      	  preferFlash: false,
      	  useFlashBlock: true,
	      url: '/assets/js',
	      flashVersion: 9
	  });
	  
	  soundManager.onready(function() {
		  // soundManager.createSound() etc. may now be called
		  inlinePlayer = new InlinePlayer();
	  }); 



      //Make forms submit and add in one click
	  $('.myzebra-add-new-term').text('Submit');
	  $('.myzebra-add-new-term').click(function() {
      var theID = $(this).closest('form').attr('id');
      var form = document.getElementById(theID);
      setTimeout(function(){
      form.submit();
    }, 800);
	  });

	if(getQueryVariable('_success_message')){
		$('.thank-you').modal('toggle')
	}
	
	if($('.myzebra-validation-error').length!=0){
		$('.oops').modal('toggle')
	}
	
	
	
	$('.sumbit-panel').click(function() {
		$('.myzebra-captcha_show').click();
	});


    }
  },
  
  //single chains
  single_chains: {
    init: function(){
	    
	    //Open submit modal on open of page
	    if(window.location.hash) {
		    var hash = window.location.hash.substring(0);
		    $(hash).modal('show')
		}

		//masonry
		imagesLoaded( '.js-masonry', function() {
        	var container = document.querySelector('.js-masonry');
        	var msnry = new Masonry( container, {
	        	// options...
	        	itemSelector: '.item',
	        	gutter: 5
	        });
	    });

    }
  }, 
  
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
    }
  },
  
  post_type_archive_artists: {
    init: function() {
      // JavaScript to be fired on the home page
      $('.artists').infinitescroll({
	      navSelector  : ".post-nav .pager",            
          // selector for the paged navigation (it will be hidden)
          nextSelector : ".post-nav .pager .previous a",    
          // selector for the NEXT link (to page 2)
          itemSelector : ".artists .artist"          
          // selector for all items you'll retrieve
      }, function() {
      	$('.img-container').imgLiquid();	
      });
      
    }
  },
   
 //Create page
 create: {
    init: function(){
      $('.fire-create').click(function(){
        $('#submit-form').modal();
      });

      //Grab post id
      var artID = $('#createID').text(); //gets the id
  $('#field_7zp7h4').val(artID);

    }
  },
  
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  },
  exhibit: {
	  init: function() {
			  
	  }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

