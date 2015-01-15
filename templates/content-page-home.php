<div class="row home-top">
	<div class="col-sm-6 col-sm-offset-1 banner-box">
		<div class="welcome-box">
			<h2>Welcome to <span class="red">Consenses</span></h2>
			<h4>Art makes <span class="red">sense.</span></h4>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-4">
				<a href="/explore/">
				<div class="explore-but">
					<h3>Explore</h3>
				</div></a>
			</div>
			<div class="col-md-6 col-lg-4">
			<a href="/create/">
				<div class="create-but">
					<h3>+ Create</h3>
				</div>
			</a>
			</div>
		</div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <p class="white">An Artistic Game of Telephone</p>
      </div>
    </div>
		<div class="row">
			<div class="col-md-12 hidden-sm hidden-xs">
				<div 	class="row vid-container">
					<div class="col-sm-6">
						<h2 class="white">Welcome from Sally Taylor</h2>
						<div class="entry-content-asset">
							<iframe width="1140" height="641" src="https://www.youtube.com/embed/zieRX0t6MPU?wmode=transparent&amp;rel=0" frameborder="0" allowfullscreen></iframe>
						</div>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<<<<<<< HEAD
<div class="row welcome">
	<div class="col-sm-12 hidden-md hidden-lg">
		<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</div>
=======
>>>>>>> parent of ae30b7b... add page content to home
<div class="row home-events">
	<?php echo do_shortcode('[wpv-view name="HOME | EVENTS"]'); ?>
</div>
<div class="row home-bottom col weekly-challenge" id="weekly-challenge">
			<div class="col-sm-12">
				<?php echo do_shortcode('[wpv-view name="HOME | WEEKLY CHALLENGE | CHAIN"]'); ?>
			</div>
</div>
<div class="row mail-list">
	<div class="col-sm-6 col-sm-offset-3">
	<h4>Stay up to date with the latest Consenses Events and Projects</h4>
	<p>Sign up Here</p>
		<!-- Begin MailChimp Signup Form -->
		<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
		<style type="text/css">
		  #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
		</style>
		<div id="mc_embed_signup">
		<form action="http://consenses.us3.list-manage.com/subscribe/post?u=929115a3f25a36b9f13919a82&amp;id=a83cef7766" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		  <label for="mce-EMAIL">Subscribe to our mailing list</label>
		  <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
		    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		    <div style="position: absolute; left: -5000px;"><input type="text" name="b_929115a3f25a36b9f13919a82_a83cef7766" value=""></div>
		  <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		</form>
		</div>

		<!--End mc_embed_signup-->
	</div>
</div>

<hr />
<div class="row home-news-main col">
	<div class="col-sm-12">
		<div class="row home-news">
			<?php echo do_shortcode('[wpv-view name="HOME | NEWS"]'); ?>
		</div>
	</div>
</div>