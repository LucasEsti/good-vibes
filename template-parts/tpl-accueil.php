<?php //

/**
 * Template Name: Accueil 
 */
get_header(); ?>

<?php if( have_rows('home') ): 
     while( have_rows('home') ): the_row(); ?>
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6><?php echo get_sub_field('titre'); ?></h6>

                <h2><?php echo get_sub_field('description_1'); ?></h2>
                <p><?php echo get_sub_field('description_2'); ?></p>
                
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?php echo get_sub_field('image')["url"]; ?>" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; endif; ?>

<?php if( have_rows('about') ): 
     while( have_rows('about') ): the_row(); ?>
  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="<?php echo get_sub_field('image')["url"]; ?>" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
            <div class="mb-3">
                <h1><?php echo get_sub_field('titre'); ?></h1>
            </div>
          <div class="services">
            <div class="row">
                <?php 
                    foreach(get_sub_field('services') as $element): ?>
                    <div class="col-lg-6">
                        <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                          <div class="icon">
                              <?php echo $element["icone"]; ?>
                              
                          </div>
                          <div class="right-text">
                            <h4><?php echo $element["titre"]; ?> </h4>
                            <p><?php echo $element["description"]; ?> </p>
                          </div>
                        </div>
                    </div>
                <?php endforeach; ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>

<?php if( have_rows('missions') ): 
     while( have_rows('missions') ): the_row(); ?>
  <div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="left-image">
            <img src="<?php echo get_sub_field('image')["url"]; ?>" alt="">
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="section-heading">
            <h2><?php echo get_sub_field('titre'); ?></h2>
            <p><?php echo get_sub_field('description'); ?></p>
            <div class="main-blue-button">
                <a href="<?php echo get_sub_field('page')["url"]; ?>">En savoir plus sur nos objectifs</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>

<?php if( have_rows('portfolio') ): 
     while( have_rows('portfolio') ): the_row(); ?>
  <div id="portfolio" class="our-portfolio section mb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2><?php echo get_sub_field('titre'); ?></h2>
          </div>
        </div>
      </div>
      <div class="row d-flex justify-content-center align-items-center">
          <?php 
                foreach(get_sub_field('formations') as $element): ?>
        <div class="col-lg-3 col-sm-6">
          <a>
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4><?php echo $element["titre"]; ?></h4>
                <p><?php echo $element["description"]; ?></p>
              </div>
              <div class="showed-content">
                <img src="<?php echo $element["image"]["url"]; ?>" alt="">
              </div>
            </div>
          </a>
        </div>
          <?php endforeach; ?>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>  

<?php if( have_rows('clients') ): 
     while( have_rows('clients') ): the_row(); ?>
  <div class="section clients-satistait">
    <div class="container">
      <div class="row mb-2">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2><?php echo get_sub_field('titre'); ?> </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="owl-clients owl-carousel owl-theme">
            <?php 
                foreach(get_sub_field('testimony') as $element): ?>
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <p><i class="fa fa-solid fa-quote-left"></i>
                                <?php echo $element["description"]; ?>
                            <i class="fa fa-solid fa-quote-right"></i></p>
                        </div>
                        <div class="col-12">
                            <span><?php echo $element["nom"]; ?></span><br>
                            <span><?php echo $element["post"]; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>  
<?php get_footer(); ?>


