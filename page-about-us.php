<?php get_header(); ?>
  <main id="main">
    <div class="container container-sm-height">
      <div class="row row-sm-height about-row">
        <div class="col-sm-3 col-sm-height">
          <div id="continuing-education" class="about-row-icon">

          </div>
        </div>
        <div class="col-sm-9 col-sm-height">
          <div class="about-row-content">
            <h2>Continuing Education</h2>
            <?php the_field('continuing_education_section_content'); ?>
          </div>
        </div>
      </div>
      <div class="row row-sm-height about-row">
        <div class="col-sm-3 col-sm-height">
          <div id="professionalism" class="about-row-icon">

          </div>
        </div>
        <div class="col-sm-9 col-sm-height">
          <div class="about-row-content">
            <h2>Professionalism</h2>
            <?php the_field('professionalism_section_content'); ?>
          </div>
        </div>
      </div>
      <div class="row row-sm-height about-row">
        <div class="col-sm-3 col-sm-height">
          <div id="small-town-values" class="about-row-icon">

          </div>
        </div>
        <div class="col-sm-9 col-sm-height">
          <div class="about-row-content">
            <h2>Small town Values</h2>
            <?php the_field('small_town_values_section_content'); ?>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php if(have_rows('team_members')): ?>
    <section id="meet-the-team">
      <h2 class="section-title">Meet the team</h2>
      <div class="container">
        <?php while(have_rows('team_members')): the_row(); ?>
          <div class="row team-row">
            <div class="col-sm-3">
              <?php if(get_sub_field('team_member_image')): ?>
                <img src="<?php the_sub_field('team_member_image'); ?>" class="img-responsive img-circle center-block" alt="" />
              <?php else: ?>
                <span class="dashicons dashicons-businessman img-circle"></span>
              <?php endif; ?>
            </div>
            <div class="col-sm-9">
              <div class="team-member-info">
                <h3><?php the_sub_field('team_member_name'); ?> - <?php the_sub_field('team_member_title'); ?></h3>
                <?php the_field('team_member_bio'); ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </section>
  <?php endif; ?>

  <?php if(get_field('our_clients_section_content')): ?>
    <section id="our-clients">
      <h2 class="section-title">Our Clients</h2>
      <div class="container">
        <article>
          <?php the_field('our_clients_section_content'); ?>
        </article>
      </div>
    </section>
  <?php endif; ?>
<?php get_footer(); ?>