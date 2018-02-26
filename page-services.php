<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 col-md-4">
          <nav id="services-nav">
            <?php
              $services_cats = get_terms(array(
                'taxonomy' => 'services_categories',
                'parent' => 0,
                'meta_key' => 'menu_order',
                'orderby' => 'meta_value'
              ));

              if(!empty($services_cats)):
                foreach($services_cats as $services_cat): ?>
                  <h2><?php echo $services_cat->name; ?></h2>
                  <ul class="nav sidebar-nav">
                    <?php 
                      $parent_services = new WP_Query(array(
                        'post_type' => 'services_cpt',
                        'posts_per_page' => -1,
                        'post_parent' => 0,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'services_categories',
                            'field' => 'slug',
                            'terms' => $services_cat->slug
                          )
                        )
                      ));

                      if($parent_services->have_posts()): while($parent_services->have_posts()): $parent_services->the_post(); ?>
                        <ul class="nav sidebar-nav">

                        </ul>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                  </ul><?php //sidebar-nav ?>
                <?php endforeach; ?>
              <?php endif; //service_cats ?>
            </nav>
            <ul class="nav sidebar-nav">
              <li class="resource">
                <a href="#">Financial Calculators</a>
                <ul class="nav resources-sub-nav">
                  <li class="active">
                    <a href="#">Cash Flow</a>
                    <ul class="nav resources-sub-sub-nav">
                      <li><a href="#">How does inflation impact my standard of living?</a></li>
                      <li><a href="#">What is my projected cashflow?</a></li>
                      <li><a href="#">What is the value of reducing, postponing or foregoing expenses?</a></li>
                      <li><a href="#">Historical inflation - compare purchasing power</a></li>
                      <li><a href="#">How much am I spending?</a></li>
                      <li><a href="#">How much do I need for emergencies?</a></li>
                      <li><a href="#">Should I pay down debt or invest my monthly surplus?</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">College</a>
                    <ul class="nav resources-sub-sub-nav">
                      <li><a href="#">How much should I be saving for college?</a></li>
                      <li><a href="#">Feasibility of student loan repayment</a></li>
                      <li><a href="#">What are the advantages of a Coverdell ESA?</a></li>
                      <li><a href="#">What are the advantages of a 529 college savings plan?</a></li>
                      <li><a href="#">What is the value of a college education?</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Credit</a>
                    <ul class="nav resources-sub-sub-nav">
                      <li><a href="#">How long will it take to pay off my credit card?</a></li>
                      <li><a href="#">Should I pay off debt or invest?</a></li>
                      <li><a href="#">Should I transfer my credit card balances?</a></li>
                      <li><a href="#">Credit score estimator</a></li>
                      <li><a href="#">How long until my loan is paid off?</a></li>
                      <li><a href="#">What would my loan payments be?</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Home and Mortgage</a>
                    <ul class="nav resources-sub-sub-nav">
                      <li><a href="#">How much home can I afford?</a></li>
                      <li><a href="#">Which is better: Fixed or Adjustable-Rate mortgage?</a></li>
                      <li><a href="#">Adjustable rate mortgage calculator</a></li>
                      <li><a href="#">How do closing costs impact the interest rate?</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="resource">
                <a href="#">Resource Name 2</a>
                <ul class="nav resources-sub-nav">
                  <li><a href="#">Resource Sub Name 1</a></li>
                  <li><a href="#">Resource Sub Name 2</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-sm-7 col-md-8">
          <article>
            <h1>Resource introduction title</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
          </article>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>