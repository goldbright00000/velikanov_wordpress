<?php
/**
 * The footer for ACER theme.
 *
 * Displays all of the footer section following the page content
 *
 * @package ACER Theme
 */
?>

        </div>


        <footer>
            <div class="upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-md-3 col-sm-3">
                            <img class="img-responsive footer_logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.png" alt="">

                            <div class="footer-social list-inline ">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>

                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 col-md-offset-1 col-sm-3" >
                            <h6 class="text-uppercase text-bold gray-e8 bb display-ib">useful links</h6>
                            <ul class="list-unstyled useful-links">
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#ourstaff">Meet The Team</a></li>
                                <li><a href="#contact">Volunteer</a></li>
                                <li><a href="<?php echo site_url(); ?>/event">Events</a></li>
                                <li><a href="#contact">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-md-2 col-md-offset-1 col-sm-3">
                            <h6 class="text-uppercase text-bold gray-e8 bb display-ib">Our Work</h6>
                            <ul class="list-unstyled useful-links">
                                <li><a href="<?php echo site_url(); ?>/ourwork#transit">Meaningful Transit</a></li>
                                <li><a href="<?php echo site_url(); ?>/ourwork#fair">ACER Fair</a></li>
                                <li><a href="<?php echo site_url(); ?>/ourwork#health">Health Equity</a></li>
                                <li><a href="<?php echo site_url(); ?>/ourwork##housing">Housing Equity and Advancing Fair</a></li>
                                <li><a href="<?php echo site_url(); ?>/ourwork">Housing</a></li>
                            </ul>

                        </div>
                        <div class="col-xs-6 col-md-3 col-sm-3">
                            <h6 class="text-uppercase text-bold gray-e8 bb display-ib">keep in touch</h6>
                            <span class="ubuntu fz-14 gray-aaa display-block mt-30 lh-24">Address : 5701 Shingle Creek Pkwy
                                Suite #630, Brooklyn Center, MN 55430</span>
                            <span class="ubuntu fz-14 gray-aaa display-block lh-24">Phone : (763) 273 421 7</span>
                            <span class="ubuntu fz-14 gray-aaa display-block lh-24">Email : info@acerinc.org</span>
                            <form class="mt-50" action="#">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Email Address">
                                  <div class="input-group-addon"><a href="#"><img class="footer_submit" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/submit.png" alt=""></a></div>
                                </div>
                            </form>


                        </div>
                    </div>
                    <div class="row mt-80">
                        <div class="col-md-3 col-sm-3">

                        </div>
                        <div class="col-md-6 col-sm-6">
                                <div class="footer-d-v clearfix">
                                    <div class="pull-left">
                                        <h5 class="fz-18 text-bold">Join As Volunteer</h5>
                                        <span class="fz-14 ubuntu gray-777 display-block mt-15">Might as well say Would you Could be you be mine? </span>
                                    </div>
                                    <div class="pull-right mt-6">
                                        <a class="btn-prime tri-b text-uppercase" href="#contact">Volunteer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">

                        </div>
                        </div>
                    </div>
                </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <span class="ubuntu fz-12 text-uppercase text-medium">Copyright © 2017 ACER INC. All Rights Reserved.</span>     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="ubuntu fz-12 text-uppercase text-medium">Powered by Workcom</span>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/bootstrap.min.js"></script>

        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.countdown.min.js"></script>
       <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/owl.carousel.js"></script>

        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/main.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/helper.js"></script>

        <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
         <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.gomap-1.3.3.js"></script>

        <script type="text/javascript">
            equalHeights("equal");
            equalHeights("equal_paragraf");
           equalHeights("img_with_text");
        </script>


        <script type="text/javascript">


        var datum = document.getElementById('datum').innerHTML;


    $('#clock').countdown(document.getElementById('datum').innerHTML,function(event) {
       var $this = $(this).html(event.strftime(''

         + '<div class="time-p mt-80 text-center col-xs-6 col-sm-6 col-md-3"><span class="days poppins text-uppercase d-black">days</span> <span class="karla fz-60 green-6f">%d</span><span class="year karala fz-14 gray-777">2015</span></div>  '
         + '<div class="time-p mt-80 text-center col-xs-6 col-sm-6 col-md-3"><span class="hr poppins text-uppercase d-black">hours</span> <span class="karla fz-60 green-6f">%H</span><span class="year karala fz-14 gray-777">2015</span></div>  '
         + '<div class="time-p mt-80 text-center col-xs-6 col-sm-6 col-md-3"><span class="min poppins text-uppercase d-black">mins</span> <span class="karla fz-60 green-6f">%M</span><span class="year karala fz-14 gray-777">2015</span></div>  '
         + '<div class="time-p mt-80 text-center col-xs-6 col-sm-6 col-md-3"><span class="sec poppins text-uppercase d-black">secs</span> <span class="karla fz-60 green-6f">%S</span><span class="year karala fz-14 gray-777">2015</span></div> '));
    });

     $('#upcoming').countdown(document.getElementById('datum').innerHTML, function(event) {
       var $this = $(this).html(event.strftime(''

         + '<div class="col-xs-6 col-sm-6 col-md-3 text-center display-ib event-count-down mt-60"><span class="martel text-extra-bold green-5c fz-26 display-block">%d</span><span class="martel fz-16 display-block text-bold text-uppercase white">Days</span></div>  '
         + '<div class="col-xs-6 col-sm-6 col-md-3 text-center display-ib event-count-down mt-60"><span class="martel text-extra-bold green-5c fz-26 display-block">%H</span><span class="martel fz-16 display-block text-bold text-uppercase white">hours</span></div>  '
         + '<div class="col-xs-6 col-sm-6 col-md-3 text-center display-ib event-count-down mt-60"><span class="martel text-extra-bold green-5c fz-26 display-block">%M</span><span class="martel fz-16 display-block text-bold text-uppercase white">Minutes</span></div>  '
         + '<div class="col-xs-6 col-sm-6 col-md-3 text-center display-ib event-count-down mt-60"><span class="martel text-extra-bold green-5c fz-26 display-block">%S</span><span class="martel fz-16 display-block text-bold text-uppercase white">seconds</span></div> '));
    });

    /*map*/
    /*
    $("#map").css({"height":$("#map").height()});
    $("#mapCanvas").css({"height":"100%"});
    $(function() {
        $("#mapCanvas").goMap({
            latitude: "45.059572",
            longitude: "-93.315501",
            scrollwheel: false,
            scaleControl: true,
            navigationControl: true,
            mapTypeControl: true,
            navigationControlOptions:   {
                style: 'LARGE'
            },
            maptype: 'ROADMAP',
            zoom: 16
        });

        $.goMap.createMarker({

            latitude: "45.059572",
            longitude: "-93.315501",
            title: "ACER inc",

        });
    });
    */

</script>
    </body>
</html>
