<div class="row container">
	<div class="col-sm-12 about-body-copy">
		<?php while (have_posts()) : the_post(); ?>
	 	<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</div>

<div class="row home-events container-full">
	<?php echo do_shortcode('[wpv-view name="HOME | EVENTS"]'); ?>
</div>