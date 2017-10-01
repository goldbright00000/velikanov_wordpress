<?php /* Template Name: Event */

get_header();?>
    <div class="page-title events-title text-center">
            <h2 class="text-extra-bold white text-uppercase text-center">Events</h2>
                <div class="page-location text-center display-ib">
                    <span class="ubuntu fz-14 red-c9">Home   <i class="gray-e9">/</i>   Events</span>
                </div>
        </div>


         <section class="featured-events ptb-150 gray-f9f9-bg">
        <div class="container">
          <div class="row">
              <div class="col-md-12 text-center">
                  <h3 class="black h-sep">Featured <span class="text-ultra-bold">Events</span> </h3>
                  <img  class="mt-40" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/red_line.png">
                  <p class="fz-16 gray-666 mt-50">Addressing disparities in Health, Resources, Education, <br />
and Economic Development within Minnesota's communities of color.</p>
              </div>
          </div>
          <div class="row">
            <div class="col-md-7 mt-70">
              <div class="upcoming-event">
                <span id="datum" hidden="yes"><?php the_field('event_date');?></span>
                <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/up-event.jpg" alt="">
                <div class="upcoming-count-down text-center">
                  <h5 class="ubuntu white text-medium text-uppercase"><?php the_field('event_head_date_title');?></h5>
                  <h4 class="white text-extra-bold text-uppercase mt-40">Starting At  <span class="green-5c"><?php the_field('event_head_date');?></span></h4>

                  <div id="upcoming" class=""></div>
                  <br />
                  <h6 class="ubuntu gray-f9f9 mt-60"> Place to be determined </h6>

                </div>
              </div>
            </div>
            <div class="col-md-5 mt-70">
              <div class="upcoming-event-s">
                <img class="img-responsive" src="<?php the_field('thumb_img1');?>" alt="">
                <div class="upcoming-count-down-s">
                  <div class="up-count-down-s-content">
                    <h5 class="fz-15 white text-semi-bold gray-f9f9"><?php the_field('thumb_title1');?></h5>
                    <h6 class="ubuntu fz-14 gray-f9f9 mt-10">Date: <span class="green-5c"><?php the_field('thumb_date1');?></span>   <span class="sep-space">|</span>   Venue: <span class="green-5c"><?php the_field('thumb_location1');?></span></h6>
                  </div>
                </div>
              </div>

               <div class="upcoming-event-s mt-017">
                <img class="img-responsive" src="<?php the_field('thumb_img2');?>" alt="">
                <div class="upcoming-count-down-s">
                  <div class="up-count-down-s-content">
                    <h5 class="fz-15 white text-semi-bold gray-f9f9"><?php the_field('thumb_title2');?></h5>
                    <h6 class="ubuntu fz-14 gray-f9f9 mt-10">Date: <span class="green-5c"><?php the_field('thumb_date2');?></span>   <span class="sep-space">|</span>   Venue: <span class="green-5c"><?php the_field('thumb_location2');?></span></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="rec_ev" class="mt-150 mb-150">
        <div class="container">
          <div class="row">
              <div class="col-md-12 text-center">
                  <h3 class=" black h-sep">Recent <span class="text-ultra-bold">Events</span> </h3>
                   <img  class="mt-40" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/red_line.png">
                  <p class="fz-16 gray-666 mt-50">ACER is creating access, equity, and opportunity for underrepresented groups <br />
in the Twin Cities’ northwest suburbs</p>
              </div>
          </div>



<?php echo EM_Events::output(array('order' => 'DESC', 'limit' => 12)); ?>




        </div>
      </section>




      <?php get_footer();?>