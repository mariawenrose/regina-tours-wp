<?php
/*
  Template Name: Services Page
*/
get_header();?>
<div class="container">

<div class="row">


<?php
    $args = array(
        'post_type' => 'services'
        // 'category_name' => 'services',
    );
    $allServices = new WP_Query($args);
  ?>

  <?php if( $allServices->have_posts() ): ?>
    <div class="row mt-5 mb-3">
      <?php while( $allServices->have_posts() ): $allServices->the_post(); ?>
        <div class="col-md-4 d-flex align-items-stretch">
          <div class="card card-cascade narrower">
            <div class="view view-cascade overlay">
              <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail('medium_large', ['class'=>'service-image card-img-top img-fluid', 'alt' =>'thumbnail image for the post']); ?>
              <?php endif; ?>
            </div>
            <div class="card-body card-body-cascade">
              <h3 class="card-title"><?php the_title(); ?></h3>
              <div class="card-text">
                <?php the_content();?>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>












  </div>
</div>









<?php get_footer();?>