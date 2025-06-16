<!DOCTYPE html>
<html lang="en">

<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
                content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
        <meta name="keywords"
                content="Tailwind CSS, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
        <title>Tailwind</title>
        <link rel="canonical" href="" />
        <link rel="shortcut icon" href="assets/img/favicon.png">

        <!-- <link rel="stylesheet" href="css/theme-styles.min.css"> -->
        <!-- <link rel="stylesheet" href="dist/css/app.min.css"> -->

        <?php
        include_once 'helpers.php';

        // Get the base URL and version separately
        $base_url = get_base_url();
        $version = get_version();
        ?>
        <link rel="stylesheet" type="text/css" href="assets/fonts/unicons/unicons.css">

        <link rel="stylesheet" href="<?php echo $base_url . 'dist/css/app.min.css?v=' . $version; ?>">



</head>

<body class="font-THICCCBOI text-[0.85rem]">


        <div class="grow shrink-0">

                <header class="relative wrapper !bg-[#edf2fc] ">
                        <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
                                <div class="container xl:!flex-row lg:!flex-row !flex-nowrap items-center">
                                        <div class="navbar-brand w-full">
                                                <a href="./index.html">
                                                        <img src="./assets/img/logo-dark.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="image">
                                                </a>
                                        </div>
                                        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                                                <div class="offcanvas-header xl:!hidden lg:!hidden flex items-center justify-between flex-row p-6">
                                                        <h3 class="!text-white xl:!text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)] !mb-0">Tailwind</h3>
                                                        <button type="button"
                                                                class="btn-close btn-close-white !mr-[-0.75rem] m-0 p-0 leading-none !text-[#343f52] transition-all duration-[0.2s] ease-in-out border-0 motion-reduce:transition-none before:text-[1.05rem] before:text-white before:content-['\ed3b'] before:w-[1.8rem] before:h-[1.8rem] before:leading-[1.8rem] before:shadow-none before:transition-[background] before:duration-[0.2s] before:ease-in-out before:!flex before:justify-center before:items-center before:m-0 before:p-0 before:rounded-[100%] hover:no-underline bg-inherit before:bg-[rgba(255,255,255,.08)] before:font-Unicons hover:before:bg-[rgba(0,0,0,.11)]  "
                                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body xl:!ml-auto lg:!ml-auto flex  flex-col !h-full">
                                                        <ul class="navbar-nav">
                                                                <li class="nav-item dropdown dropdown-mega group">
                                                                        <a class="nav-link  !text-[.85rem] after:!text-[#fab758] group-hover:!text-[#fab758]">Home</a>

                                                                </li>
                                                                <li class="nav-item dropdown group">
                                                                        <a class="nav-link  !text-[.85rem] after:!text-[#fab758] group-hover:!text-[#fab758]"
                                                                                href="#">About</a>

                                                                </li>

                                                                <li class="nav-item dropdown group">
                                                                        <a class="nav-link  !text-[.85rem] after:!text-[#fab758] group-hover:!text-[#fab758]"
                                                                                href="#">Solution</a>

                                                                </li>
                                                                <li class="nav-item dropdown dropdown-mega group">
                                                                        <a class="nav-link  !text-[.85rem] after:!text-[#fab758] group-hover:!text-[#fab758]"
                                                                                href="#">Testimonial</a>

                                                                </li>
                                                                <li class="nav-item dropdown dropdown-mega group">
                                                                        <a class="nav-link  !text-[.85rem] after:!text-[#fab758] group-hover:!text-[#fab758]"
                                                                                href="#">FAQ</a>

                                                                </li>
                                                        </ul>
                                                        <!-- /.navbar-nav -->
                                                        <div class="offcanvas-footer xl:!hidden lg:!hidden">
                                                                <div>
                                                                        <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                                                                        <br> 00 (123) 456 78 90 <br>
                                                                        <nav class="nav social social-white !mt-4">
                                                                                <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                                                                        href="#"><i class="uil uil-twitter before:content-['\ed59'] !text-white text-[1rem]"></i></a>
                                                                                <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                                                                        href="#"><i class="uil uil-facebook-f before:content-['\eae2'] !text-white text-[1rem]"></i></a>
                                                                                <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                                                                        href="#"><i class="uil uil-dribbble before:content-['\eaa2'] !text-white text-[1rem]"></i></a>
                                                                                <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                                                                        href="#"><i class="uil uil-instagram before:content-['\eb9c'] !text-white text-[1rem]"></i></a>
                                                                                <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                                                                        href="#"><i class="uil uil-youtube before:content-['\edb5'] !text-white text-[1rem]"></i></a>
                                                                        </nav>
                                                                        <!-- /.social -->
                                                                </div>
                                                        </div>
                                                        <!-- /.offcanvas-footer -->
                                                </div>
                                                <!-- /.offcanvas-body -->
                                        </div>
                                        <!-- /.navbar-collapse -->
                                        <div class="navbar-other w-full !flex !ml-auto">
                                                <ul class="navbar-nav !flex-row !items-center !ml-auto">


                                                        <li class="nav-item xl:!hidden lg:!hidden">
                                                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                                                        </li>
                                                </ul>
                                                <!-- /.navbar-nav -->
                                        </div>
                                        <!-- /.navbar-other -->
                                </div>
                                <!-- /.container -->
                        </nav>
                        <!-- /.navbar -->
                        <div class="offcanvas offcanvas-end text-inverse !text-[#cacaca] opacity-100" id="offcanvas-info"
                                data-bs-scroll="true">
                                <div class="offcanvas-header flex flex-row items-center justify-between p-[1.5rem]">
                                        <h3 class="!text-white xl:!text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)] !leading-[1.4] !mb-0">Tailwind</h3>
                                        <button type="button" class="btn-close btn-close-white !mr-[-0.5rem] m-0 p-0" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body !pb-[1.5rem]">
                                        <div class="widget !mb-8">
                                                <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your
                                                        business.</p>
                                        </div>
                                        <!-- /.widget -->
                                        <div class="widget !mb-8">
                                                <h4 class="widget-title !text-white !mb-[0.75rem] !text-[1rem] !leading-[1.45]">Contact Info</h4>
                                                <address class=" not-italic !leading-[inherit] !mb-[1rem]"> Moonshine St. 14/05 <br> Light City, London
                                                </address>
                                                <a class="!text-[#cacaca] hover:!text-[#fab758]" href="mailto:first.last@email.com">info@email.com</a><br> 00
                                                (123) 456 78 90
                                        </div>
                                        <!-- /.widget -->
                                        <div class="widget !mb-8">
                                                <h4 class="widget-title !text-white !mb-[0.75rem] !text-[1rem] !leading-[1.45]">Learn More</h4>
                                                <ul class="list-unstyled !pl-0">
                                                        <li><a class="!text-[#cacaca] hover:!text-[#fab758]" href="#">Our Story</a></li>
                                                        <li class="!mt-[.35rem]"><a class="!text-[#cacaca] hover:!text-[#fab758]" href="#">Terms of Use</a></li>
                                                        <li class="!mt-[.35rem]"><a class="!text-[#cacaca] hover:!text-[#fab758]" href="#">Privacy Policy</a></li>
                                                        <li class="!mt-[.35rem]"><a class="!text-[#cacaca] hover:!text-[#fab758]" href="#">Contact Us</a></li>
                                                </ul>
                                        </div>
                                        <!-- /.widget -->
                                        <div class="widget">
                                                <h4 class="widget-title !text-white !mb-[0.75rem] !text-[1rem] !leading-[1.45]">Follow Us</h4>
                                                <nav class="nav social social-white">
                                                        <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                                                href="#"><i class="uil uil-twitter before:content-['\ed59'] !text-white text-[1rem]"></i></a>
                                                        <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                                                href="#"><i class="uil uil-facebook-f before:content-['\eae2'] !text-white text-[1rem]"></i></a>
                                                        <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                                                href="#"><i class="uil uil-dribbble before:content-['\eaa2'] !text-white text-[1rem]"></i></a>
                                                        <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                                                href="#"><i class="uil uil-instagram before:content-['\eb9c'] !text-white text-[1rem]"></i></a>
                                                        <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                                                href="#"><i class="uil uil-youtube before:content-['\edb5'] !text-white text-[1rem]"></i></a>
                                                </nav>
                                                <!-- /.social -->
                                        </div>
                                        <!-- /.widget -->
                                </div>
                                <!-- /.offcanvas-body -->
                        </div>
                        <!-- /.offcanvas -->
                </header>