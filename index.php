<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <?php if(is_single() || is_singular()): ?>
        <article>
          <?php the_content(); ?>
        </article>
      <?php else: ?>
        <div class="summary-section">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
        </div>
      <?php endif; ?>
    <?php endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>