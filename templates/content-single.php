<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(container); ?> >
    <header>
    </header>
    <div class="entry-content">
	  <h1><?php wp_title(''); ?></h1>
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
