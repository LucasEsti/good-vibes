<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>
<div id="blog" class="our-blog section tendance">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Découvrez les <em>tendances</em> dans nos dernières <span>actualités</span></h2>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="top-dec">
            <img src="<?php bloginfo("stylesheet_directory");  ?>/assets/images/blog-dec.png" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <?php 
        $args = array(
            'numberposts' => 4
          );

          $latest_posts = get_posts( $args );
          $the_last = $latest_posts[0];
        ?>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="left-image">
            <a href="<?php echo get_permalink($the_last->ID); ?>">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($the_last->ID) ); ?>" alt="Workspace Desktop">
            </a>
            <div class="info">
              <div class="inner-content">
                <ul>
                  <li><i class="fa fa-calendar"></i>  <?php
                        $date=date_create($the_last->post_date);
                        echo date_format($date,"d M Y");
                        ?> </li>
                  <?php $author_id = $the_last->post_author; ?>
                  <li><i class="fa fa-users"></i> <?php the_author_meta( 'first_name' , $author_id ); ?></li>
                </ul>
                <a href="<?php echo get_permalink($the_last->ID); ?>"><h4><?php echo $the_last->post_title; ?></h4></a>
                <p><?php the_field('extrait_description', $the_last->ID); ?></p>
                <div class="main-blue-button">
                  <a href="<?php echo get_permalink($the_last->ID); ?>">En savoir plus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
          
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="right-list">
            <ul>
                <?php for ($i = 1; $i < count($latest_posts);$i++): 
                    $post = $latest_posts[$i];
                    ?>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> <?php
                        $date=date_create($post->post_date);
                        echo date_format($date,"d M Y");
                        ?></span>
                  <a href="<?php echo get_permalink($post->ID); ?>"><h4><?php echo $post->post_title; ?></h4></a>
                  <p><?php the_field('extrait_description', $post->ID); ?></p>
                </div>
                <div class="right-image">
                  <a href="<?php echo get_permalink($post->ID); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt=""></a>
                </div>
              </li>
              <?php endfor; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

<div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>N'hésitez pas à nous envoyer un message concernant les besoins de votre entreprise</h2>
            <div class="phone-info">
              <h4>Pour toute demande, appelez-nous : <span><i class="fa fa-phone"></i> <a href="tel:261388532304">+261 38 85 323 04</a></span></h4>
            </div>
            <div class="phone-info">
                <p class="text-center">OU</p><br>
                <p>
                        <i class="fa fa-solid fa-envelope"></i> 
                        <a href="mailto:lalainaradorobivelo@good-vibes-academy.com">lalainaradorobivelo@good-vibes-academy.com</a>
                    / <a href="mailto:informations@good-vibes-academy.com">informations@good-vibes-academy.com</a>
                </p><br>
                <span>
                    <i class="fa fa-solid fa-location-dot"></i> Villa Horphi 327 FM Bis Morondava Ambohibao
                </span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="assets/images/contact-decoration.png" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
        </div>
      </div>
    </div>
  </footer>

    <script src="<?php bloginfo("stylesheet_directory");  ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php bloginfo("stylesheet_directory");  ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/js/owl-carousel.js"></script>
  <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/js/animation.js"></script>
  <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/js/imagesloaded.js"></script>
  <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/js/templatemo-custom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function() {
                $('.owl-clients').owlCarousel({
                loop:true,
                margin:0,
                nav:false,
                dots:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
            });
        </script>

</body>
</html>
