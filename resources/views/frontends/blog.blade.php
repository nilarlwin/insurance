<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Litho – The Multipurpose HTML5 Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="Litho is a clean and modern design, BootStrap 5 responsive, business and portfolio multipurpose HTML5 template with 37+ ready homepage demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{ asset('assets/frontends/images/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('assets/frontends/images/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/frontends/images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/frontends/images/apple-touch-icon-114x114.png') }}">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontends/css/font-icons.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontends/css/theme-vendors.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontends/css/style.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontends/css/responsive.css') }}" />
    </head>
    <body data-mobile-nav-style="classic">
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent header-light fixed-top header-reverse-scroll">
                <div class="container-lg nav-header-container">
                    <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('assets/frontends/images/logo-fast-blue-black.png') }}" data-at2x="images/logo-fast-blue-black@2x.png" class="default-logo" alt="">
                            <img src="{{ asset('assets/frontends/images/logo-fast-blue-black.png') }}" data-at2x="images/logo-fast-blue-black@2x.png" class="alt-logo" alt="">
                            <img src="{{ asset('assets/frontends/images/logo-fast-blue-black.png') }}" data-at2x="images/logo-fast-blue-black@2x.png" class="mobile-logo" alt="">
                        </a>
                    </div>
                    <div class="col-auto col-lg-8 menu-order px-lg-0">
                        <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav alt-font">
                                <li class="nav-item dropdown megamenu">
                                    <a href="/" class="nav-link">Home</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- <div class="menu-back-div dropdown-menu megamenu-content" role="menu">
                                        <div class="d-lg-flex justify-content-center">
                                            <ul class="d-lg-inline-block">
                                                <li class="dropdown-header">Corporate</li>
                                                <li><a href="home-startup.html">Startup</a></li>
                                                <li><a href="home-business.html">Business</a></li>
                                                <li><a href="home-corporate.html">Corporate</a></li>
                                                <li><a href="home-finance.html">Finance</a></li>
                                                <li><a href="home-application.html">Application</a></li>
                                                <li><a href="home-consulting.html">Consulting</a></li>
                                                <li><a href="home-digital-agency.html">Digital agency</a></li>
                                                <li><a href="home-seo-agency.html">SEO agency</a></li>
                                                <li><a href="home-events-conference.html">Events & conference</a></li>
                                                <li><a href="home-marketing-agency.html">Marketing agency</a></li>
                                            </ul> -->
                                            <!-- <ul class="d-lg-inline-block">
                                                <li class="dropdown-header">Specialized</li>
                                                <li><a href="home-restaurant.html">Restaurant</a></li>
                                                <li><a href="home-architecture.html">Architecture</a></li>
                                                <li><a href="home-hotel-resort.html">Hotel & resort</a></li>
                                                <li><a href="home-travel-agency.html">Travel agency</a></li>
                                                <li><a href="home-yoga-meditation.html">Yoga & meditation</a></li>
                                                <li><a href="home-gym-fitness.html">Gym & fitness</a></li>
                                                <li><a href="home-spa-salon.html">Spa salon</a></li>
                                                <li><a href="home-cafe.html">Cafe</a></li>
                                                <li><a href="home-decor.html">Home decor</a></li>
                                                <li><a href="home-dentist.html">Dentist</a></li>
                                                <li><a href="home-interior-design.html">Interior design</a></li>
                                            </ul> -->
                                            <!-- <ul class="d-lg-inline-block">
                                                <li class="dropdown-header">Portfolio</li>
                                                <li><a href="home-design-agency.html">Design agency</a></li>
                                                <li><a href="home-web-agency.html">Web agency</a></li>
                                                <li><a href="home-creative-agency.html">Creative agency</a></li>
                                                <li><a href="home-freelancer.html">Freelancer</a></li>
                                                <li><a href="home-branding-agency.html">Branding agency</a></li>
                                                <li><a href="home-photography.html">Photography</a></li>
                                                <li><a href="home-personal-portfolio.html">Personal portfolio</a></li>
                                                <li><a href="home-vertical-portfolio.html">Vertical portfolio</a></li>
                                                <li><a href="home-interactive-portfolio.html">Interactive portfolio</a></li>
                                                <li><a href="home-split-portfolio.html">Split portfolio</a></li>
                                                <li><a href="home-creative-portfolio.html">Creative portfolio</a></li>
                                            </ul> -->
                                            <!-- <ul class="d-lg-inline-block">
                                                <li class="dropdown-header">Other</li>
                                                <li><a href="home-furniture-shop.html">Furniture shop</a></li>
                                                <li><a href="home-fashion-shop.html">Fashion shop</a></li>
                                                <li><a href="home-magazine.html">Magazine</a></li>
                                                <li><a href="home-lifestyle-blog.html">Lifestyle blog</a></li>
                                                <li><a href="home-classic-blog.html">Classic blog</a></li>
                                                <li><a href="home-blog-metro.html">Blog metro</a></li>
                                            </ul> -->
                                        <!-- </div>
                                    </div> -->
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{ route('services') }}" class="nav-link">Services</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">About<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about-me.html">About me</a></li>
                                                <li><a href="about-us.html">About us</a></li>
                                                <li><a href="our-story.html">Our story</a></li>
                                                <li><a href="who-we-are.html">Who we are</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Services<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="our-services.html">Our services</a></li>
                                                <li><a href="what-we-offers.html">What we offer</a></li>
                                                <li><a href="our-process.html">Our process</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Contact<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="contact-us-simple.html">Contact simple</a></li>
                                                <li><a href="contact-us-classic.html">Contact classic</a></li>
                                                <li><a href="contact-us-modern.html">Contact modern</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Additional pages<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="our-team.html">Our team</a></li>
                                                <li><a href="latest-news.html">Latest news</a></li>
                                                <li><a href="pricing-packages.html">Pricing packages</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                                <li><a href="maintenance.html">Maintenance</a></li>
                                                <li><a href="coming-soon.html">Coming soon</a></li>
                                                <li><a href="coming-soon-v2.html">Coming soon - V2</a></li>
                                                <li><a href="faq.html">FAQ's</a></li>
                                                <li><a href="search-result.html">Search result</a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{ route('blogs') }}" class="nav-link">Blogs</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Portfolio classic<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio-classic-two-column.html">Classic 2 column</a></li>
                                                <li><a href="portfolio-classic-three-column.html">Classic 3 column</a></li>
                                                <li><a href="portfolio-classic-four-column.html">Classic 4 column</a></li>
                                                <li><a href="portfolio-classic-masonry.html">Classic masonry</a></li>
                                                <li><a href="portfolio-classic-metro.html">Classic metro</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Portfolio boxed<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio-boxed-two-column.html">Boxed 2 column</a></li>
                                                <li><a href="portfolio-boxed-three-column.html">Boxed 3 column</a></li>
                                                <li><a href="portfolio-boxed-four-column.html">Boxed 4 column</a></li>
                                                <li><a href="portfolio-boxed-masonry.html">Boxed masonry</a></li>
                                                <li><a href="portfolio-boxed-metro.html">Boxed metro</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Portfolio colorful<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio-colorful-two-column.html">Colorful 2 column</a></li>
                                                <li><a href="portfolio-colorful-three-column.html">Colorful 3 column</a></li>
                                                <li><a href="portfolio-colorful-four-column.html">Colorful 4 column</a></li>
                                                <li><a href="portfolio-colorful-masonry.html">Colorful masonry</a></li>
                                                <li><a href="portfolio-colorful-metro.html">Colorful metro</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Portfolio bordered<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio-bordered-two-column.html">Bordered 2 column</a></li>
                                                <li><a href="portfolio-bordered-three-column.html">Bordered 3 column</a></li>
                                                <li><a href="portfolio-bordered-four-column.html">Bordered 4 column</a></li>
                                                <li><a href="portfolio-bordered-masonry.html">Bordered masonry</a></li>
                                                <li><a href="portfolio-bordered-metro.html">Bordered metro</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Portfolio overlay<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio-overlay-two-column.html">Overlay 2 column</a></li>
                                                <li><a href="portfolio-overlay-three-column.html">Overlay 3 column</a></li>
                                                <li><a href="portfolio-overlay-four-column.html">Overlay 4 column</a></li>
                                                <li><a href="portfolio-overlay-masonry.html">Overlay masonry</a></li>
                                                <li><a href="portfolio-overlay-metro.html">Overlay metro</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Portfolio switch image<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio-switch-image-two-column.html">Switch image 2 column</a></li>
                                                <li><a href="portfolio-switch-image-three-column.html">Switch image 3 column</a></li>
                                                <li><a href="portfolio-switch-image-four-column.html">Switch image 4 column</a></li>
                                                <li><a href="portfolio-switch-image-masonry.html">Switch image masonry</a></li>
                                                <li><a href="portfolio-switch-image-metro.html">Switch image metro</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Portfolio other<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio-scattered.html">Portfolio scattered</a></li>
                                                <li><a href="portfolio-justified-gallery.html">Justified gallery</a></li>
                                                <li><a href="portfolio-slider.html">Portfolio slider</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Single project page<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="single-project-page-01.html">Single project page 01</a></li>
                                                <li><a href="single-project-page-02.html">Single project page 02</a></li>
                                                <li><a href="single-project-page-03.html">Single project page 03</a></li>
                                                <li><a href="single-project-page-04.html">Single project page 04</a></li>
                                                <li><a href="single-project-page-05.html">Single project page 05</a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="nav-item dropdown megamenu">
                                    <a href="{{ route('about-us') }}" class="nav-link">About Us</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- <div class="menu-back-div dropdown-menu megamenu-content" role="menu">
                                        <div class="d-lg-flex justify-content-center">
                                            <ul class="d-lg-inline-block">
                                                <li class="dropdown-header">General</li>
                                                <li><a href="accordions.html"><i class="ti-layout-accordion-separated"></i>Accordions</a></li>
                                                <li><a href="buttons.html"><i class="ti-mouse"></i>Buttons</a></li>
                                                <li><a href="team.html"><i class="ti-user"></i>Team</a></li>
                                                <li><a href="team-carousel.html"><i class="ti-layout-slider-alt"></i>Team carousel</a></li>
                                                <li><a href="clients.html"><i class="ti-id-badge"></i>Clients</a></li>
                                                <li><a href="client-carousel.html"><i class="ti-layout-slider"></i>Client carousel</a></li>
                                                <li><a href="subscribe.html"><i class="ti-crown"></i>Subscribe</a></li>
                                                <li><a href="call-to-action.html"><i class="ti-eye"></i>Call to action</a></li>
                                                <li><a href="tab.html"><i class="ti-layout-tab"></i>Tab</a></li>
                                                <li><a href="google-map.html"><i class="ti-location-pin"></i>Google map</a></li>
                                                <li><a href="contact-form.html"><i class="ti-clipboard"></i>Contact form</a></li>
                                                <li><a href="image-gallery.html"><i class="ti-gallery"></i>Image gallery</a></li>
                                            </ul> -->
                                            <!-- <ul class="d-lg-inline-block">
                                                <li class="dropdown-header">Content & infographics</li>
                                                <li><a href="progress-bar.html"><i class="icon-hourglass"></i>Progress bar</a></li>
                                                <li><a href="icon-with-text.html"><i class="ti-layout-media-left"></i>Icon with text</a></li>
                                                <li><a href="overline-icon-box.html"><i class="ti-write"></i>Over line icon box</a></li>
                                                <li><a href="custom-icon-with-text.html"><i class="ti-vector"></i>Custom icon with text</a></li>
                                                <li><a href="counters.html"><i class="ti-timer"></i>Counters</a></li>
                                                <li><a href="countdown.html"><i class="ti-alarm-clock"></i>Countdown</a></li>
                                                <li><a href="pie-charts.html"><i class="ti-pie-chart"></i>Pie charts</a></li>
                                                <li><a href="fancy-text-box.html"><i class="ti-layout-cta-center"></i>Fancy text box</a></li>
                                                <li><a href="text-box.html"><i class="ti-layout-cta-left"></i>Text box</a></li>
                                                <li><a href="fancy-text.html"><i class="ti-text"></i>Fancy text</a></li>
                                            </ul> -->
                                            <!-- <ul class="d-lg-inline-block">
                                                <li class="dropdown-header">Interactive</li>
                                                <li><a href="testimonials.html"><i class="ti-thought"></i>Testimonials</a></li>
                                                <li><a href="testimonials-carousel.html"><i class="ti-comments"></i>Testimonials carousel</a></li>
                                                <li><a href="video.html"><i class="ti-video-camera"></i>Video</a></li>
                                                <li><a href="interactive-banners.html"><i class="ti-image"></i>Interactive banners</a></li>
                                                <li><a href="services.html"><i class="ti-bookmark-alt"></i>Services</a></li>
                                                <li><a href="info-banner.html"><i class="ti-layout-slider"></i>Info banner</a></li>
                                                <li><a href="rotate-box.html"><i class="ti-package"></i>Rotate box</a></li>
                                                <li><a href="process-step.html"><i class="ti-layers"></i>Process step</a></li>
                                                <li><a href="instagram.html"><i class="ti-instagram"></i>Instagram</a></li>
                                                <li><a href="parallax-scrolling.html"><i class="ti-exchange-vertical"></i>Parallax scrolling</a></li>
                                                <li><a href="text-slider.html"><i class="ti-layout-media-overlay"></i>Text slider</a></li>
                                            </ul> -->
                                            <!-- <ul class="d-lg-inline-block">
                                                <li class="dropdown-header">Text & containers</li>
                                                <li><a href="heading.html"><i class="ti-text"></i>Heading</a></li>
                                                <li><a href="dropcaps.html"><i class="ti-smallcap"></i>Drop caps</a></li>
                                                <li><a href="columns.html"><i class="ti-layout"></i>Columns</a></li>
                                                <li><a href="blockquote.html"><i class="ti-quote-left"></i>Blockquote</a></li>
                                                <li><a href="highlights.html"><i class="ti-underline"></i>Highlights</a></li>
                                                <li><a href="message-box.html"><i class="ti-layout-media-right-alt"></i>Message box</a></li>
                                                <li><a href="social-icons.html"><i class="ti-user"></i>Social icons</a></li>
                                                <li><a href="lists.html"><i class="ti-list"></i>Lists</a></li>
                                                <li><a href="seperators.html"><i class="ti-layout-line-solid"></i>Separators</a></li>
                                                <li><a href="pricing-table.html"><i class="ti-layout-column2"></i>Pricing table</a></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{ route('contact-us') }}" class="nav-link">Contact Us</a>
                                    <!-- <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Header and menu<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu"> -->
                                                <!-- -<li><a href="transparent-header.html">Transparent header</a></li>
                                                <li><a href="white-header.html">White header</a></li>
                                                <li><a href="dark-header.html">Dark header</a></li>
                                                <li><a href="header-with-top-bar.html">Header with top bar</a></li>
                                                <li><a href="header-with-push.html">Header with push</a></li>
                                                <li><a href="center-navigation.html">Center navigation</a></li>
                                                <li><a href="center-logo.html">Center logo</a></li>
                                                <li><a href="top-logo.html">Top logo</a></li>
                                                <li><a href="one-pagenavigation.html">One page navigation</a></li> -->
                                                <!-- <li class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="javascript:void(0);">Hamburger menu<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="hamburger-menu.html">Hamburger menu</a></li>
                                                        <li><a href="hamburger-menu-modern.html">Hamburger menu modern</a></li>
                                                        <li><a href="hamburger-menu-half.html">Hamburger menu half</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- <li class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="javascript:void(0);">Left menu<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="left-menu-classic.html">Left menu classic</a></li>
                                                        <li><a href="left-menu-modern.html">Left menu modern</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- <li class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="javascript:void(0);">Header type<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="header-always-fixed.html">Always fixed</a></li>
                                                        <li><a href="header-disable-fixed.html">Disable fixed</a></li>
                                                        <li><a href="header-reverse-scroll.html">Reverse scroll</a></li>
                                                        <li><a href="header-responsive-sticky.html">Responsive sticky</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- <li class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="javascript:void(0);">Mobile menu<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="mobile-menu-classic.html">Classic</a></li>
                                                        <li><a href="mobile-menu-modern.html">Modern</a></li>
                                                        <li><a href="mobile-menu-full-screen.html">Full screen</a></li>
                                                    </ul>
                                                </li> -->
                                            <!-- </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Footer<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="footer-style-01.html">Footer style 01</a></li>
                                                <li><a href="footer-style-02.html">Footer style 02</a></li>
                                                <li><a href="footer-style-03.html">Footer style 03</a></li>
                                                <li><a href="footer-style-04.html">Footer style 04</a></li>
                                                <li><a href="footer-style-05.html">Footer style 05</a></li>
                                                <li><a href="footer-style-06.html">Footer style 06</a></li>
                                                <li><a href="footer-style-07.html">Footer style 07</a></li>
                                                <li><a href="footer-style-08.html">Footer style 08</a></li>
                                                <li><a href="footer-style-09.html">Footer style 09</a></li>
                                                <li><a href="footer-style-10.html">Footer style 10</a></li>
                                                <li><a href="footer-style-11.html">Footer style 11</a></li>
                                                <li><a href="footer-style-12.html">Footer style 12</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Page title<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="page-title-left-alignment.html">Left alignment</a></li>
                                                <li><a href="page-title-right-alignment.html">Right alignment</a></li>
                                                <li><a href="page-title-center-alignment.html">Center alignment</a></li>
                                                <li><a href="page-title-colorful-style.html">Colorful style</a></li>
                                                <li><a href="page-title-big-typography.html">Big typography</a></li>
                                                <li><a href="page-title-parallax-background.html">Parallax background</a></li>
                                                <li><a href="page-title-separate-breadcrumbs.html">Separate breadcrumbs</a></li>
                                                <li><a href="page-title-gallery-background.html">Gallery background</a></li>
                                                <li><a href="page-title-background-video.html">Background video</a></li>
                                                <li><a href="page-title-mini-version.html">Mini version</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Modal popup<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="modal-simple.html">Simple modal</a></li>
                                                <li><a href="modal-subscription.html">Subscription</a></li>
                                                <li><a href="modal-contact-form.html">Contact form</a></li>
                                                <li><a href="modal-youtube-video.html">Youtube video</a></li>
                                                <li><a href="modal-vimeo-video.html">Vimeo video</a></li>
                                                <li><a href="modal-google-map.html">Google map</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Icon packs<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="icon-packs-icons-mind-line.html">Icons mind line</a></li>
                                                <li><a href="icon-packs-icons-mind-solid.html">Icons mind solid</a></li>
                                                <li><a href="icon-packs-feather.html">Feather</a></li>
                                                <li><a href="icon-packs-font-awesome.html">Font awesome</a></li>
                                                <li><a href="icon-packs-et-line.html">ET line</a></li>
                                                <li><a href="icon-packs-themify.html">Themify</a></li>
                                                <li><a href="icon-packs-simple-line.html">Simple line</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="animations.html">Animations</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <!-- <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link">Blog</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown"><a href="blog-grid.html">Blog grid</a></li>
                                        <li class="dropdown"><a href="blog-masonry.html">Blog masonry</a></li>
                                        <li class="dropdown"><a href="blog-classic.html">Blog classic</a></li>
                                        <li class="dropdown"><a href="blog-simple.html">Blog simple</a></li>
                                        <li class="dropdown"><a href="blog-side-image.html">Blog side image</a></li>
                                        <li class="dropdown"><a href="blog-metro.html">Blog metro</a></li>
                                        <li class="dropdown"><a href="blog-overlay-image.html">Blog overlay image</a></li>
                                        <li class="dropdown"><a href="blog-modern.html">Blog modern</a></li>
                                        <li class="dropdown"><a href="blog-clean.html">Blog clean</a></li>
                                        <li class="dropdown"><a href="blog-widget.html">Blog widget</a></li>
                                        <li class="dropdown"><a href="blog-standard.html">Blog standard</a></li>
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Post layout<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-post-layout-01.html">Blog post layout 01</a></li>
                                                <li><a href="blog-post-layout-02.html">Blog post layout 02</a></li>
                                                <li><a href="blog-post-layout-03.html">Blog post layout 03</a></li>
                                                <li><a href="blog-post-layout-04.html">Blog post layout 04</a></li>
                                                <li><a href="blog-post-layout-05.html">Blog post layout 05</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Post types<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-standard-post.html">Standard post</a></li>
                                                <li><a href="blog-gallery-post.html">Gallery post</a></li>
                                                <li><a href="blog-slider-post.html">Slider post</a></li>
                                                <li><a href="blog-html5-video-post.html">HTML5 video post</a></li>
                                                <li><a href="blog-youtube-video-post.html">Youtube video post</a></li>
                                                <li><a href="blog-vimeo-video-post.html">Vimeo video post</a></li>
                                                <li><a href="blog-audio-post.html">Audio post</a></li>
                                                <li><a href="blog-blockquote-post.html">Blockquote post</a></li>
                                                <li><a href="blog-full-width-post.html">Full width post</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                <!-- <li class="nav-item dropdown megamenu">
                                    <a href="javascript:void(0);" class="nav-link">Shop</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <div class="menu-back-div dropdown-menu megamenu-content" role="menu">
                                        <div class="d-lg-flex justify-content-center">
                                            <ul class="d-lg-inline-block md-margin-15px-bottom">
                                                <li class="dropdown-header">Shop layout</li>
                                                <li><a href="shop-wide.html">Shop wide</a></li>
                                                <li><a href="shop-left-sidebar.html">Left sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Right sidebar</a></li>
                                                <li><a href="shop-only-categories.html">Only categories</a></li>
                                                <li><a href="single-product.html">Single product</a></li>
                                                <li class="dropdown-header">Utility pages</li>
                                                <li><a href="shopping-cart.html">Shopping cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="login-register.html">Login / Register</a></li>
                                            </ul>
                                            <ul class="d-lg-inline-block d-none small-gap">
                                                <li>
                                                    <a href="index.html" class="menu-banner-image"><img src="{{ asset('assets/frontends/images/menu-banner-01.jpg') }}" alt=""/></a>
                                                </li>
                                            </ul>
                                            <ul class="d-lg-inline-block d-none no-padding-right">
                                                <li>
                                                    <a href="index.html" class="menu-banner-image"><img src="{{ asset('assets/frontends/images/menu-banner-02.jpg') }}" alt=""/></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-lg-2 text-end pe-0 font-size-0">
                        <div class="header-search-icon search-form-wrapper">
                            <a href="javascript:void(0)" class="search-form-icon header-search-form"><i class="feather icon-feather-search"></i></a>
                            <!-- start search input -->
                            <div class="form-wrapper">
                                <button title="Close" type="button" class="search-close alt-font">×</button>
                                <form id="search-form" role="search" method="get" class="search-form text-start" action="search-result.html">
                                    <div class="search-form-box">
                                        <span class="search-label alt-font text-small text-uppercase text-medium-gray">What are you looking for?</span>
                                        <input class="search-input alt-font" id="search-form-input5e219ef164995" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off">
                                        <button type="submit" class="search-button">
                                            <i class="feather icon-feather-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end search input -->
                        </div>
                        <div class="header-language dropdown d-lg-inline-block">
                            <a href="javascript:void(0);"><i class="feather icon-feather-globe"></i></a>
                            <ul class="dropdown-menu alt-font">
                                <li><a href="javascript:void(0);" title="English"><span class="icon-country"><img src="images/country-flag-16X16/usa.png" alt=""></span>English</a></li>
                                <li><a href="javascript:void(0);" title="England"><span class="icon-country"><img src="images/country-flag-16X16/england.png" alt=""></span>England</a></li>
                                <li><a href="javascript:void(0);" title="France"><span class="icon-country"><img src="images/country-flag-16X16/france.png" alt=""></span>France</a></li>
                                <li><a href="javascript:void(0);" title="Russian"><span class="icon-country"><img src="images/country-flag-16X16/russian.png" alt=""></span>Russian</a></li>
                                <li><a href="javascript:void(0);" title="Spain"><span class="icon-country"><img src="images/country-flag-16X16/spain.png" alt=""></span>Spain</a></li>
                            </ul>
                        </div>
                        <div class="header-cart-icon dropdown">
                            <a href="javascript:void(0);"><i class="feather icon-feather-shopping-bag"></i><span class="cart-count alt-font bg-fast-blue text-white">2</span></a>
                            <ul class="dropdown-menu cart-item-list">
                                <li class="cart-item align-items-center">
                                    <a href="javascript:void(0);" class="alt-font close">×</a>
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="https://via.placeholder.com/150x191" class="cart-thumb" alt="" /></a>
                                    </div>
                                    <div class="product-detail alt-font">
                                        <a href="single-product.html">Delica Omtantur</a>
                                        <span class="item-ammount">$100.00</span> 
                                    </div>
                                </li>
                                <li class="cart-item align-items-center">
                                    <a href="javascript:void(0);" class="alt-font close">×</a>
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="https://via.placeholder.com/150x191" class="cart-thumb" alt="" /></a>
                                    </div>
                                    <div class="product-detail alt-font">
                                        <a href="single-product.html">Gianvito Rossi</a>
                                        <span class="item-ammount">$99.99</span> 
                                    </div>
                                </li>
                                <li class="cart-item cart-total">
                                    <div class="alt-font margin-15px-bottom"><span class="w-50 d-inline-block text-medium text-uppercase">Subtotal:</span><span class="w-50 d-inline-block text-end text-medium font-weight-500">$199.99</span></div>
                                    <a href="shopping-cart.html" class="btn btn-small btn-dark-gray">view cart</a>
                                    <a href="checkout.html" class="btn btn-small btn-fast-blue">checkout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
        <!-- start page title -->
        <section class="half-section bg-light-gray parallax" data-parallax-background-ratio="0.5" style="background-image:url('images/portfolio-bg2.jpg');">
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h1 class="alt-font text-gradient-sky-blue-pink margin-15px-bottom d-inline-block">Blog modern layout</h1>
                        <h2 class="text-extra-dark-gray alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Attractive articles updated daily</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section --> 
        <section class="bg-light-gray padding-nine-lr pt-0 xl-no-padding-lr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 blog-content xs-no-padding-lr">
                        <ul class="blog-modern blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple">
                                        <a href="blog-post-layout-01.html"><img src="https://via.placeholder.com/800x1010" alt=""></a>
                                    </div>
                                    <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">
                                        <a href="blog-grid.html" class="blog-category text-fast-blue margin-15px-bottom text-medium font-weight-500 letter-spacing-1px text-uppercase">Lifestyle</a>
                                        <a href="blog-post-layout-01.html" class="alt-font text-extra-dark-gray text-extra-dark-gray-hover text-large line-height-26px d-block margin-20px-bottom">How to build branded photography studios</a>
                                        <a href="blog-grid.html" class="alt-font text-uppercase text-extra-small letter-spacing-1px d-block">18 May 2020</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="blog-post">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple">
                                        <a href="blog-post-layout-02.html"><img src="https://via.placeholder.com/800x1010" alt=""></a>
                                    </div>
                                    <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">
                                        <a href="blog-grid.html" class="blog-category text-fast-blue margin-15px-bottom text-medium font-weight-500 letter-spacing-1px text-uppercase">Fashion</a>
                                        <a href="blog-post-layout-02.html" class="alt-font text-extra-dark-gray text-extra-dark-gray-hover text-large line-height-26px d-block margin-20px-bottom">Many things difficult to design prove easy</a>
                                        <a href="blog-grid.html" class="alt-font text-uppercase text-extra-small letter-spacing-1px d-block">30 April 2020</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="blog-post">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple">
                                        <a href="blog-post-layout-03.html"><img src="https://via.placeholder.com/800x1010" alt=""></a>
                                    </div>
                                    <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">
                                        <a href="blog-grid.html" class="blog-category text-fast-blue margin-15px-bottom text-medium font-weight-500 letter-spacing-1px text-uppercase">Creative</a>
                                        <a href="blog-post-layout-03.html" class="alt-font text-extra-dark-gray text-extra-dark-gray-hover text-large line-height-26px d-block margin-20px-bottom">The proper study of the science of design</a>
                                        <a href="blog-grid.html" class="alt-font text-uppercase text-extra-small letter-spacing-1px d-block">23 March 2020</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="blog-post">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple">
                                        <a href="blog-post-layout-04.html"><img src="https://via.placeholder.com/800x1010" alt=""></a>
                                    </div>
                                    <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">
                                        <a href="blog-grid.html" class="blog-category text-fast-blue margin-15px-bottom text-medium font-weight-500 letter-spacing-1px text-uppercase">Modern</a>
                                        <a href="blog-post-layout-04.html" class="alt-font text-extra-dark-gray text-extra-dark-gray-hover text-large line-height-26px d-block margin-20px-bottom">Creativity is nothing but a mind set free</a>
                                        <a href="blog-grid.html" class="alt-font text-uppercase text-extra-small letter-spacing-1px d-block">15 February 2020</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple">
                                        <a href="blog-post-layout-05.html"><img src="https://via.placeholder.com/800x1010" alt=""></a>
                                    </div>
                                    <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">
                                        <a href="blog-grid.html" class="blog-category text-fast-blue margin-15px-bottom text-medium font-weight-500 letter-spacing-1px text-uppercase">Corporate</a>
                                        <a href="blog-post-layout-05.html" class="alt-font text-extra-dark-gray text-extra-dark-gray-hover text-large line-height-26px d-block margin-20px-bottom">Leave it better than you more found it</a>
                                        <a href="blog-grid.html" class="alt-font text-uppercase text-extra-small letter-spacing-1px d-block">05 January 2020</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="blog-post">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple">
                                        <a href="blog-post-layout-01.html"><img src="https://via.placeholder.com/800x1010" alt=""></a>
                                    </div>
                                    <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">
                                        <a href="blog-grid.html" class="blog-category text-fast-blue margin-15px-bottom text-medium font-weight-500 letter-spacing-1px text-uppercase">Finance</a>
                                        <a href="blog-post-layout-01.html" class="alt-font text-extra-dark-gray text-extra-dark-gray-hover text-large line-height-26px d-block margin-20px-bottom">Do one thing a every day that scares you</a>
                                        <a href="blog-grid.html" class="alt-font text-uppercase text-extra-small letter-spacing-1px d-block">24 December 2019</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="blog-post">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple">
                                        <a href="blog-post-layout-02.html"><img src="https://via.placeholder.com/800x1010" alt=""></a>
                                    </div>
                                    <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">
                                        <a href="blog-grid.html" class="blog-category text-fast-blue margin-15px-bottom text-medium font-weight-500 letter-spacing-1px text-uppercase">Business</a>
                                        <a href="blog-post-layout-02.html" class="alt-font text-extra-dark-gray text-extra-dark-gray-hover text-large line-height-26px d-block margin-20px-bottom">A company is only as good as the people</a>
                                        <a href="blog-grid.html" class="alt-font text-uppercase text-extra-small letter-spacing-1px d-block">16 November 2019</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="blog-post">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple">
                                        <a href="blog-post-layout-03.html"><img src="https://via.placeholder.com/800x1010" alt=""></a>
                                    </div>
                                    <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">
                                        <a href="blog-grid.html" class="blog-category text-fast-blue margin-15px-bottom text-medium font-weight-500 letter-spacing-1px text-uppercase">Concept</a>
                                        <a href="blog-post-layout-03.html" class="alt-font text-extra-dark-gray text-extra-dark-gray-hover text-large line-height-26px d-block margin-20px-bottom">Do not seek praise. Seek the criticism</a>
                                        <a href="blog-grid.html" class="alt-font text-uppercase text-extra-small letter-spacing-1px d-block">22 October 2019</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple">
                                        <a href="blog-post-layout-04.html"><img src="https://via.placeholder.com/800x1010" alt=""></a>
                                    </div>
                                    <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">
                                        <a href="blog-grid.html" class="blog-category text-fast-blue margin-15px-bottom text-medium font-weight-500 letter-spacing-1px text-uppercase">Furniture</a>
                                        <a href="blog-post-layout-04.html" class="alt-font text-extra-dark-gray text-extra-dark-gray-hover text-large line-height-26px d-block margin-20px-bottom">If you do it right, it will the last forever</a>
                                        <a href="blog-grid.html" class="alt-font text-uppercase text-extra-small letter-spacing-1px d-block">08 September 2019</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="blog-post">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple">
                                        <a href="blog-post-layout-05.html"><img src="https://via.placeholder.com/800x1010" alt=""></a>
                                    </div>
                                    <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">
                                        <a href="blog-grid.html" class="blog-category text-fast-blue margin-15px-bottom text-medium font-weight-500 letter-spacing-1px text-uppercase">Lifestyle</a>
                                        <a href="blog-post-layout-05.html" class="alt-font text-extra-dark-gray text-extra-dark-gray-hover text-large line-height-26px d-block margin-20px-bottom">Judgment are the an qualities of leader</a>
                                        <a href="blog-grid.html" class="alt-font text-uppercase text-extra-small letter-spacing-1px d-block">18 April 2019</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="blog-post">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple">
                                        <a href="blog-post-layout-01.html"><img src="https://via.placeholder.com/800x1010" alt=""></a>
                                    </div>
                                    <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">
                                        <a href="blog-grid.html" class="blog-category text-fast-blue margin-15px-bottom text-medium font-weight-500 letter-spacing-1px text-uppercase">Digital</a>
                                        <a href="blog-post-layout-01.html" class="alt-font text-extra-dark-gray text-extra-dark-gray-hover text-large line-height-26px d-block margin-20px-bottom">Simplicity, cognition, and good typography</a>
                                        <a href="blog-grid.html" class="alt-font text-uppercase text-extra-small letter-spacing-1px d-block">29 August 2019</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="blog-post">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple">
                                        <a href="blog-post-layout-02.html"><img src="https://via.placeholder.com/800x1010" alt=""></a>
                                    </div>
                                    <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">
                                        <a href="blog-grid.html" class="blog-category text-fast-blue margin-15px-bottom text-medium font-weight-500 letter-spacing-1px text-uppercase">Creative</a>
                                        <a href="blog-post-layout-02.html" class="alt-font text-extra-dark-gray text-extra-dark-gray-hover text-large line-height-26px d-block margin-20px-bottom">Everything should be made as simple</a>
                                        <a href="blog-grid.html" class="alt-font text-uppercase text-extra-small letter-spacing-1px d-block">26 June 2019</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                        </ul>
                        <!-- start pagination -->
                        <div class="col-12 d-flex justify-content-center margin-7-half-rem-top lg-margin-5-rem-top wow animate__fadeIn">
                            <ul class="pagination pagination-style-01 text-small font-weight-500 align-items-center">
                                <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left icon-extra-small d-xs-none"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">01</a></li>
                                <li class="page-item active"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#">04</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right icon-extra-small  d-xs-none"></i></a></li>
                            </ul>
                        </div>
                        <!-- end pagination -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->  
        <!-- start footer -->
        <footer class="footer-dark bg-slate-blue">
            <div class="footer-top padding-five-tb lg-padding-eight-tb md-padding-50px-tb">
                <div class="container">
                    <div class="row">
                        <!-- start footer column -->
                        <div class="col-12 col-lg-3 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Company</span>
                            <ul>
                                <li><a href="about-us.html">About company</a></li>
                                <li><a href="our-services.html">Company services</a></li>
                                <li><a href="our-team.html">Job opportunities</a></li>
                                <li><a href="contact-us-classic.html">Contact us</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-3 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Customer</span>
                            <ul>                           
                                <li><a href="faq.html">Client support</a></li>
                                <li><a href="pricing-packages.html">Pricing packages</a></li>
                                <li><a href="our-story.html">Company history</a></li>
                                <li><a href="our-process.html">Our process</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-3 col-sm-6 xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Get in touch</span>
                            <p class="w-85 margin-15px-bottom">27 Eden walk eden centre, Orchard view, Paris, France</p>
                            <div><i class="feather icon-feather-phone-call icon-very-small margin-10px-right text-white"></i>+1 234 567 8910</div>
                            <div><i class="feather icon-feather-mail icon-very-small margin-10px-right text-white"></i><a href="#">info@yourdomain.com</a></div>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-3 col-sm-6">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom">Follow us on Instagram</span>
                            <div class="w-100 d-inline-block margin-10px-top">
                                <ul class="instafeed-grid instafeed-wrapper grid grid-3col xl-grid-3col lg-grid-3col md-grid-3col sm-grid-3col xs-grid-3col gutter-small" data-total="3">
                                    <li class="grid-item"><figure><a href="#" data-href="" target="_blank"><img src="#" data-src="" class="insta-image" alt="" /><span class="insta-counts"><i class="fab fa-instagram"></i></span></a></figure></li>
                                </ul>
                                <a class="alt-font text-extra-small text-uppercase font-weight-500 margin-20px-top d-inline-block" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram icon-extra-small align-middle margin-10px-right text-gradient-light-purple-light-orange"></i><span class="d-inline-block align-middle">Follow instagram</span></a>
                            </div>
                        </div>
                        <!-- end footer column -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom padding-40px-tb border-top border-color-white-transparent">
                <div class="container"> 
                    <div class="row align-items-center">
                        <div class="col-12 col-md-3 text-center text-md-start sm-margin-20px-bottom">
                            <a href="index.html" class="footer-logo"><img src="images/logo-white.png" data-at2x="images/logo-white@2x.png" alt=""></a>
                        </div>
                        <div class="col-12 col-md-6 text-center last-paragraph-no-margin sm-margin-20px-bottom">
                            <p>&copy; 2021 Litho is Proudly Powered by <a href="https://www.themezaa.com/" target="_blank">ThemeZaa</a></p>
                        </div>
                        <div class="col-12 col-md-3 text-center text-md-end">
                            <div class="social-icon-style-12">
                                <ul class="extra-small-icon light">
                                    <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="{{ asset('assets/frontends/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/frontends/js/theme-vendors.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/frontends/js/main.js') }}"></script>
    </body>
</html>