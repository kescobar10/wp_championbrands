<?php
/*
Template Name: Home
*/
get_header('home'); ?>

    <!-- CAROUSEL -->
    <div class="carousel-wrapper">
        <?php
        echo do_shortcode('[smartslider3 slider=2]'); ?>
    </div>


    <!--<div class="grid">-->
    <!-- BLUE CARDS -->
    <section class= "blue-cards">
        <h2 class="visually-hidden">Spotlights</h2>
            <section class="card--team" style="background-image: url(<?php the_field('image_card_1'); ?>);">
                <h3><?php the_field('title_card_1'); ?></h3>
                <p><?php the_field('text_card_1'); ?> <a><?php the_field('link_card_1'); ?></a></p>
            </section>

            <section class="card--brewers" style="background-image: url(<?php the_field('image_card_2'); ?>);">
                <h3><?php the_field('title_card_2'); ?></h3>
                <p><?php the_field('text_card_2'); ?> <a><?php the_field('link_card_2'); ?></a></p>
            </section>

            <section class="card--retail" style="background-image: url(<?php the_field('image_card_3'); ?>);">
                <h3><?php the_field('title_card_3'); ?></h3>
                <p><?php the_field('text_card_3'); ?> <a><?php the_field('link_card_2'); ?></a></p>
            </section>

    </section><!-- blue cards-->

    <!-- BRAND CAROUSEL -->
    <section class="brand">
        <h2>Our <span class="block">Brands</span></h2>
        <?php echo do_shortcode('[metaslider id="30"]'); ?>
    </section><!-- brand carousel-->
<!--</div> end .grid -->

<?php get_footer(); ?>
