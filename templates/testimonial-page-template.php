<?php
/*
  Template Name: Testimonial Page
*/
get_header();?>
<div class="container c-vh">

<div class="page-heading ">
  <h1 class="mt-5 mb-5 text-center">Customer Testimonials</h1>
</div>

  <div class="row">


<?php
    $args = array(
        'post_type' => 'testimonial',

    );
    $singleTestimonial = new WP_Query($args);
  ?>

<?php if( $singleTestimonial->have_posts() ): ?>
      <div class="section mb-3 ">
        <?php while( $singleTestimonial->have_posts() ): $singleTestimonial->the_post(); ?>
            <div class="card mb-5">
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
  </div>
</div>
<div class="page-footer">
  <footer class="font-small pt-4">
    <p class="text-center">Regina Tours Wordpress Theme 2019</p>
  </footer>
</div>

<?php get_footer();?>
