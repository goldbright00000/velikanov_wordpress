<?php
/**
 * Template Name: Front Page
 */

get_header();?>

        <div class="container-fluid no-padding">
            <div class="main-slider">
                <div class="item">
                    <div class="main-slider-img position-r">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/back_image1.jpg" alt="">

                        <div class="main-slider-content">
                            <h2 class="lora fz-20 white text-bold text-italic" >ACCESS. EQUITY. OPPORTUNITY</h2>
                            <h3 class="white text-uppercase mt-25 position-r">Organizing the African <br />
                                Community to plan for and <br />
                                build successful communities. </h3>
                            <h4 class="roboto fz-18 white text-bold text-italic mt-30">Engaging, Educating for Empowerment </h4>
                            <div class="mt-30">
                                <a class="roboto fz-14 text-bold" href="<?php echo site_url(); ?>/ourwork">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <section id="who-we-are">
            <div class="container">
                <div  class="row">
                    <div class="col-xs-12 col-md-6 col-sm-6 overcoming">
                         <h4 class="d-black lh-33 h-sep"><?php the_field('who_we_are_title');?></h4>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/red_line.png">
                        <p class="lh-28 mt-50 fz-15"><?php the_field("who_we_are_content");?></p>

                        <div class="btns_red mt-30">
                                <a class="roboto fz-14 text-bold " href="<?php echo site_url(); ?>/ourwork">Read More</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-sm-6">
                        <div class="count-down">
                            <div class="count-header clearfix">
                                <div class="pull-left">
                                    <h4 class="green-6f text-uppercase mb-15 text-semi-bold">Up Comming Events</h4>






                                    <span class="karla gray-777 fz-14"><i class="fa fa-clock-o"></i><?php the_field('event_time');?> </span></span> <span id="datum" hidden="yes"><?php the_field('event_date');?></span>
                                </div>
                                <img class="pull-right mt-10" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/calendar.png" alt="">
                            </div>

                            <div id="clock"></div>
                            <div class="btns ">
                                <a class="mt-50 text-uppercase martel fz-14 btn-prime tri-b" href="<?php echo site_url(); ?>/event">See all our events</a>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="recent-causes gray-f9f9-bg">
            <div class="container">
                <div class="row">
                    <div id="about" class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <h3 class="open_sans text-uppercase text-ultra-bold h-sep"><?php the_field('our_mission_title');?> </h3>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/red_line.png">
                       <p class="fz-16 gray-666 mt-50"><?php the_field('our_mission_content');?></p>

                    </div>

                </div>
                <div class="row mt-70">

                    <div class="col-xs-12 col-md-3 col-sm-3">
                        <div class="img_with_text">
                            <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/community_engagement.jpg">
                            <h5 class="mt-25 fz-14 text-ultra-bold text-center">Community Engagement</h5>
                            <p class="fz-11 mt-15 text-center equal">An important fabric of ACER is our community
                            volunteers who give their time, talents, energy
                            and creativity to worthwhile causes to help
                            improve the lives of people in the Twin Cities. </p>

                           <div class="text-center  mt-5"><a class="roboto " href="#contact">Engage</a></div>
                        </div>

                    </div>

                    <div class="col-xs-12 col-md-3 col-sm-3">
                        <div class="img_with_text">
                            <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/leadership_development.jpg">
                                <h5 class="mt-25 fz-14 text-ultra-bold text-center">Leadership Development</h5>
                                <p class="fz-11 mt-15 text-center equal">Through our work, ACER works to develop leaders
                                 in our community to continue to not only advocate
                                for themselves, but to also take leadership positions
                                in advancing equity in the region.  </p>
                            <div class="text-center  mt-5"><a class="roboto " href="#contact">Engage</a></div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-sm-3">
                            <div class="img_with_text">
                                <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/economic_development.jpg">
                                    <h5 class="mt-25 fz-14 text-ultra-bold text-center">Economic Development</h5>
                                    <p class="fz-11 mt-15 text-center equal">ACER believes economic vitality and independence
                                    is essential to our community. Since 2008,
                                    ACER has partnered to provide small business
                                    training right here in our community.</p>

                                    <div class="text-center  mt-5"><a class="roboto " href="#contact">Engage</a></div>
                            </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-sm-3">
                            <div class="img_with_text">
                                <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/civic_engagement_education.jpg">
                                    <h5 class="mt-25 fz-14 text-ultra-bold text-center">Civic Engagement and Education</h5>
                                    <p class="fz-11 mt-15 mb-15 text-center equal">ACER understands that when communities
                                    understand the civic process, they are more
                                    comfortable and likely to participate in the civic
                                    engagement process. </p>

                                   <div class="text-center  mt-5"><a class="roboto " href="#contact">Engage</a></div>
                            </div>
                    </div>

                </div>
            </div>
        </section>



                <!-- Organisation you can trust -->
        <section class="trust-o gray-f9f9-bg">

                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                          <img class="img-responsive shadow" src="<?php the_field('organization_image');?>">
                         </div>

                         <div class="col-md-6 mt-half">
                            <h3 class="open_sans"><?php the_field('organization_title');?></h3>
                            <img class="mt-20" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/red_line.png">
                             <p class="mt-20"><?php the_field('organization_content');?></p>
                        </div>
                    </div>
                </div>


        </section>



        <section id="ourstaff" class="staff ptb-150 gray-f9f9-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class=" black h-sep text-uppercase">Our Staff</h3>
                        <img class="mt-20" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/red_line.png">
                        <p class="fz-16 gray-666 mt-50">Our team that helps our community grow</p>
                    </div>
                </div>
                <div class="row mt-60">
                    <div class="col-md-3 staff-member position-r text-center col-sm-6">
                        <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/denise_butler.jpg" alt="">
                        <div class="staff-hover">
                            <ul class="staff-social list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <h6 class="white text-bold text-uppercase">DENISE BUTLER</h6>
                            <span class=" mt-15 ubuntu white text-medium text-uppercase display-block fz-11">design partner</span>
                            <span class="mt-20 ubuntu fz-13 text-medium white display-block">Tell : +61 012 345 6789</span>
                            <span class="mt-10 ubuntu fz-13 text-medium white display-block">Mail : example@gmail.com</span>
                        </div>
                        <div class="staff-overlay">
                            <h6 class="white text-bold text-uppercase">DENISE BUTLER</h6>
                            <span class=" mt-15 ubuntu white text-medium text-uppercase display-block fz-11">design partner</span>
                        </div>
                    </div>
                    <div class="col-md-3 staff-member position-r text-center col-sm-6">
                        <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/david_wilson.jpg" alt="">
                        <div class="staff-hover">
                            <ul class="staff-social list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <h6 class="white text-bold text-uppercase">DAVID WILSON</h6>
                            <span class=" mt-15 ubuntu white text-medium text-uppercase display-block fz-11">design partner</span>
                            <span class="mt-20 ubuntu fz-13 text-medium white display-block">Tell : +61 012 345 6789</span>
                            <span class="mt-10 ubuntu fz-13 text-medium white display-block">Mail : example@gmail.com</span>
                        </div>
                        <div class="staff-overlay">
                            <h6 class="white text-bold text-uppercase">DAVID WILSON</h6>
                            <span class=" mt-15 ubuntu white text-medium text-uppercase display-block fz-11">design partner</span>
                        </div>
                    </div>
                    <div class="col-md-3  staff-member position-r text-center col-sm-6">
                        <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/nelima_sitati.jpg" alt="">
                        <div class="staff-hover">
                            <ul class="staff-social list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <h6 class="white text-bold text-uppercase">NELIMA SITATI MUNENE</h6>
                            <span class=" mt-15 ubuntu white text-medium text-uppercase display-block fz-11">design partner</span>
                            <span class="mt-20 ubuntu fz-13 text-medium white display-block">Tell : +61 012 345 6789</span>
                            <span class="mt-10 ubuntu fz-13 text-medium white display-block">Mail : example@gmail.com</span>
                        </div>
                        <div class="staff-overlay">
                            <h6 class="white text-bold text-uppercase">NELIMA SITATI MUNENE</h6>
                            <span class=" mt-15 ubuntu white text-medium text-uppercase display-block fz-11">design partner</span>
                        </div>
                    </div>

                    <div class="col-md-3  staff-member position-r text-center col-sm-6">
                        <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/nelima_sitati.jpg" alt="">
                        <div class="staff-hover">
                            <ul class="staff-social list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <h6 class="white text-bold text-uppercase">WINFRED RUSSELL</h6>
                            <span class=" mt-15 ubuntu white text-medium text-uppercase display-block fz-11">design partner</span>
                            <span class="mt-20 ubuntu fz-13 text-medium white display-block">Tell : +61 012 345 6789</span>
                            <span class="mt-10 ubuntu fz-13 text-medium white display-block">Mail : example@gmail.com</span>
                        </div>
                        <div class="staff-overlay">
                            <h6 class="white text-bold text-uppercase">WINFRED RUSSELL</h6>
                            <span class=" mt-15 ubuntu white text-medium text-uppercase display-block fz-11">design partner</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


         <section class="mt-150 mb-220 contact-us">
          <div class="container">
            <div class="row">
             <div class="col-md-12 col-sm-12 text-center">
                    <h3 class="black h-sep "><?php the_field('contact_us_title');?></h3>
                     <img class="mt-20" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/red_line.png">

                     <p class="fz-16 gray-666 mt-15 ptb-0150 "> <?php the_field('contact_us_content');?> </p>

             </div>
              <div id="contact" class="col-md-8 col-sm-6">


                  <div class="mt-30" id="message"></div>
                  <form id="contactform_forms" class="mt-20 checkout-form" method="post" action="#">
                    <div class="row">
                      <div class="col-md-6 mt-30"><input id="contact_name" type="text" name="contact_name" class="form-control" placeholder="First name"></div>
                      <div class="col-md-6 mt-30"><input id="contact_email" type="email" name="contact_email" class="form-control" placeholder="Email address"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mt-30"><input id="contact_phone" type="text" name="contact_phone" class="form-control" placeholder="Phone"></div>
                      <div class="col-md-6 mt-30"><input id="contact_website" type="text" name="contact_website" class="form-control" placeholder="Your website"></div>
                    </div>
                    <textarea id="contact_message" rows="10" name="contact_message" class="mt-30 form-control" placeholder="Write message"></textarea>
                    <div class="mt-50 submit">
                      <input type="submit" class="open_sans text-extra-bold text-uppercase fz-13" value="Send message">
                    </div>
                  </form>

              </div>
              <div class="col-md-4  col-sm-6 mt-50">
                <div class="contact-info clearfix">
                  <div class="pull-left">
                    <h5 class="fz-16 black text-bold mb-10">Office Address</h5>
                    <span class="ubuntu fz-15 gray-777 lh-22">5701 Shingle Creek Pkwy Suite #630<br />Brooklyn Center, MN 55430 </span>
                  </div>
                  <div class="contact-icon pull-right position-r">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/address.png" alt="">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/address_hover.png" alt="">

                  </div>
                  <div class="clearfix"></div>
                  <hr class="c-border">
                </div>
                <div class="contact-info clearfix mt-20">
                  <div class="pull-left">
                    <h5 class="fz-16 black text-bold mb-10">Phone</h5>
                    <span class="ubuntu fz-15 gray-777 lh-22">(763) 273 – 4217 </span>
                  </div>
                  <div class="contact-icon pull-right position-r">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/mobile.png" alt="">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/mobile_phone_hover.png" alt="">

                  </div>
                  <div class="clearfix"></div>
                  <hr class="c-border">
                </div>
                <div class="contact-info clearfix mt-20">
                  <div class="pull-left">
                    <h5 class="fz-16 black text-bold mb-10">E-mail</h5>
                    <span class="ubuntu fz-15 gray-777 lh-22">info@acerinc.org</span>
                  </div>
                  <div class="contact-icon pull-right position-r">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/mail2.png" alt="">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/mail_hover.png" alt="">

                  </div>
                  <div class="clearfix"></div>
                  <hr class="c-border">
                </div>
              </div>
            </div>
          </div>
        </section>


          <div class="container-fluid no-padding mt-150">

                <div id="map" class="gmap text-center">
                        <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2818.2921030589264!2d-93.31767278445605!3d45.05958527909837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b33101526ab6f7%3A0xaa66a335ad0a4930!2s5701+Shingle+Creek+Pkwy%2C+Minneapolis%2C+MN+55430!5e0!3m2!1sen!2sus!4v1471371874480" width="100%" height="550" frameborder="0" allowfullscreen="allowfullscreen"></iframe>

                </div>

          </div>


      <?php get_footer();?>