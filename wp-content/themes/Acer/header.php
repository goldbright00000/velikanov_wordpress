<?php
/**
 * The header for ACER theme.
 *
 * Displays all of the <head> section and everything up till <div class="container-fluid no-padding">
 *
 * @package ACER Theme
 */
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <title><?php bloginfo('name');?></title>
  <?php wp_head();?>
</head>

<body>

    <header>
            <div class="top-bar gray-555-bg">
                <div class="container">
                    <div class="row">
                         <div class="col-md-9">
                         </div>
                        <div class="col-md-3 top-social">
                            <a href="<?php echo site_url(); ?>/search" class="fa fa-search"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="https://www.facebook.com/ACERFair/" class="fa fa-facebook"></a>


                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row row-eq-height">
                    <div class="col-xs-4 col-sm-4 col-md-5  text-center ">
                        <a href="<?php echo site_url(); ?>"><img class="img-responsive logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.png" alt=""></a>
                    </div>
                    <div class="col-xs-8 col-sm-7 col-sm-offset-1 col-md-6 col-md-offset-0">
                        <div class="top-contact-details">
                            <div class="row mt-20">
                                <div class="col-xs-6 col-sm-5 col-md-5">
                                    <div class="clearfix border-r">
                                        <img id="header-img" class="img-responsive pull-left t-contact-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/phone.png" alt="">
                                        <div class="t-contact-info ubuntu pull-left">
                                            <span class="fz-14 gray-999">Call Us Now </span>
                                            <span class="fz-13">(763) 273 – 4217  </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-5 col-md-5">
                                    <div class="clearfix border-r">
                                        <img id="header-img2" class="img-responsive pull-left t-contact-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/mail.png" alt="">
                                        <div class="t-contact-info ubuntu pull-left">
                                            <span class="fz-14 gray-999">Email us</span>
                                            <span class="fz-13">info@acerinc.org</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <a class="open_sans text-uppercase" href="#contact">VOLUNTEER</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="main-nav mt-20">
                    <div class="container">
                        <div class="col-md-offset-5 col-md-7">
                            <nav class="navbar navbar-default">
                                  <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                      <span class="sr-only">Toggle navigation</span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                    </button>
                                  </div>
                                  <div id="navbar" class="navbar-collapse collapse no-margin no-padding">
                                        <ul class="nav navbar-nav">
                                          <li class="<?php if (is_front_page()) {
    echo 'active';
}
?>"><a href="<?php echo site_url(); ?>/">HOME</a></li>
                                          <li><a class="" href="#about">ABOUT</a></li>
                                          <li><a class="<?php if (is_page('ourwork')) {
    echo 'active';
}
?>" href="<?php echo site_url(); ?>/ourwork">OUR WORK </a></li>
                                          <li><a class="<?php if (is_page('event')) {
    echo 'active';
}
?>" href="<?php echo site_url(); ?>/event">EVENTS</a></li>
                                          <li><a class="" href="https://medium.com/">BLOG </a></li>
                                          <li><a class="green-nav" href="#contact">CONTACT</a></li>
                                        </ul>
                                  </div><!--/.nav-collapse -->
                            </nav>
                        </div>
                    </div>
                </div>
        </header>
