<?php
/*
Template Name: Community
*/
get_header(); ?>

<div class="community--page">

    <section>
              <div class="hero-image clearfix" alt="Community Header"></div>
                <p class="cr">Photo by <a href="https://unsplash.com/photos/UErWoQEoMrc?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Wil Stewart</a> on <a href="https://unsplash.com/search/photos/beer?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></p>
            </section>

            <main class="container">
              <section class="community">
                <h2><span class="cursive"><?php the_field('community_title_i'); ?></span> <?php the_field('community_title_ii'); ?></h2>
                <p><?php the_field('community_text'); ?></p>

                <article>
                  <h3 class="visually-hidden">Partner Logos</h3>

                  <div class="partnerlogos">
                    <?php echo do_shortcode('[metaslider id="128"]'); ?>
                  </div>

                </article>

                <div class="button">
                    <a href="<?php the_field('request_donation'); ?>"><input type="button" class="btn" value = "Request Donation"></a>
                </div>
              </section>
              <hr />

              <section class="events"> <!-- events -->
                <h2><span class="cursive">Our</span> Events</h2>

                <!-- EVENT 1 -->
                <div class="eventgroup">
                  <article class="eventcard">
                    <div>
                      <figure class="eventimg" >
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/brewfest.jpg" alt="Jax Brewfest" />
                        <figcaption class="cr">Photo by <a href="https://unsplash.com/photos/KWooSfRaYGw?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Brandon Morgan</a> on <a href="https://unsplash.com/search/photos/beer?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></figcaption>
                      </figure>
                      <h3 class="eventtitle">JAX BREWFEST</h3>
                    </div>

                    <div class="eventfoot">
                      <span>8:00 PM</span>
                      <span>3/15/2018</span>
                    </div>
                  </article>

                    <!-- EVENT 2 -->

                  <article class="eventcard">
                    <div>
                      <figure class="eventimg" >
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/trivianight.jpg"  alt="Trivia Night"/>
                        <figcaption class="cr">Photo by <a href="https://unsplash.com/@priscilladupreez">Priscilla Du Preez</a> on <a href="https://unsplash.com/search/photos/beer?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></figcaption>
                      </figure>
                      <h3 class="eventtitle">TRIVIA NIGHT</h3>
                    </div>

                    <!-- EVENT 3 -->

                    <div class="eventfoot">
                      <span>7:00 PM</span>
                      <span>3/19/2018</span>
                    </div>
                  </article>

                  <article class="eventcard">
                    <div>
                      <figure class="eventimg" >
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/clientappreciation.jpg" alt="Client Appreciation"/>
                        <figcaption class="cr">Photo by <a href="https://unsplash.com/@outdoor_junkiez">Drew Farwell</a> on <a href="https://unsplash.com/search/photos/beer?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></figcaption>
                      </figure>
                      <h3 class="eventtitle">CLIENT APPRECIATION</h3>
                    </div>

                    <div class="eventfoot">
                      <span>8:00 PM</span>
                      <span>3/31/2018</span>
                    </div>
                  </article>
                </div>

              </section>

</div><!-- end community-page -->
<?php get_footer(); ?>
