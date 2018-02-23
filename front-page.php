<?php get_header(); ?>
  <main id="hp-main">
    <div class="container">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
      <div class="row">
        <div class="col-sm-4">
          <div id="continuing-education" class="icon-card">
            <h3>Continuing Education</h3>
          </div>
        </div>
        <div class="col-sm-4">
          <div id="professionalism" class="icon-card">
            <h3>Professionalism</h3>
          </div>
        </div>
        <div class="col-sm-4">
          <div id="small-town-values" class="icon-card">
            <h3>Small Town Values</h3>
          </div>
        </div>
      </div>
      <a href="<?php echo home_url('about-us'); ?>" class="btn-main btn-alt">Learn More</a>
    </div>
  </main>
  <section id="our-services">
    <h1 class="section-title">Our Services</h1>
    <div class="container-fluid container-sm-height">
      <div class="row row-sm-height">
        <div id="service-card-1" class="col-sm-4 col-sm-height service-card" style="background-image:url(<?php the_field('service_card_1_background_image'); ?>);<?php the_field('service_card_1_background_image_css'); ?>">
          <div class="caption">
            <h2><?php the_field('service_card_1_title'); ?></h2>
            <?php the_field('service_card_1_content'); ?>
          </div>
          <div class="overlay"></div>
        </div>
        <div id="service-card-2" class="col-sm-4 col-sm-height service-card" style="background-image:url(<?php the_field('service_card_2_background_image'); ?>);<?php the_field('service_card_2_background_image_css'); ?>">
          <div class="caption">
            <h2><?php the_field('service_card_2_title'); ?></h2>
            <?php the_field('service_card_2_content'); ?>
          </div>
          <div class="overlay"></div>
        </div>
        <div id="service-card-3" class="col-sm-4 col-sm-height service-card" style="background-image:url(<?php the_field('service_card_3_background_image'); ?>);<?php the_field('service_card_3_background_image_css'); ?>">
          <div class="caption">
            <h2><?php the_field('service_card_3_title'); ?></h2>
            <?php the_field('service_card_3_content'); ?>
          </div>
          <div class="overlay"></div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>