<?php get_header(); ?>
  <main id="main">
    <div class="container-fluid container-sm-height">
      <div class="row row-sm-height">
        <div class="col-sm-6 col-sm-height contact-info-side">
          <div class="contact-info">
            <h3>Find us at:</h3>
            <p><?php the_field('company_name', 'option'); ?><br /><?php the_field('address', 'option'); ?> / <?php the_field('po_box', 'option'); ?><br /><?php the_field('city_state_zip', 'option'); ?></p>
            <h3>Email:</h3>
            <p><?php the_field('email', 'option'); ?></p>
            <h3>Phone:</h3>
            <p><?php the_field('phone', 'option'); ?></p>
            <h3>Fax:</h3>
            <p><?php the_field('fax', 'option'); ?></p>
            <h3>Hours:</h3>
            <p><?php the_field('hours', 'option'); ?></p>
          </div>
        </div>
        <div class="col-sm-6 col-sm-height form-side" style="background-color:#b9e937;">
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </main>
  <section id="google-map">
    <?php the_field('google_map_embed_code'); ?>
  </section>
<?php get_footer(); ?>