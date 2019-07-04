<?php
/*
  Template Name: Testimonial Page
*/
get_header();?>
<div class="container">

<div class="row">


<?php
    $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => 1,

    );
    $singleTestimonial = new WP_Query($args);
  ?>

<?php if( $singleTestimonial->have_posts() ): ?>
      <div class="section mb-3 ">
        <?php while( $singleTestimonial->have_posts() ): $singleTestimonial->the_post(); ?>
            <div class="card">
              <div class="card-body">
                <h3 class="card-title"><?php the_title(); ?></h3>
                <div class="card-text">
                  <?php the_content();?>
                </div>
              </div>
            </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

<?php get_footer();?>
