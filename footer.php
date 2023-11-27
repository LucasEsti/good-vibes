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
