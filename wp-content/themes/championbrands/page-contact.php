<?php
/*
Template Name: Contact
*/
get_header(); ?>

<div class="contact--page">

    <div class="container">

    <section> <!-- Intro -->
            <h2><span class="cursive">Talk</span> to us</h2>
            <p>Are you a retailer interested in carrying some of our products – or a current customer interested in new products? Let’s talk!</p>

            <p>We also like to stay in touch with our valued customer and retailers with our monthly newsletter – featuring everything from the latest in the beverage industry to new brands we’re carrying to specials and deals. Sign up to receive yours!</p>

            <div class="contactpage">

              <article class="formsection"> <!-- Info -->

                <form id="contactform" name="contactform" method="post" action="form.php" onsubmit="return validateForm(this)">
                  <div class="formpiece1">
                    <label>Name:</label>
                      <input type="text" name="name" required>
                  </div>
                  <div class="formpiece">
                    <label>Email Address:</label>
                      <input type="text" name="email-address" required>
                  </div>
                  <div class="formpiece">
                    <label>Phone Number:</label>
                      <input type="text" name="email-address">
                  </div>
                  <div class="formpiece">
                    <label>I am a:</label>

                      <div class="radiogroup">
                        <span class="radio">
                          <input type="radio" name="audience" value="distributor" class="radiostyle" required> <p>Distributor</p>
                        </span>

                        <span class="radio">
                          <input type="radio" name="audience" value="retailer" class="radiostyle" required> <p>Retailer</p>
                        </span>

                        <span class="radio">
                          <input type="radio" name="audience" value="other" class="radiostyle" required> <p>Other</p>
                        </span>
                      </div>

                  </div>

                  <div class="formpiece">
                    <label>Message:</label>
                    <span class="textme">
                      <textarea required></textarea>
                      <input type="submit" value="Submit"  class="formpiece2" id="formsubmit">
                    </span>
                  </div>

                </form>

              </article>

              <article class="contactinfo"> <!-- Form -->

                <section>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13794.992526129015!2d-81.570307!3d30.187188!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x19a105dc47d8d8a6!2sChampion+Brands+Inc!5e0!3m2!1sen!2sus!4v1520905999786" frameborder="0" style="border:0" allowfullscreen></iframe>
                </section>

                <section>
                  <h4>Email:</h4> <p>info@championbrands.net</p>
                </section>

                <section>
                  <h3>Florida:</h3>
                  <p>5571 Florida Mining Blvd S.<br>Jacksonville, FL 32257</p><h4>Tel:</h4> <p>(904) 268-1220</p>
                </section>

                <section>
                  <h3>Georgia:</h3>
                  <p>34 Coleman Blvd<br>Pooler, Georgia 31322</p><h4>Tel:</h4> <p>(912) 748-5152</p>
                </section>

                <section>
                  <form>
                   <label>Newsletter</label>
                      <input type="text" name="email-address"  placeholder="Email Address">
                      <input type="submit" value="Submit >>" class="newssub">
                  </form>
                </section>

              </article>

            </div>
          </section>

      </div>

</div> <!-- end contact-page -->

<?php get_footer(); ?>
