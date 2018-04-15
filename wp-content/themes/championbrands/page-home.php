<?php
/*
Template Name: Home
*/
get_header('home'); ?>

<!-- CAROUSEL -->
          <div class="carousel-wrapper">
              <?php
 echo do_shortcode('[smartslider3 slider=2]');
 ?>
          </div>


        <!--<div class="grid">-->
          <!-- BLUE CARDS -->
          <section class= "blue-cards">

            <h2 class="visually-hidden">Spotlights</h2>

            <section class="card-team">
                <h3>Join our Team</h3>
                    <p>Excellence. Support. Development. Family. Does the Champion Brands team sound like your team? There's room for you here.<a href="careers.html"> Apply today&nbsp;&rsaquo;           </a></p>

            </section>

            <section class="card-brewers">
                <h3>For Brewers</h3>
                    <p>Learn more about how a partnership with Championship Brands can benefit you. <a href="contact.html">
                      Let us distribute your product&nbsp;&rsaquo;
                    </a></p>

            </section>

            <section class="card-retail">
                <h3>For Retailers</h3>
                    <p>We have the freshest products ready for your customers. <a href="product.html">
                      See all we have to offer&nbsp;&rsaquo;
                    </a></p>

            </section>

          </section><!-- blue cards-->

          <!-- BRAND CAROUSEL -->
          <section class="brand">
            <h2>Our <span class="block">Brands</span></h2>

            <?php echo do_shortcode('[metaslider id="44"]'); ?>


          </section><!-- brand carousel-->
        <!--</div> end .grid -->

        </main>


<?php get_footer(); ?>
