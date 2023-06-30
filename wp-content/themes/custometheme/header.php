<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from layerdrops.com/agrionhtml/main-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Jun 2023 04:47:00 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Agrion HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/agrion-icons/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/agrion.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/agrion-responsive.css" />
    <?php wp_head();?>
</head>
<body class="custom-cursor">
    <!-- <div class="custom-cursor__cursor"></div>

    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div> -->
    <!-- /.preloader -->

    <div class="page-wrapper">
        <header class="main-header">
            <div class="main-header__wrapper">
                <div class="main-header__wrapper-inner">
                    <div class="main-header__logo">
                        <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/resources/logo-1.png" alt=""></a>
                    </div>
                    <div class="main-header__menu-box">
                        <div class="main-header__menu-box-top">
                            <ul class="list-unstyled main-header__contact-list">
                                <li>
                                    <div class="icon">
                                        <i class="icon-email"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-pin"></i>
                                    </div>
                                    <div class="text">
                                        <p>80 Broklyn Golden Street USA</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="main-header__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="main-header__menu-box-bottom">
                            <nav class="main-menu">
                                <div class="main-menu__wrapper">
                                    <div class="main-menu__wrapper-inner">
                                        <div class="main-menu__left">
                                            <div class="main-menu__main-menu-box">
                                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                                <ul class="main-menu__list">
                                                    <li class="dropdown current megamenu">
                                                        <a href="<?php echo home_url();?>">Home </a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="<?php echo home_url();?>">Locations</a>
                                                        <ul>
                                                        <?php 
                                                            $args = array( 'post_type' => 'page', 'post_parent'    => 0,'meta_query'     => array(
                                                                    'relation' => 'AND',
                                                                    array(
                                                                        'key'     => 'state',
                                                                        // 'compare' => 'EXISTS',
                                                                    ),
                                                                ), 'meta_key'=> 'state','orderby'=> 'meta_value','posts_per_page' => 100, 'order'=> 'ASC');
                                                            
                                                            $parent = new WP_Query( $args );
                                                            while ( $parent->have_posts() ) : $parent->the_post();
                                                        ?>
                                                        <li> <a title="<?php the_title();?>" href="<?php the_permalink();?>"><?php the_field('state');?></a> </li>
                                                            <?php endwhile; wp_reset_postdata();?>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo home_url('about-us');?>">About</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo home_url('contact-us');?>">Contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- <div class="main-menu__right">
                                            <div class="main-menu__search-cart-btn-box">
                                                <div class="main-menu__search-box">
                                                    <a href="#"
                                                        class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                                </div>
                                                <div class="main-menu__cart-box">
                                                    <a href="cart.html" class="main-menu__cart icon-shopping-cart"></a>
                                                </div>
                                                <div class="main-menu__btn-box">
                                                    <a href="contact.html" class="thm-btn main-menu__btn">Get Free Quote
                                                        <i class="icon-right-arrow"></i> </a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="main-header__phone-contact-box">
                        <div class="main-header__phone-number">
                            <a href="tel:9200886823">+92 (0088) 6823</a>
                        </div>
                        <div class="main-header__call-box">
                            <div class="main-header__call-inner">
                                <div class="main-header__call-icon">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->