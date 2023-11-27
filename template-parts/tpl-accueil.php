<?php //

/**
 * Template Name: Accueil 
 */
get_header(); ?>
<?php if( have_rows('carrousel') ): 
     while( have_rows('carrousel') ): the_row(); ?>
    <div id="principal" class="w-100 mb-5">
        <div class="owl-accueil owl-carousel owl-theme">
            <?php 
                foreach(get_sub_field('contenu') as $element): ?>
            <div class="item">
                <img alt="" class="img-fluid" src="<?php echo $element["url"]; ?>">
            </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php endwhile; endif; ?>

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Bienvenue dans le monde de GOOD VIBES ACADEMY</h6>

                <h2>Le <em>bien etre</em> au cœur du developpement. <span>Eveillez</span> votre potentiel, transformer votre vie.</h2>
                <p> Transformez votre vie avec GOOD VIBES ACADEMY. Rejoignez-nous pour un voyage vers la meilleure version de vous-même.</p>
                
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?php bloginfo("stylesheet_directory");  ?>/content/team-bureau.png" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="<?php bloginfo("stylesheet_directory");  ?>/assets/images/about-left-image.png" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                      <i class="fa-regular fa-handshake"></i>
                  </div>
                  <div class="right-text">
                    <h4> Entraide</h4>
                    <p>La passion d’aider l’autre à évoluer personnellement et professionnellement </p>
                  </div>
                </div>
              </div>
                <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <i class="fa-solid fa-gear"></i>
                  </div>
                  <div class="right-text">
                    <h4>Pragmatisme</h4>
                    <p>cherchant quelque chose d’utilisable dans la vie au quotidienne</p>
                  </div>
                </div>
              </div>
                <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                  </div>
                  <div class="right-text">
                    <h4> Apprentissage</h4>
                    <p>Le cote ludique dans l’apprentissage</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                        <i class="fa-solid fa-user-tie"></i>
                  </div>
                  <div class="right-text">
                    <h4> Expertise professionnelle</h4>
                    <p>Élevez vos compétences avec une expertise professionnelle façonnée par l'expérience.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon">
                        <i class="fa-solid fa-pen-fancy"></i>
                  </div>
                  <div class="right-text">
                    <h4> Approche personnalisée</h4>
                    <p>Parce que chaque parcours est unique</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                  <div class="icon">
                        <i class="fa-solid fa-square-poll-vertical"></i>
                  </div>
                  <div class="right-text">
                    <h4> Résultat concret</h4>
                    <p>transformons vos aspirations en résultats tangibles</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="left-image">
            <img src="<?php bloginfo("stylesheet_directory");  ?>/content/how.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="section-heading">
            <h2><em>GOOD VIBES ACADEMY</em> est dediée à guider <span>individus et entreprise</span> vers l’ epanouissement personnel et professionnel. </h2>
            <p>Fort d'une equipe d'experts en developpement personnel, nous offrons des programmes de formation et de coaching sur mesure..</p>
            <div class="main-blue-button">
                <a href="apropos">En savoir plus sur nos objectifs</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="portfolio" class="our-portfolio section mb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>Découvrez ce que notre agence <em>propose</em> &amp; ce que nous <span>offrons</span></h2>
          </div>
        </div>
      </div>
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-3 col-sm-6">
          <a>
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4>FORMATIONS IMPACTANTES</h4>
                <p>Des ateliers pour stimuler la croissance personnelle et professionnelle</p>
              </div>
              <div class="showed-content">
                <img src="<?php bloginfo("stylesheet_directory");  ?>/assets/freepick/people/people.webp" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a>
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="hidden-content">
                <h4>COACHING PERSONALISE</h4>
                <p>Accompagnement individuel pour définir et atteindre vos objectifs</p>
              </div>
              <div class="showed-content">
                <img src="<?php bloginfo("stylesheet_directory");  ?>/assets/freepick/internship/internship.webp" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a>
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
              <div class="hidden-content">
                <h4>DEVELOPPEMENT D’EQUIPE</h4>
                <p>Renforcer la cohésion et les performances de votre équipe avec nos programmes spécialisés </p>
              </div>
              <div class="showed-content">
                <img src="<?php bloginfo("stylesheet_directory");  ?>/assets/freepick/team/team.webp" alt="">
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="section clients-satistait">
    <div class="container">
      <div class="row mb-2">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>Clients <em>satisfaits</em> </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="owl-clients owl-carousel owl-theme">
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <p><i class="fa fa-solid fa-quote-left"></i>
                                Lorem ipsum dolor sit amet, consectetur and sed doer ket eismod tempor incididunt ut labore et dolore magna...
                            <i class="fa fa-solid fa-quote-right"></i></p>
                        </div>
                        <div class="col-12">
                            <span>Lucas RAZAFINDRAMBOA</span><br>
                            <span>webmaster</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
              <div class="container">
                  <div class="row">
                      <div class="col-12 mb-2">
                          <p><i class="fa fa-solid fa-quote-left"></i>
                              Lorem ipsum 2 dolor sit amet, consectetur and sed doer ket eismod tempor incididunt ut labore et dolore magna...
                          <i class="fa fa-solid fa-quote-right"></i></p>
                      </div>
                      <div class="col-12">
                          <span>Eric RANDRIANTSALAM</span><br>
                          <span>graphic designer</span>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
                <?php echo $the_last->post_content; ?>
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
                  <?php echo $post->post_content; ?>
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


<?php get_footer(); ?>


