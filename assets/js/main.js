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

      //jquery to pull artist id 

      var artID = $('#artist-content').text(); //gets the id
      $('#field_rk2uay').val(artID); //puts it in the form

      soundManager.setup({
	      url: 'soundmanager2.swf',
	      flashVersion: 9, // optional: shiny features (default = 8)
	      // optional: ignore Flash where possible, use 100% HTML5 mode
	      // preferFlash: false,
	      onready: function() {
		      // Ready to use; soundManager.createSound() etc. can now be called.
		  }
	  });

      //Make forms submit and add in one click
	  $('.myzebra-add-new-term').text('Submit');
	  $('.myzebra-add-new-term').click(function() {
      setTimeout(function(){
		  $('#cred_form_661_1').submit();
      $('#cred_form_504_5').submit();
    }, 800);
	  });


    }
  },
  
  //single chains
/*  single_chains: {
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
	    $('.myzebra-text').attr("placeholder", "Sum it up in one word.");
    }
  }, */
  
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

