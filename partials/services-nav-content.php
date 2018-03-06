<nav id="services-nav">
<?php
  $current_page_id = get_the_ID();
  
  $services_cats = get_terms(array(
    'taxonomy' => 'services_categories',
    'parent' => 0,
    //'meta_key' => 'menu_order',
    'orderby' => 'ID',
    'hide_empty' => false
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

          if($parent_services->have_posts()): while($parent_services->have_posts()): $parent_services->the_post();
            $parent_page_id = get_the_ID(); ?>
            <li<?php if($parent_page_id == $current_page_id){ echo ' class="active"'; } ?>>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <?php 
                $children = wp_list_pages(array(
                  'child_of' => $parent_page_id, 
                  'post_type' => 'services_cpt',
                  'echo' => false,
                  'title_li' => ''
                ));
                if($children) : ?>
                  <ul>
                    <?php echo $children; ?>
                  </ul>
              <?php endif; ?>
            </li>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </ul><?php //sidebar-nav ?>
    <?php endforeach; ?>
  <?php endif; //service_cats ?>
</nav>
