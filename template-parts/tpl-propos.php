<?php //

/**
 * Template Name: a propos 
 */
get_header(); ?>
<div class="news main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                      <img class="img-fluid" src="<?php echo get_field('photo_couverture')['url']; ?>" alt="team meeting">
                    </div>
                </div>
            </div>
          <div class="row">
            <div class="col-lg-12 align-self-center">
                <h1><?php echo get_field('titre'); ?></h1>
                <div>
                    <?php echo get_field('contenu'); ?>
                 </div>
            </div>
              
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="asection un-mot">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-5">
          <div class=" wow" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="<?php echo get_field('image_fondateur')['url']; ?>" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <h2 class="mb-2"><?php echo get_field('titre_fondateur'); ?></h2>
              <span><?php echo get_field('nom_fondateur'); ?></span>
              <span class="mb-5"><?php echo get_field('post_fondateur'); ?></span>
                <p><i class="fa fa-solid fa-quote-left"></i>
                  <?php echo get_field('mot_fondateur'); ?>
                    <i class="fa fa-solid fa-quote-right"></i>
                  </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php get_footer(); ?>


