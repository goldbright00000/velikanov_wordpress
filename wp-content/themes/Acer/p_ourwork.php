<?php /* Template Name: Our Work */

get_header();?>
   <div class="page-title causes-title text-center">
            <h2 class="text-extra-bold white text-uppercase text-center">OUR WORK</h2>
                <div class="page-location text-center display-ib">
                    <span class="ubuntu fz-14 red-c9">Home   <i class="gray-e9">/</i>   Our Work</span>
                </div>
        </div>


            <section id="ourvision" class="recent-causes">
                <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1 class="fz-60 open-sans text-uppercase black h-sep"><?php the_field('our_vision_title');?> </h1>
                                 <img class="mt-40" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/red_line.png">
                                <p class="fz-26 gray-8b8 mt-50 lh-40"><?php the_field('our_vision_content');?></p>
                                <hr class="gray-8b8 mt-50" />
                            </div>
                        </div>
                    <div class="row mt-20">





                    </div>
                </div>
        </section>

        <section id="transit" class="transit-work">

                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                          <img class="img-responsive" src="<?php the_field('making_transit_image');?>">
                         </div>

                         <div class="col-md-4 ">
                            <h3 class="red-c9 text-semi-bold fz-30"><?php the_field('making_transit_title');?></h3>
                            <img class="mt-20 shadow-low" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/red_line.png">
                            <p  class="mt-25 fz-16 gray-8b8"><?php the_field('making_transit_content_p1');?></p>
                            <p  class="mt-25 fz-16 gray-8b8"><?php the_field('making_transit_content_p2');?></p>
                            <p  class="mt-25 fz-16 gray-8b8"><?php the_field('making_transit_content_p3');?></p>
                        </div>
                    </div>
                </div>


        </section>

        <section id="fair" class="acer-fair">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <h3 class="red-c9 text-semi-bold fz-30"><?php the_field('acer_fair_title');?></h3>
                            <p class="mt-50 lh-22 fz-16 open-sans gray-8b8">
                               <?php the_field('acer_fair_content');?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive shadow-fair" src="<?php the_field('acer_fair_image');?>">
                        </div>
                    </div>
                </div>
            </div>

        </section>

      <section id="health" class="health-equity">

                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                          <img class="img-responsive" src="<?php the_field('health_equity_image');?>">
                         </div>

                         <div class="col-md-4 ">
                            <h3 class="red-c9 text-semi-bold fz-30"><?php the_field('health_equity_title');?></h3>

                           <p class="mt-25 fz-16 open-sans gray-8b8"><?php the_field('health_equity_content_p1');?></p>
                           <p class="mt-25 fz-16 open-sans gray-8b8"><?php the_field('health_equity_content_p2');?></p>
                           <p class="mt-25 fz-16 open-sans gray-8b8"><?php the_field('health_equity_content_p3');?></p>
                        </div>
                    </div>
                </div>


        </section>

        <section id="housing" class="housing-equity">
            <div class="row">
                <div class="col-md-12 text-center">


                    <h1 >Housing Equity and <br /><span class="red-c9 text-ultra-bold"><?php the_field('housing_equity_title');?></span></h1>

                    <img class="img-responsive mt-40 center mb-90 shadow-blue" src="<?php the_field('housing_equity_image');?>">
                    <div class="center-pad">
                   <p class="mt-25 text-semi-bold fz-18 open-sans gray-8b8"><?php the_field('housing_equity_content_p1');?></p>
                   <p class="mt-25 text-semi-bold fz-18 open-sans gray-8b8"><?php the_field('housing_equity_content_p2');?></p>
                   <p class="mt-25 text-semi-bold fz-18 open-sans gray-8b8"><?php the_field('housing_equity_content_p3');?></p>
                    </div>
                </div>
            </div>
        </section>




      <?php get_footer();?>