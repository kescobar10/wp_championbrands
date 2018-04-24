<?php
/*
Template Name: About
*/
get_header(); ?>

<div class="about--page">

            <div class="hero-image clearfix"></div>
            <section class="about">
                <h1><?php the_field('title_part_i'); ?><span class="block"><?php the_field('title_part_ii'); ?></span></h1>
                <?php the_field('about_champion_brands'); ?>
            </section>

            <div class="core-values-container">
            <section class="core-values">
                <h1><?php the_field('core_values_title_part_i'); ?><span class="block"><?php the_field('core_values_title_part_ii'); ?></span></h1>
                <p id="instructions">Click each to learn more:</p>

                <ul>
                    <li>
                        <details>
                            <summary>Serving our customers</summary>
                            <p>We want to be each customer's preferred bevrage distribution partner. Period.</p>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>Supporting our Team</summary>
                            <p>We create a culture of learning, leadership and trust in a team-focused environment. Our employees are what make us so successful, and we recognize this every step of the way.</p>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>Maintaining Quality</summary>
                            <p>Quality is paramount. We pride ourselves on maintaining the finest quality of every beverage we deliver.</p>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>Representing our Brands</summary>
                            <p>We represent each brand to the fullest expectations of the suppliers we partner with. We are extremely proud of our robust portfolio and enjoy sharing these great beverages with our customers every day.</p>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>Constant Innovation</summary>
                            <p>Change is the only constant, so we are quick to adapt and be at the forefront of industry practices.</p>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>Helping our Community</summary>
                            <p>We are proud to give back to the community that has helped to drive our success. As such, we will contribute whenever we can to responsible organizations that make a difference within our community.</p>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>Environmental Impact</summary>
                            <p>We will remain industry leaders when it comes to environmental awareness and action.</p>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>Having Fun</summary>
                            <p>We celebrate the fact that we make a living by selling delicious beverages.</p>
                        </details>
                    </li>
                </ul>
            </section>
        </div>


            <section class="cd-timeline js-cd-timeline">


                <h1><span class="block">Making History with our milestones</span></h1>
               <div class="cd-timeline__container">
                  <?php the_field('timeline'); ?>

               </div>
            </section> <!-- cd-timeline -->


            <section class="environment">
                <h2>Making a difference</h2>
                &nbsp;
                <?php photo_gallery(1); ?>
                <p><?php the_field('environment_text'); ?></p>
                <!-- <p>One of our company core values is “Minimizing the Impact on our Environment” and we walk the talk. Here are just a few of the steps Champion Brands has taken to reduce our footprint.</p>

                <h3>Energy-Efficient LED Warehouse Lighting</h3>
                <p>Champion Brands warehouses utilize fully automated, LED lighting technology, which uses significantly less electric energy and emits less heat.</p>

                <h3>Compressed Natural Gas (CNG) Fleet and Fuel Station</h3>
                <p>Pioneering private CNG fuel usage in the city of Jacksonville, the entire Champion Brands trucking fleet will be converted to this cleaner burning, more fuel-efficient technology by 2020.</p>

                <h3>Solar Power</h3>
                <p>Champion Brands has installed the largest solar panel system in Jacksonville to reduce their carbon footprint. The custom-built solar panel system includes 340 USA made SolarWorld solar modules that are 340 watts each.This system offsets Champion Brands energy usage by 169,081 kilowatt-hours per year or 19 percent of the facilities annual usage. The solar panels increase energy output, allow for real-time monitoring and increase Champion Brands’ power independence. The carbon dioxide offset from the solar panel system is equivalent to 119 metric tons per year, which is equal to the greenhouse gas emissions from 284,785 miles driven by an average passenger vehicle.</p>

                <p>“Reducing our impact on the environment is very important to us and we are always looking for ways to decrease our carbon footprint,” said Earl Benton, president of Champion Brands. “Investing in this system will lower our overall corporate utility cost, which will allow us to better serve our customers and give back to the community.”</p> -->
            </section>

    </div> <!-- end about-page -->

<?php get_footer(); ?>
