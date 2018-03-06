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
          <?php if(have_rows('accordion_layout')): ?>
            <div id="accordion_layout" class="panel-group" role="tablist" aria-multiselectable="true">
              <?php $i=0; while(have_rows('accordion_layout')): the_row(); ?>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading-<?php echo $i; ?>">
                    <h3 class="panel-title">
                      <a href="#collapse-<?php echo $i; ?>" role="button" data-toggle="collapse" data-parent="accordion_layout" aria-expanded="true" aria-controls="collapse=<?php echo $i; ?>">
                        <?php the_sub_field('accordion_title'); ?>
                      </a>
                    </h3>
                  </div>
                  <div id="collapse-<?php echo $i; ?>" class="panel-collapse collapse" role="tab-panel" aria-labelledby="heading-<?php echo $i; ?>">
                    <div class="panel-body">
                      <?php the_sub_field('accordion_content'); ?>
                    </div>
                  </div>
                </div>
              <?php $i++; endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>