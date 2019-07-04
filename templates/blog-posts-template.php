<?php
/*
  Template Name: Blog Posts page
*/
get_header();?>

<div class="container">


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
      <div id="blog-card-left-align" class="card d-flex flex-row mb-3">
        <div class="custom-card-image">
        <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail('medium_large', ['class'=>'blog-post-image', 'alt' =>'thumbnail image for the post']); ?>
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




  

  <?php if ( $singleBlogPost->have_posts() ): ?>
    <div class="section mt-5">
      <?php while ($singleBlogPost ->have_posts() ): $singleBlogPost->the_post(); ?>
      <div id="blog-card-right-align" class="card d-flex flex-row mb-3">

        <div class="blog-post-text">
          <h3 class="card-title mt-2"><?php the_title();?></h3>
          <div class="card-text">
            <?php the_content();?>
          </div>
        </div>

        <div class="custom-card-image">
        <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail('medium_large', ['class'=>'blog-post-image', 'alt' =>'thumbnail image for the post']); ?>
        <?php endif; ?>
        </div>

      </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>

<?php get_footer();?>