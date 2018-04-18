<?php get_header(); ?>

<div class="blog--page">

    <h2>News <span class="block">and Updates</span></h2>
    <div class="blog-grid">

<!-- main post-->
          <div class="left-side">
              <div class="main-post">
                  <a href="post.html">
                      <div class="main-post-thumb-container">
                          <img class="main-post-image" src="<?php bloginfo('template_url'); ?>/assets/img/main-post.jpg" alt="Main Post" />
                          <h4 class="main-post-category cat-over-img">Champion News</h4>
                          <h3 class="main-post-title title-over-image">A day in the life of a Champion beverage</h3>
                      </div>
                      <h5 class="date">Feb. 28, 2018</h5>
                      <p class="main-post-excerpt">At Champion Brands, our truck drivers transport our beverages on a daily basis, and their role is more than merely “throwing cases.” In a given day, they are...</p>
                      <input type="button" class="main-read-more-blog" value="Read More">
                  </a>
              </div>

              <!-- older posts -->
              <div class ="older-posts-container">
                  <div class="older-post">
                      <a href="post.html">
                          <div class="older-thumb-container">
                              <img class="older-post-image" src="<?php bloginfo('template_url'); ?>/assets/img/post-thumb1.jpg" alt="Thumbnail" />
                              <h4 class="older-post-category">Recipes and Mixes</h4>
                          </div>
                          <h5 class="date">Feb. 28, 2018</h5>
                          <h3 class="older-post-title">Red Bull recipes to try this weekend</h3>
                          <p class="older-post-excerpt">Spring is around the corner, and with the weather heating up, the Champion Brands team wants to share with you three drink recipes using Red Bull, this month's featured...</p>
                      </a>
                  </div>

                  <!-- older posts -->
                  <div class="older-post">
                      <a href="post.html">
                          <div class="older-thumb-container">
                              <img class="older-post-image" src="<?php bloginfo('template_url'); ?>/assets/img/post-thumb2.jpg" alt="Thumbnail" />
                              <h4 class="older-post-category">Sustainability</h4>
                          </div>
                          <h5 class="date">Feb. 28, 2018</h5>
                          <h3 class="older-post-title">Solar energy: This is why we're in</h3>
                          <p class="older-post-excerpt">We strive to become industry leaders when it comes to environmental awareness and action. As such, we will contribute whenever we can to sustainable...</p>
                      </a>
                  </div>


              </div>

              <!-- pagination -->
              <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
              </div>
            </div>



              <!-- sidebar -->
              <sidebar>
                  <section class="sidebar" id="archives">
                          <h3 class="sidebar-title">Archives</h3>
                      <ul>
                          <li><a class="" href="">February 2018</a></li>
                          <li><a class="" href="">January 2018</a></li>
                          <li><a class="" href="">December 2017</a></li>
                          <li><a class="" href="">November 2017</a></li>
                          <li><a class="" href="">More...</a></li>
                      </ul>
                  </section>


              <section class="sidebar" id="categories">
                  <h3 class="sidebar-title">Categories</h3>
                  <ul>
                      <li><a class="" href="">Champion News</a></li>
                      <li><a class="" href="">Our Brands</a></li>
                      <li><a class="" href="">Recipes and More</a></li>
                      <li><a class="" href="">Events</a></li>
                      <li><a class="" href="">Sustainability</a></li>
                      <li><a class="" href="">News Releases</a></li>
                  </ul>
              </section>

              <section class="sidebar" id="search">
                  <h3 class="sidebar-title">Search</h3>
                      <!--<input class="search-sidebar" value="search"/>
                      <a href="#" class="search-button"> </a>-->
                  <form>
                    <input type="text" name="search" placeholder="Search" class="search-sidebar">
                    <input type="button" value="Search">
                  </form>

              </section>

              <section class="sidebar featured-box" id="featured">
                  <div class="sidebar-title-container">
                      <h2 class="sidebar-title">Featured <span class="block">Brand</span></h2>
                  </div>
                  <div class="featured-brand">
                      <h3>Coppertail Brewing Co.</h3>
                      <h4>Tampa Bay</h4>
                      <p>Coppertail Brewing Co is an independently owned production brewery and tasting room in the Ybor neighborhood of Tampa, Florida. It was founded on the desire to bring more quality, Florida-brewed beer to the thirsty masses. Florida Inspired. Tampa Brewed.</p>
                      <button class="more">More</button>
                  </div>
              </section>


          </sidebar>

      </div>

      </div>

<?php get_footer(); ?>
