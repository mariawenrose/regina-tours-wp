<?php
/*
  Template Name: Our Story
*/
get_header();?>

<div class="container">
<h1 class="mt-5 mb-5 text-center">Our Story</h1>

<?php
    $args = array(
        'post_type' => 'large_image',
        'posts_per_page' => 1,

    );
    $largeImage = new WP_Query($args);
  ?>

<?php if( $largeImage->have_posts() ): ?>
      <div class="row">
        <?php while( $largeImage->have_posts() ): $largeImage->the_post(); ?>
            <div id="our-story-header" class="card card-cascade wider reverse">
              <div class="view view-cascade overlay">
                <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full', ['class'=>' card-img-top img-fluid', 'alt' =>'Regina Tours Israel Our Story']); ?>
                <?php endif; ?>
              </div>
              <div class="card-body card-body-cascade text-center mb-5">
                <div class="card-text pt-2 pb-2">
                  <h5><?php the_content();?></h5>
                </div>
              </div>
            </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <?php
      $args = array(
          'post_type' => 'story_text',
          'posts_per_page' => 2,

      );
      $storyContent= new WP_Query($args);
    ?>

<!-- 
    <div class="row">

      <div class="col-12 col-md-6">
        <h3 class="text-center">Our Vision</h3>
        <p>
         Chalk and cheese fondue blue castello. Edam camembert de normandie halloumi camembert de normandie who moved my cheese bavarian bergkase gouda st. agur blue cheese. Caerphilly manchego monterey jack taleggio fondue chalk and cheese cheese on toast pepper jack.
        </p>
      </div>

      <div class="col-12 col-md-6">
        <h3 class="text-center">Our Mission</h3>
        <p>
         Chalk and cheese fondue blue castello. Edam camembert de normandie halloumi camembert de normandie who moved my cheese bavarian bergkase gouda st. agur blue cheese. Caerphilly manchego monterey jack taleggio fondue chalk and cheese cheese on toast pepper jack.
        </p>
      </div>

    </div> -->


</div>

<?php get_footer();?>