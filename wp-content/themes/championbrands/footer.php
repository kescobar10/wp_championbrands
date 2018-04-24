<!-- FOOTER -->
</main>
        <footer class="footer">
          <h2 class="visually-hidden">Footer</h2>

          <!-- contact -->
          <section class="contact">
            <h3>Contact</h3>
            <section class="fla">
              <h4><span class="upper">Champion Brands</span> - Florida</h4>
              <p>5571 Florida Mining Blvd. S.
              <br>
              Jacksonville, Florida 32257
              <br>
              Call: <span class="phone">904.268.1220</span></p>
            </section>

            <section class="ga">
              <h4><span class="upper">Champion Brands</span> - Georgia</h4>
              <p>34 Coleman Blvd.
              <br>
              Pooler, Georgia 31322
              <br>
              Call: <span class="phone">912.748.5152</span></p>
            </section>

            <section class="email">
              <p>Email all inquiries to
              <a href="mailto:info@championbrands.net">info@championbrands.net</a></p>
            </section>

          </section><!-- contact -->

          <section class="sub">
            <h3>Subscribe</h3>
            <p>Sign up for news about our beverages, recipes, events and Champion Brands updates directly in your inbox.</p>
            <form>
                <input type="text" name="email-address" placeholder="Email">
                <input type="submit" value="Submit">
            </form>
          </section>

          <section class="portal">
            <h3>Portals</h3>

            <a href="https://championbrands.elliportal.com/" class="footer-button" name="retailer-button">
              Retailer
            </a>

            <a href="https://apps.vtinfo.com/retailer-portal/login" class="footer-button" name="employee-button">
              Employee
            </a>
          </section>

          <!-- COPYRIGHT -->
          <section class="info">
            <section class="info-text">
                <p><a href="https://www.championbrands.net/privacy-policy/">Privacy Policy</a><span class="hide-mobile">  |
                </span><a href="https://www.championbrands.net/terms-conditions/">Terms &amp; Conditions</a></p>
                <p>&copy;<?= date('Y'); ?> Champion Brands, Inc.</p>
            </section>

            <!-- SOCIAL MEDIA -->
            <section class="social-media-footer-hp">
              <figure class="social">
                <a href="https://www.facebook.com/pages/Champion-Brands-Inc/152755478079234">
                  <img class="socialicon" src="<?php bloginfo('template_url'); ?>/assets/img/facebook.png" alt="facebook" />
                </a>
              </figure>

              <figure class="social">
                <a href="https://instagram.com/championbrands/">
                  <img class="socialicon" src="<?php bloginfo('template_url'); ?>/assets/img/instagram.png" alt="instagram" />
                </a>
              </figure>

              <figure class="social">
                <a href="https://twitter.com/championbrands">
                  <img class="socialicon" src="<?php bloginfo('template_url'); ?>/assets/img/twitter.png" alt="twitter" />
                </a>
              </figure>

              <figure class="social">
                <a href="https://www.linkedin.com/company/champion-brands-inc?trk=top_nav_home">
                  <img class="socialicon" src="<?php bloginfo('template_url'); ?>/assets/img/linkedin.png" alt="linkedin" />
                </a>
              </figure>
            </section>
    <!-- END SOCIAL MEDIA -->

          </section>
    <!-- END COPYRIGHT -->

        </footer>

      </div>
      <!-- end "container home-page" -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

		<?php wp_footer(); ?>

		<!-- TODO: ADD GOOGLE ANALYTICS -->

	</body>
</html>
