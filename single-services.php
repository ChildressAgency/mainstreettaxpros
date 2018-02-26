<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 col-md-4">
          <?php get_template_part('partials/services-nav', 'content'); ?>
        </div>
        <div class="col-sm-7 col-md-8">
          <article>
            <?php 
              if(have_posts()): while(have_posts()): the_post();
                the_content(); 
              endwhile; endif; 
            ?>
          </article>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>