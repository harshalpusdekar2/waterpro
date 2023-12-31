<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dhruvi Creation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Dancing+Script:400,700|Muli:300,400"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('frontend/fonts/icomoon/style.css') }}" />

    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/owl.theme.default.min.css') }}" />

    <link rel="stylesheet" href="{{ url('frontend/css/jquery.fancybox.min.css') }}" />

    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap-datepicker.css') }}" />

    <link rel="stylesheet" href="{{ url('frontend/fonts/flaticon/font/flaticon.css') }}" />

    <link rel="stylesheet" href="{{ url('frontend/css/aos.css') }}" />
    <link href="{{ url('public/frontend/css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <div class="header-top bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-lg-3">
                        <a href="{{ url('/') }}">
                            <img src="{{ url('frontend/images/logo2.png') }}" alt="Image" class="img-fluid"
                                style="width: 75%; height: auto;">
                            <!-- <strong>Water</strong>Boat -->
                        </a>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">

                        <div class="quick-contact-icons d-flex">
                            <div class="icon align-self-start">
                                <span class="icon-location-arrow text-primary"></span>
                            </div>
                            <div class="text">
                                <span class="h4 d-block">Chandramani Nagar, Nagpur</span>
                                <span class="caption-text">Plot No-08, Street No-7L</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="quick-contact-icons d-flex">
                            <div class="icon align-self-start">
                                <span class="icon-phone text-primary"></span>
                            </div>
                            <div class="text">
                                <span class="h4 d-block">+91-9370-42-9705</span>
                                <span class="caption-text">Toll Free Number</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="quick-contact-icons d-flex">
                            <div class="icon align-self-start">
                                <span class="icon-envelope text-primary"></span>
                            </div>
                            <div class="text">
                                <span class="h4 d-block">walchetwar.rw@gmail.com</span>
                                <span class="caption-text">Feel Free To Mail</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 d-block d-lg-none text-right">
                        <a href="#"
                            class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>




            <div class="site-navbar js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner"
                style="height: 60px;">

                <div class="container">
                    <div class="d-flex align-items-center">

                        <div class="mx-auto navbardesign">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                    <li class="active">
                                        <a href="{{ url('/') }}" class="nav-link text-left">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/about') }}" class="nav-link text-left">About Us</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a href="{{ url('/services') }}" class="nav-link dropdown-toggle"
                                            href="#" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Services
                                        </a>
                                        <ul class="dropdown-menu bg-light text-dark">
                                            <li><a href="{{ url('/basement') }}">Basements & Tunnels</a></li>
                                            <li><a href="{{ url('/toilet') }}">Toilet & Terrace</a></li>
                                            <li><a href="{{ url('/roof') }}">Roof Insulation Works & Terrace
                                                    Gardens</a></li>
                                            <li><a href="{{ url('/structure') }}">Structural Rehabitation</a></li>
                                            <li><a href="{{ url('/swimming') }}">Swimming Tanks & Humidification
                                                    Tanks</a></li>
                                            <li><a href="{{ url('/industrial') }}">Industrial RCC Containers
                                                    Services</a></li>
                                            <li><a href="{{ url('/construction') }}">Other Special Treatments for
                                                    Construction Services</a></li>
                                            <li><a href="{{ url('/sealant') }}">Expansion Joint & Sealant Work</a>
                                            </li>
                                            <li><a href="{{ url('/epoxy') }}">Epoxy Grouting Work Services</a></li>

                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="{{ url('/blog') }}" class="nav-link dropdown-toggle"
                                            href="#" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Gallery
                                        </a>
                                        <ul class="dropdown-menu bg-light text-dark">
                                            <li><a href="{{ url('/images') }}">Images</a></li>
                                            <li><a href="{{ url('/videos') }}">Videos</a></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url('/contact') }}" class="nav-link text-left">Contact</a>
                                    </li>
                                </ul>
                                </ul>
                            </nav>


                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.nav-item.dropdown').hover(function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
            });
        });
    </script>
