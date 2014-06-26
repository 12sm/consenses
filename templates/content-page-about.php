<div class="row">
	<div class="col-sm-12">
		<?php while (have_posts()) : the_post(); ?>
	 	<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</div>

<div class="row home-events container-full">
	<?php echo do_shortcode('[wpv-view name="HOME | EVENTS"]'); ?>
</div>