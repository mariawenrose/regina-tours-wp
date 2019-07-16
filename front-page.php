<?php get_header();?>
<div class="container-fluid">

<div class="row">
  <div class="col-12">
    <div class="header-container text-container" style="background-image: url(<?php header_image(); ?>);"></div>
  </div>
</div>
      
  <?php
    $args = array(
        'post_type' => 'services',
        'posts_per_page' => 3,

    );
    $allServices = new WP_Query($args);
  ?>

  <?php if( $allServices->have_posts() ): ?>
      <div class="row mt-5 mb-3">
        <?php while( $allServices->have_posts() ): $allServices->the_post(); ?>
          <div class="col-md-4 mb-3 d-flex align-items-stretch">
            <div class="card card-cascade narrower">
              <div class="view view-cascade overlay">
                <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('medium_large', ['class'=>'service-image card-img-top img-fluid', 'alt' =>'Regina Tours Israel service post feature image']); ?>
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

<!-- Testimononial Section Starts -->
           
  <?php
    $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => 1,

    );
    $singleTestimonial = new WP_Query($args);
  ?>

<?php if( $singleTestimonial->have_posts() ): ?>
      <div class="section mb-3">
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

<!-- Testimonial Section Ends -->  

<!-- Blog Posts Section Starts -->

    <?php 
        $args = array (
          'post_type' => 'package',
          'posts_per_page' => 3,
        );
        $singlePackage = new WP_Query($args);
      ?>

      <?php if ( $singlePackage->have_posts() ): ?>
        <div class="section mt-5">
          <?php while ($singlePackage ->have_posts() ): $singlePackage->the_post(); ?>
          <div id="blog-card" class="card d-flex flex-row mb-3">
            <div class="custom-card-image">
            <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail('medium_large', ['class'=>'blog-post-image', 'alt' =>'Regina Tours Israel blog post feature image']); ?>
            <?php endif; ?>
            </div>
            <div class="blog-post-text">
              <h3 class="card-title mt-4"><?php the_title();?></h3>
              <div class="card-text">
                <?php the_content();?>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

<!-- Packages Section Ends -->

<!-- Contact Form Starts -->

    <div class="mt-4">

    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <p class="text-center w-responsive mx-auto mb-5">
        Have a question? Send us message and one of our team members will be in touch.
    </p>

    <div class="row">
      <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="contact.php" method="POST">

            <div class="row">
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="name" name="name" class="form-control">
                  <label for="name" class="">Your name</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="email" name="email" class="form-control">
                  <label for="email" class="">Your email</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <input type="text" id="subject" name="subject" class="form-control">
                  <label for="subject" class="">Subject</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="md-form">
                  <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                  <label for="message">Your message</label>
                </div>
              </div>
            </div>
          </form>

          <div class="text-center text-md-left">
            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
          </div>
          <div class="status"></div>
      </div>

      <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
          <li><i class="fas fa-map-marker-alt fa-2x"></i>
            <p>Jerusalem, Israel</p>
          </li>

          <li><i class="fas fa-phone mt-4 fa-2x"></i>
            <p>+ 01 234 567 89</p>
          </li>

          <li><i class="fas fa-envelope mt-4 fa-2x"></i>
            <p>contact@example.com</p>
          </li>
        </ul>
      </div>
    </div>
    </div>
<!-- Contact Form Ends -->
    
  </div>



<?php get_footer();?>

