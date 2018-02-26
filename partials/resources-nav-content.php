<nav id="resources-nav">
<?php
  $current_page_id = get_the_ID();
  $resources_cats = get_terms(array(
    'taxonomy' => 'resources_categories',
    'parent' => 0,
    'meta_key' => 'menu_order',
    'orderby' => 'meta_value'
  ));

  if(!empty($resources_cats)):
    foreach($resources_cats as $resources_cat): ?>
      <h2><?php echo $resources_cat->name; ?></h2>
      <ul class="nav sidebar-nav">
        <?php 
          $parent_resources = new WP_Query(array(
            'post_type' => 'resources_cpt',
            'posts_per_page' => -1,
            'post_parent' => 0,
            'tax_query' => array(
              array(
                'taxonomy' => 'resources_categories',
                'field' => 'slug',
                'terms' => $resources_cat->slug
              )
            )
          ));

          if($parent_resources->have_posts()): while($parent_resources->have_posts()): $parent_resources->the_post();
            $parent_page_id = get_the_ID(); ?>
            <li<?php if($parent_page_id == $current_page_id){ echo ' class="active"'; } ?>>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <?php 
                $children = wp_list_pages(array(
                  'child_of' => $parent_page_id, 
                  'post_type' => 'resources_cpt',
                  'echo' => false,
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
  <?php endif; //resources_cats ?>
</nav>
