<footer class="content-info container-full" role="contentinfo">
  <div class="row">
  <div class="col-sm-2 col-sm-offset-1">
    <img src="/wp-content/themes/consenses/assets/img/logo-footer.png" class="img-responsive">
  </div>
    <div class="col-sm-9">
      <div class="row sidebar-footer">
      	<?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
    <div class="row footer-nav">  
        <?php
     if (has_nav_menu('footer_navigation')) :
       wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => ''));
     endif;
  ?>
  <ul class="socials">
        <li><a href="https://www.facebook.com/pages/CONSENSES/430573690342868" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
        <li><a href="https://twitter.com/ConSensesArt" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.facebook.com/pages/CONSENSES/430573690342868" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="mailto:#" target="_blank"><i class="fa fa-envelope-o"></i></a></li>
      </ul>
	  
	  <form class="navbar-form navbar-right" role="search">
		  <div class="form-group">
			 <input type="text" class="form-control" placeholder="Search">
		  </div>
		  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
	  </form>
	  
    </div>
	  
	  
	  <div id="social" class="row social-nav">
  <?php
     if (has_nav_menu('social_navigation')) :
       wp_nav_menu(array('theme_location' => 'social_navigation', 'menu_class' => ''));
     endif;
  ?>
  </div>
    </div>
  </div>
  <div class="row">
  	<div class="col-sm-12">
		      <p class="credits">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>  | No materials in this web site may be reproduced, copied, downloaded, or used in any form without permission.
	  <br />
	  <a href="http://12southmusic.com/" target="_blank">built by 12SM</a>
	  </p>
	</div>
  </div>
</footer>

<?php wp_footer(); ?>

<!-- Begin 12SM Network Analytics <!-->   
  <script type="text/javascript">
	var _gaq = _gaq || [];
  	_gaq.push(['_setAccount', 'UA-27814560-1']);
  	_gaq.push(['_setDomainName', '12southmusic.com']);
  	_gaq.push(['_setAllowLinker', true]);
  	_gaq.push(['_trackPageview']);
 	(function() {
	  	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	  	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	  	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  	})();
	</script>
  <!-- End 12SM Network Analytics <!--> 