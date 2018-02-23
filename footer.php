<?php if(!is_page('contact')) : ?>
  <section id="contact-link">
    <div class="container">
      <h2><?php the_field('contact_section_title', 'option'); ?></h2>
      <?php the_field('contact_section_content', 'option'); ?>
      <a href="<?php the_field('content_section_link', 'option'); ?>" class="btn-main btn-alt"><?php the_field('contact_section_link_title', 'option'); ?></a>
    </div>
  </section>
<?php endif; ?>
  <footer>
    <div class="container">
      <nav id="footer-nav">
        <?php 
          $footer_nav_args = array(
            'theme_location' => 'footer_nav',
            'menu' => '',
            'container' => '',
            'menu_class' => 'nav navbar-nav'>,
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'mainstreettaxpros_footer_fallback_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$d</ul>',
            'depth' => 1,
            'walker' => new wp_bootstrap_navwalker()
          );
          wp_nav_menu($footer_nav_args); ?>
      </nav>
    </div>
    <section id="footer-contact">
      <div class="container container-sm-height">
        <div class="row row-sm-height">
          <div class="col-sm-4 col-md-5 col-sm-height">
            <div class="address">
              <p><?php the_field('company_name', 'option'); ?></p>
              <p><?php the_field('address', 'option'); ?></p>
              <p><?php the_field('city_state_zip', 'option'); ?></p>
            </div>
          </div>
          <div class="col-sm-4 col-md-2 col-sm-height">
            <a href="<?php echo home_url(); ?>" class="footer-logo">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive center-block" alt="Main Street Accounting Services Logo" />
            </a>
          </div>
          <div class="col-sm-4 col-md-5 col-sm-height">
            <div class="phone-email">
              <p>Phone: <?php the_field('phone', 'option'); ?></p>
              <p>Fax: <?php the_field('fax', 'option'); ?></p>
              <p><?php the_field('email', 'option'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="colophon">
      <nav id="colophon-nav">
        <?php
          $colophon_nav_args = array(
            'theme_location' => 'colophon_nav',
            'menu' => '',
            'container' => '',
            'menu_class' => 'nav navbar-nav',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'mainstreettextpros_colophon_fallback_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">',
            'depth' => 1,
            'walker' => new wp_bootstrap_navwalker()
          );
          wp_nav_menu($colophon_nav_args); ?>
      </nav>
      <div class="copyright">
        <p>&copy;<?php echo date('Y'); ?> Main Street Accounting Services, Inc.</p>
        <p>website created by <a href="https://childressagency.com" target="_blank">The Childress Agency</a></p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>