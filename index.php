<?php
session_start();
error_reporting (0);
include 'config.php';
?>


<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="utf-8">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon ======-->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--====== TITLE TAG ======-->
    <title>Pettu | Pet Care &amp; Pet Shop</title>
    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="css/swiper-bundle-min.css" />
    <link rel="stylesheet" href="css/bootstrap-min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/remixicon.css">
    <link rel="stylesheet" href="css/theme-icon.css">
    <link rel="stylesheet" href="css/lity-min.css">
    <link rel="stylesheet" href="css/theme.css">
    <!--====== MAIN STYLESHEET ======-->
    <link href="style.css" rel="stylesheet">
    <script src="js/vendor/modernizr.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".nav__area" data-offset="50">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Preloader-Content -->

    <div class="preloader">
        <img src="images/preloader.gif" alt="">
    </div>
    <!-- nav__area-Start -->
    <div class="nav__area fixed-top" data-spy="affix" data-offset-top="197">
        <div class="container nav__row">
            <!-- nav__logo-Start -->
            <div class="nav__logo">
                <!-- Text-Logo-Markup -->
                <!--<h2 class="nav__logo-text"><a href="#">Gority</a></h2>-->
                <!-- Image-Logo-Markup -->
                <a href="index.html" class="nav__logo-image logo__light"><img src="images/logo-light.png" alt="Gority"></a>
                <a href="index.html" class="nav__logo-image logo__dark"><img src="images/logo-dark.png" alt="Gority"></a>
            </div>
            <!--nav__logo-End-->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-function-line"></i>
            </div>
            <div class="nav__right" id="nav-right">
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
                <!-- nav__menu-Start -->
                <nav class="nav__menu" id="nav-menu">
                    <ul class="nav">
                        <li class="current-menu-item"><a href="index.html">Home</a>
                           
                        </li>
                        <li><a href="about.html">About</a></li>
                       
                        <li><a href="login.php">Login</a>
                          
                        </li>
                        <li><a href="Register.html">Register</a>
                           
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>

                </nav>
                <!-- nav__menu-End -->
              
<form action="" method="post">
  <button class="btn btn-warning" type="submit" name="logout">Logout</button>
  </form>
              
                <!--Action-Button-->
                <a href="profile.php" class="primary__button">Profile</a>
            </div>
        </div>
    </div>
    <!-- nav__area-End -->


    <!-- Full-Wrapper-Start -->
    <main class="full-wrapper" id="home-section">
        <!--Header-Area-Start-->
        <header class="home__area v2">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <figure class="header__image section__relative mr-lg-n5">
                            <img src="images/header-image-2.png" alt="">
                            <div class="section__shape">
                                <svg class="svg_element">
                                    <use xlink:href="#svg__element-12" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <div class="section__heading mb-0">
                            
                            <h5 class="section__heading-sup-title anim_top">

                            <?php
                            echo $_SESSION['user_email'];
                    
                            if(!$_SESSION['user_email']){
                                echo "Guest";


                            }
                            elseif(isset($_POST['logout'])){
                                // remove all session variables
                            session_unset();
                            
                            // destroy the session
                            session_destroy();
                            echo "<script>window.location.href = 'index.php'</script>";
                            }
                            ?>
                            </h5>
                            <h5 class="section__heading-sup-title anim_top">We Enjoy providing</h5>
                            <h1 class="section__heading-title anim_top">We're Ready To Keep your pet</h1>
                            <div class="section__heading-desc anim_top">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa Qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <a href="contact.html" class="primary__button anim_top">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Header-Area-End-->

        <!--About-Area-Start-->
        <section class="about__area v1 section__padding-top section__relative">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <figure class="about-image anim_left">
                            <img src="images/about-image-2.png" alt="">
                        </figure>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="section__heading mb-0">
                            <h5 class="section__heading-sup-title anim_top">About Us</h5>
                            <h2 class="section__heading-title anim_top">We are best for Your pet care</h2>
                            <div class="section__heading-desc anim_top">
                                <p>Em ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. em ipsum dolor sit amet.</p>
                            </div>
                            <ul class="check__list anim_top">
                                <li><i class="ri-checkbox-circle-line"></i>Behavioral Consultation &amp; Counseling</li>
                                <li><i class="ri-checkbox-circle-line"></i>Specialized Day Habilitation</li>
                                <li><i class="ri-checkbox-circle-line"></i>Chicken Dog Treats Pet Supply Pet Food</li>
                            </ul>
                            <a href="about.html" class="primary__button anim_top">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section__shape shpae_1">
                <svg class="svg_element">
                    <use xlink:href="#svg__element-2" />
                </svg>
            </div>
            <div class="section__shape shpae_2">
                <svg class="svg_element">
                    <use xlink:href="#svg__element-3" />
                </svg>
            </div>
        </section>
        <!--About-Area-End-->


        <!--Service__Area-Start-->
        <section class="service__area section__padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section__heading text-center text-lg-left">
                            <h5 class="section__heading-sup-title anim_top">Services</h5>
                            <h2 class="section__heading-title anim_top">We Provide Quality Services</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="slider__arrows anim_top justify-content-lg-end justify-content-center mb-5" id="service_2-arrow">
                            <button class="slider__arrow arrow_prev"><i class="icon-arrow-left"></i></button>
                            <button class="slider__arrow arrow_next"><i class="icon-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <svg width="0px" height="0px" viewBox="0 0 141 136" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                    <clipPath id="service_image_shpae">
                        <path d="M150.303 141.939C132.849 161.942 106.197 173.301 80.016 177.993C65.6284 180.71 50.0616 181.451 36.8534 175.277C21.0507 167.869 10.6728 151.076 6.19144 133.79C-1.12026 105.885 -2.29956 69.5841 12.088 44.1486C24.8245 21.1826 47.9389 4.8842 72.9401 1.18C104.31 -3.51197 133.792 10.8109 152.425 36.7402C165.634 55.2612 172.709 77.9803 169.171 101.193C166.813 117.492 159.973 130.827 150.303 141.939Z" fill="currentColor" />
                    </clipPath>
                </svg>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container service_2-slider anim_right">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="service__box">
                                        <div class="service__box-icon">
                                            <div class="service__box-image">
                                                <img src="images/service-1.jpg" alt="">
                                            </div>
                                            <svg class="svg_element">
                                                <use xlink:href="#svg__element-13" />
                                            </svg>
                                        </div>
                                        <h4 class="service__box-title"><a href="single-service.html">Dog boarding</a></h4>
                                        <div class="service__box-desc">
                                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
                                        </div>
                                        <div class="service__box-bg">
                                            <i class="icon-dog-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service__box">
                                        <div class="service__box-icon">
                                            <div class="service__box-image">
                                                <img src="images/service-2.jpg" alt="">
                                            </div>
                                            <svg class="svg_element">
                                                <use xlink:href="#svg__element-13" />
                                            </svg>
                                        </div>
                                        <h4 class="service__box-title"><a href="single-service.html">Cat boarding</a></h4>
                                        <div class="service__box-desc">
                                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
                                        </div>
                                        <div class="service__box-bg">
                                            <i class="icon-dog-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service__box">
                                        <div class="service__box-icon">
                                            <div class="service__box-image">
                                                <img src="images/service-3.jpg" alt="">
                                            </div>
                                            <svg class="svg_element">
                                                <use xlink:href="#svg__element-13" />
                                            </svg>
                                        </div>
                                        <h4 class="service__box-title"><a href="single-service.html">Healthy meals</a></h4>
                                        <div class="service__box-desc">
                                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
                                        </div>
                                        <div class="service__box-bg">
                                            <i class="icon-dog-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service__box">
                                        <div class="service__box-icon">
                                            <div class="service__box-image">
                                                <img src="images/service-4.jpg" alt="">
                                            </div>
                                            <svg class="svg_element">
                                                <use xlink:href="#svg__element-13" />
                                            </svg>
                                        </div>
                                        <h4 class="service__box-title"><a href="single-service.html">Dog Walking</a></h4>
                                        <div class="service__box-desc">
                                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
                                        </div>
                                        <div class="service__box-bg">
                                            <i class="icon-dog-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Service__Area-End-->



        <!--Gallery__Area-Start-->
        <section class="gallery__area section__padding bg__gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section__heading text-center">
                            <h5 class="section__heading-sup-title anim_top">Gallery</h5>
                            <h2 class="section__heading-title anim_top">Our Photos Gallery</h2>
                        </div>
                    </div>
                </div>
                <div class="row gallery_items items_space">
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery__box">
                            <img src="images/gallery-3.jpg" alt="">
                            <a href="images/gallery-3.jpg" class="zoom_icon" data-lity><i class="ri-zoom-in-line"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery__box">
                            <img src="images/gallery-2.jpg" alt="">
                            <a href="images/gallery-2.jpg" class="zoom_icon" data-lity><i class="ri-zoom-in-line"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery__box">
                            <img src="images/gallery-1.jpg" alt="">
                            <a href="images/gallery-1.jpg" class="zoom_icon" data-lity><i class="ri-zoom-in-line"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="gallery__box">
                            <img src="images/gallery-4.jpg" alt="">
                            <a href="images/gallery-4.jpg" class="zoom_icon" data-lity><i class="ri-zoom-in-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <a href="gallery.html" class="primary__button">Discover More</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Gallery__Area-End-->


        <!--FAQ_Area-Start-->
        <section class="faq__area section__padding-top">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-5 offset-lg-1 mb-5 mb-lg-0">
                        <div class="section__heading pb-5 mb-n3 ">
                            <h5 class="section__heading-sup-title anim_top">Asked Questions</h5>
                            <h2 class="section__heading-title anim_top">We are always Ready for your Any question</h2>
                            <div class="section__heading-desc anim_top">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                            </div>
                            <a href="contact.html" class="primary__button">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion-list">
                            <div class="accoridon-item">
                                <h4 class="title">How to contact with our customer featire?</h4>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat explicabo, animi soluta veniam aspernatur ut iusto incidunt hic quas sequi dolores neque quis, sit odit minima modi nemo.</p>
                                </div>
                            </div>
                            <div class="accoridon-item">
                                <h4 class="title">Is there any customer pricing system?</h4>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat explicabo, animi soluta veniam aspernatur ut iusto incidunt hic quas sequi dolores neque quis, sit odit minima modi nemo.</p>
                                </div>
                            </div>
                            <div class="accoridon-item">
                                <h4 class="title">Where is the edit options on deshboard?</h4>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat explicabo, animi soluta veniam aspernatur ut iusto incidunt hic quas sequi dolores neque quis, sit odit minima modi nemo.</p>
                                </div>
                            </div>
                            <div class="accoridon-item">
                                <h4 class="title">How to update the latest version?</h4>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat explicabo, animi soluta veniam aspernatur ut iusto incidunt hic quas sequi dolores neque quis, sit odit minima modi nemo.</p>
                                </div>
                            </div>
                            <div class="accoridon-item">
                                <h4 class="title">Is there any customer pricing system?</h4>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat explicabo, animi soluta veniam aspernatur ut iusto incidunt hic quas sequi dolores neque quis, sit odit minima modi nemo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQ_Area-End-->


        <!--Team__Area-Start-->
        <section class="team__area section__padding section__relative">
            <div class="section__shape">
                <svg class="svg_element">
                    <use xlink:href="#svg__element-7" />
                </svg>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section__heading text-center">
                            <h5 class="section__heading-sup-title anim_top">Exprt Team</h5>
                            <h2 class="section__heading-title anim_top">Meet the Exprt Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container team_slider anim_top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="team__box-1">
                                        <div class="team__box-image">
                                            <img src="images/team-alt-1.jpg" alt="">
                                        </div>
                                        <div class="team__box-content">
                                            <h5 class="team__box-1-name"><a href="single-team.html">Agnes C Brewer</a></h5>
                                            <div class="team__box-1-position">Fouder Of CEO</div>
                                            <div class="social__links">
                                                <a href="#"><i class="ri-facebook-fill"></i></a>
                                                <a href="#"><i class="ri-twitter-fill"></i></a>
                                                <a href="#"><i class="ri-instagram-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team__box-1">
                                        <div class="team__box-image">
                                            <img src="images/team-alt-2.jpg" alt="">
                                        </div>
                                        <div class="team__box-content">
                                            <h5 class="team__box-1-name"><a href="single-team.html">Agnes C Brewer</a></h5>
                                            <div class="team__box-1-position">Fouder Of CEO</div>
                                            <div class="social__links">
                                                <a href="#"><i class="ri-facebook-fill"></i></a>
                                                <a href="#"><i class="ri-twitter-fill"></i></a>
                                                <a href="#"><i class="ri-instagram-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team__box-1">
                                        <div class="team__box-image">
                                            <img src="images/team-alt-3.jpg" alt="">
                                        </div>
                                        <div class="team__box-content">
                                            <h5 class="team__box-1-name"><a href="single-team.html">Agnes C Brewer</a></h5>
                                            <div class="team__box-1-position">Fouder Of CEO</div>
                                            <div class="social__links">
                                                <a href="#"><i class="ri-facebook-fill"></i></a>
                                                <a href="#"><i class="ri-twitter-fill"></i></a>
                                                <a href="#"><i class="ri-instagram-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team__box-1">
                                        <div class="team__box-image">
                                            <img src="images/team-alt-4.jpg" alt="">
                                        </div>
                                        <div class="team__box-content">
                                            <h5 class="team__box-1-name"><a href="single-team.html">Agnes C Brewer</a></h5>
                                            <div class="team__box-1-position">Fouder Of CEO</div>
                                            <div class="social__links">
                                                <a href="#"><i class="ri-facebook-fill"></i></a>
                                                <a href="#"><i class="ri-twitter-fill"></i></a>
                                                <a href="#"><i class="ri-instagram-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team__Area-End-->



        <!--Check__Area-Start-->
        <section class="check__area gray-bg">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6 d-none d-lg-block">
                        <figure class="check__image m-0 anim_left">
                            <img src="images/contact-image.png" alt="">
                            <svg class="svg_element">
                                <use xlink:href="#svg__element-5" />
                            </svg>
                        </figure>
                    </div>
                    <div class="col-lg-6 section__padding ">
                        <form class="contact__form white_form" id="" action="contact.php" method="post">
                            <h3 class="contact__form-title">Free Get In thouch</h3>
                            <div class="row">
                                <div class="col-sm-6 form-box">
                                    <input type="text" name="user_name" class="input_control" placeholder="Your Name">
                                </div>
                                <div class="col-sm-6 form-box">
                                    <input type="email" name="user_email" class="input_control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-box">
                                    <input type="text" name="user_subject" class="input_control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-box">
                                    <textarea name="user_message" id="message" class="input_control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="primary__button">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="section__shape">
                <svg class="svg_element">
                    <use xlink:href="#svg__element-6" />
                </svg>
            </div>
        </section>
        <!--Check__Area-End-->


        <!--posts__Area-Start-->
        <section class="posts__area section__padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                        <div class="section__heading text-center">
                            <h5 class="section__heading-sup-title anim_top">Posts Petcare</h5>
                            <h2 class="section__heading-title anim_top">Everyday update here About petcate</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container posts_slider anim_top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="posts_box v2">
                                        <figure class="posts_box-thumb">
                                            <img src="images/blog-2.jpg" alt="">
                                        </figure>
                                        <div class="posts_box-details">
                                            <ul class="meta_list">
                                                <li>
                                                    <span class="icon"><span class="ri-user-3-line"></span></span>
                                                    <span class="value">By John Smith</span>
                                                </li>
                                            </ul>
                                            <h4 class="title"><a href="single-post.html">Fun Ways to Exercise With Your pet</a></h4>
                                            <div class="desc">
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
                                            </div>
                                            <a href="single-post.html" class="load_more">Load More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="posts_box v2">
                                        <figure class="posts_box-thumb">
                                            <img src="images/blog-3.jpg" alt="">
                                        </figure>
                                        <div class="posts_box-details">
                                            <ul class="meta_list">
                                                <li>
                                                    <span class="icon"><span class="ri-user-3-line"></span></span>
                                                    <span class="value">By John Smith</span>
                                                </li>
                                            </ul>
                                            <h4 class="title"><a href="single-post.html">Signs Your Dog Might Have Osteoarthritis</a></h4>
                                            <div class="desc">
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
                                            </div>
                                            <a href="single-post.html" class="load_more">Load More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="posts_box v2">
                                        <figure class="posts_box-thumb">
                                            <img src="images/blog-4.jpg" alt="">
                                        </figure>
                                        <div class="posts_box-details">
                                            <ul class="meta_list">
                                                <li>
                                                    <span class="icon"><span class="ri-user-3-line"></span></span>
                                                    <span class="value">By John Smith</span>
                                                </li>
                                            </ul>
                                            <h4 class="title"><a href="single-post.html">How to Get Pee Smell Out of Carpet?</a></h4>
                                            <div class="desc">
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
                                            </div>
                                            <a href="single-post.html" class="load_more">Load More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="posts_box v2">
                                        <figure class="posts_box-thumb">
                                            <img src="images/blog-1.jpg" alt="">
                                        </figure>
                                        <div class="posts_box-details">
                                            <ul class="meta_list">
                                                <li>
                                                    <span class="icon"><span class="ri-user-3-line"></span></span>
                                                    <span class="value">By John Smith</span>
                                                </li>
                                            </ul>
                                            <h4 class="title"><a href="single-post.html">4 Tips for Calming an Anxious Dog Down</a></h4>
                                            <div class="desc">
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
                                            </div>
                                            <a href="single-post.html" class="load_more">Load More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--posts__Area-End-->

        <!--Footer__Area-Start-->
        <footer class="footer__area section__relative">
            <div class="section__shape">
                <svg class="svg_element">
                    <use xlink:href="#svg__element-9" />
                </svg>
            </div>
            <!--Footer_Bottom_Area-Start-->
            <div class="footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 pr-lg-5">
                            <div class="footer__widget anim_top">
                                <h4 class="widget__title">About Us</h4>
                                <div class="desc mb-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor sit amet,</p>
                                </div>
                                <div class="social__links">
                                    <a href="#"><i class="ri-facebook-fill"></i></a>
                                    <a href="#"><i class="ri-twitter-fill"></i></a>
                                    <a href="#"><i class="ri-instagram-fill"></i></a>
                                    <a href="#"><i class="ri-linkedin-fill"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-2">
                            <div class="footer__widget anim_top">
                                <h4 class="widget__title">Explore</h4>
                                <ul class="nav-link">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Testimonial</a></li>
                                    <li><a href="#">Expert Team</a></li>
                                    <li><a href="#">Posts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-2">
                            <div class="footer__widget anim_top">
                                <h4 class="widget__title">Support</h4>
                                <ul class="nav-link">
                                    <li><a href="#">Pet Shower</a></li>
                                    <li><a href="#">Health checkup</a></li>
                                    <li><a href="#">Pet Grooming</a></li>
                                    <li><a href="#">Spa and Grooming</a></li>
                                    <li><a href="#">Brush &amp; Blow Dry</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 pl-lg-5">
                            <div class="footer__widget anim_top">
                                <h4 class="widget__title">Subscribe</h4>
                                <div class="desc pb-4">
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui</p>
                                </div>
                                <form id="mc_form" class="subscribe__form" action="">
                                    <input type="email" id="mc-email" name="EMAIL" placeholder="E-mail Address">
                                    <button type="submit"><i class="ri-mail-send-line"></i></button>
                                    <label class="mt-3" for="mc-email"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer_Bottom_Area-End-->
            <!--Footer_Top_Area-Start-->
            <div class="footer__bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="copyright text-center text-md-left mb-3 mb-md-0">Copyright &copy; 2021. All Rights Reserved</div>
                        </div>
                        <div class="col-md-6 text-md-right text-center">
                            <div class="supported__cards">
                                <img src="images/credit-cards.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer_Top_Area-End-->
        </footer>
        <!--Footer__Area-End-->
    </main>
    <!-- Full-Wrapper-End -->

    <!-- Progress_Scroll-To-Top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
        <span class="icon"><i class="ri-arrow-up-line"></i></span>
    </div>

    <!--=======  SCRIPTS =======-->
    <script src="js/vendor/jquery-min.js"></script>
    <!--=======  PLUGINS =======-->
    <script src="js/bootstrap-min.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/ajaxchimp.js"></script>
    <script src="js/animatenumber-min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/imagesloaded-min.js"></script>
    <script src="js/isotope-pkgd-min.js"></script>
    <script src="js/lity-min.js"></script>
    <script src="js/scrollreveal-min.js"></script>
    <script src="js/swiper-bundle-min.js"></script>
    <!--=======  ACTIVE JS =======-->
    <script src="js/main.js"></script>
</body>

</html>