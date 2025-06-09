<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LT</title>
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- <link rel="stylesheet" href="css/theme-styles.min.css"> -->
    <!-- <link rel="stylesheet" href="dist/css/app.min.css"> -->

    <?php
    include_once 'helpers.php';

    // Get the base URL and version separately
    $base_url = get_base_url();
    $version = get_version();
    ?>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&amp;family=Urbanist:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url . 'dist/css/app.min.css?v=' . $version; ?>">


</head>

<body>




    <header class="z-99 sticky-header main-bar-wraper navbar-expand-lg duretion-500">
        <div class="main-bar">
            <div class="container">
                <div class="bottom-bar">
                    <div class="two-bar">
                        <div class="flex items-center justify-between">
                            <div class="logo">
                                <a href="index.html">
                                    <img alt="logo" src="https://madula.dexignlab.com/tailwind/demo/assets/img/logo.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:void(0)" id="mobile-menu" class="menu-start">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                    <nav class="navbar lg:block hidden">
                        <ul class="navbar-links">
                            <li class="navbar-dropdown menu-item-children">
                                <a href="javascript:void(0);">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">home 1</a></li>
                                    <li><a href="index-2.html">home 2</a></li>
                                    <li><a href="index-3.html">home 3</a></li>
                                </ul>
                            </li>
                            <li class="navbar-dropdown">
                                <a href="about.html">About</a>
                            </li>
                            <li class="navbar-dropdown menu-item-children">
                                <a href="javascript:void(0);">Research</a>
                                <ul class="sub-menu">
                                    <li><a href="portfolio.html">portfolio</a> </li>
                                    <li><a href="portfolio-details.html">portfolio details</a></li>
                                </ul>
                            </li>
                            <li class="navbar-dropdown menu-item-children">
                                <a href="javascript:void(0);">Page</a>
                                <ul class="sub-menu">
                                    <li><a href="services.html">services</a> </li>
                                    <li><a href="services-details.html">services details</a></li>
                                    <li><a href="testimonials.html">testimonials</a> </li>
                                    <li><a href="pricing-table.html">pricing table</a></li>
                                    <li><a href="faq.html">faq</a></li>
                                    <li><a href="appointment.html">Appointment</a></li>
                                </ul>
                            </li>
                            <li class="navbar-dropdown menu-item-children">
                                <a href="javascript:void(0);">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="our-blog.html">our blog</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                </ul>
                            </li>
                            <li class="navbar-dropdown">
                                <a href="contact.html">contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-menu-right">

                        <a href="appointment.html" class="btn xl:block hidden"><span>Book Appointment<i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <!-- <div class="mobile-nav" id="mobile-nav">
                <div class="res-log mb-30">
                    <a href="index.html">
                        <img alt="logo" src="assets/img/logo.png" class="w-auto">
                    </a>
                </div>
                <ul>
                    <li class="menu-item-has-children">
                        <a href="javascript:void(0)">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">home 1</a></li>
                            <li><a href="index-2.html">home 2</a></li>
                            <li><a href="index-3.html">home 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.html">about</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="javascript:void(0)">Research</a>
                        <ul class="sub-menu">
                            <li><a href="portfolio.html">portfolio</a> </li>
                            <li><a href="portfolio-details.html">portfolio details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="javascript:void(0)">Page</a>
                        <ul class="sub-menu">
                            <li><a href="services.html">services</a> </li>
                            <li><a href="services-details.html">services details</a></li>
                            <li><a href="testimonials.html">testimonials</a> </li>
                            <li><a href="pricing-table.html">pricing table</a></li>
                            <li><a href="faq.html">faq</a></li>
                            <li><a href="appointment.html">Appointment</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="javascript:void(0)">blog</a>
                        <ul class="sub-menu">
                            <li><a href="our-blog.html">our blog</a></li>
                            <li><a href="blog-details.html">blog details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
                <a href="JavaScript:void(0)" id="res-cross"></a>
            </div> -->
        </div>
    </header>