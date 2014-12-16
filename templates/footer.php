<footer class="content-info container-full" role="contentinfo">
  <div class="row">
  <div class="col-sm-2 col-sm-offset-1">
    <img src="/wp-content/themes/consenses/assets/img/logo-footer.png" class="img-responsive footer-logo">
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
	  
      <form class="navbar-form navbar-left" role="search" method="get" action="">
		  <div class="form-group">
			 <input type="search" name="s" class="search-field form-control" placeholder="Search">
		  </div>
		  <button type="submit" class="search-submit btn btn-default"><i class="fa fa-search"></i></button>
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

<div class="modal fade thank-you modal-lg" id="thankyou" tabindex="-1" role="dialog" aria-labelledby="thankyou" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Thanks for your submission!</h4>
      </div>
      <div class="modal-body">
        <p>Your post will be made live shortly live pending Consenses.org review.</p>
        <img src="http://stage.consenses.org/wp-content/themes/consenses/assets/img/logo-top.png" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div><
</div>

<div class="modal fade oops modal-lg" id="oops" tabindex="-1" role="dialog" aria-labelledby="error" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Oops! Try again, please.</h4>
      </div>
      <div class="modal-body">
        <p>It looks like you have entered the CAPTCHA code incorrectly. Please try again.</p>
        <img src="http://stage.consenses.org/wp-content/themes/consenses/assets/img/logo-top.png" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div><
</div>

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27814560-38', 'auto');
  ga('send', 'pageview');

</script>

<!-- Begin 12SM Network Analytics <!-->   
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27814560-1', 'auto');
  ga('send', 'pageview');

</script>
 <!-- End 12SM Network Analytics <!--> 