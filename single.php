<?php

get_header();
?>
    
<div class="news main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                      <img class="img-fluid" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="team meeting">
                    </div>
                </div>
            </div>
          <div class="row">
            <div class="col-lg-2 align-self-center">
                <div class="left-image left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="info">
                        <div class="inner-content">
                          <ul>
                              <?php $author_id = $post->post_author; ?>
                              <li class="mb-2"><i class="fa fa-calendar"></i> <?php
                                    $date=date_create($post->post_date);
                                    echo date_format($date,"d M Y");
                                    ?></li>
                            <li><i class="fa fa-users"></i> <?php the_author_meta( 'first_name' , $author_id ); ?></li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 align-self-center">
                <h1><?php the_title(); ?></h1>
                <div>
                    <?php the_content(); ?>
                 </div>
            </div>
              
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
