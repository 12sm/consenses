<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="/wp-content/themes/consenses/assets/img/logo-top.png" class="img-responsive"></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
	  
	  <form class="navbar-form navbar-left" role="search" method="get" action="">
		  <div class="form-group">
			 <input type="search" name="s" class="search-field form-control" placeholder="Search">
		  </div>
		  <button type="submit" class="search-submit btn btn-default"><i class="fa fa-search"></i></button>
	  </form>
	  
    </nav>
  </div>
</header>
