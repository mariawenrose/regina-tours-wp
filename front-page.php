<?php get_header();?>



<div class="container-fluid">

<div class="row">
  <div class="col-x 12">
    <div class="header-container text-container style="background-image: url(<?php header_image(); ?>);">
      <div class="header-content"></div>
    </div>
  </div>
</div>


        
  <?php
    $args = array(
        'post_type' => 'services',
        'posts_per_page' => 3,

    );
    $allServices = new WP_Query($args);
  ?>

<!-- <div class="services-heading row">
  <h2 class="text-center">Services</h2>
</div> -->


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
          'post_type' => 'blogPost',
          'posts_per_page' => 3,
        );
        $singleBlogPost = new WP_Query($args);
      ?>

      <?php if ( $singleBlogPost->have_posts() ): ?>
        <div class="section mt-5">
          <?php while ($singleBlogPost ->have_posts() ): $singleBlogPost->the_post(); ?>
          <div id="blog-card" class="card d-flex flex-row mb-3">
            <div class="custom-card-image">
            <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail('medium_large', ['class'=>'blog-post-image', 'alt' =>'Regina Tours Israel blog post feature image']); ?>
            <?php endif; ?>
            </div>
            <div class="blog-post-text">
              <h3 class="card-title mt-2"><?php the_title();?></h3>
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
    <div class="section">
      <!-- Section: Contact v.3 -->
      <section class="contact-section my-5">

      <!-- Form with header -->
      <div class="card">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-8">

            <div class="card-body form">

              <!-- Header -->
              <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="form-contact-name" class="form-control">
                    <label for="form-contact-name" class="">Your name</label>
                  </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="form-contact-email" class="form-control">
                    <label for="form-contact-email" class="">Your email</label>
                  </div>
                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="form-contact-phone" class="form-control">
                    <label for="form-contact-phone" class="">Your phone</label>
                  </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="form-contact-company" class="form-control">
                    <label for="form-contact-company" class="">Your company</label>
                  </div>
                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <textarea id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                    <label for="form-contact-message">Your message</label>
                    <a class="btn-floating btn-lg blue">
                      <i class="far fa-paper-plane"></i>
                    </a>
                  </div>
                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

            </div>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4">

            <div class="card-body contact text-center h-100 white-text">

              <h3 class="my-4 pb-2">Contact information</h3>
              <ul class="text-lg-left list-unstyled ml-4">
                <li>
                  <p><i class="fas fa-map-marker-alt pr-2"></i>New York, 94126, USA</p>
                </li>
                <li>
                  <p><i class="fas fa-phone pr-2"></i>+ 01 234 567 89</p>
                </li>
                <li>
                  <p><i class="fas fa-envelope pr-2"></i>contact@example.com</p>
                </li>
              </ul>
              <hr class="hr-light my-4">
              <ul class="list-inline text-center list-unstyled">
                <li class="list-inline-item">
                  <a class="p-2 fa-lg tw-ic">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="p-2 fa-lg li-ic">
                    <i class="fab fa-linkedin-in"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="p-2 fa-lg ins-ic">
                    <i class="fab fa-instagram"> </i>
                  </a>
                </li>
              </ul>

            </div>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Form with header -->

      </section>
      <!-- Section: Contact v.3 -->
    </div>
    
  </div>
</div>

<?php get_footer();?>