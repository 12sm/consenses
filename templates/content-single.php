<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(container); ?> >
    <header>
    </header>
    <div class="entry-content">
	  <p class="date"><?php the_date(); ?></p>
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
