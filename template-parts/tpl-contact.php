<?php //

/**
 * Template Name: contact 
 */
get_header(); ?>
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

<div>
    <div class="container">
    <?php echo do_shortcode('[contact-form-7 id="6d5de80" title="Formulaire de contact 1"]'); ?>   
</div>
</div>


<?php get_footer(); ?>


