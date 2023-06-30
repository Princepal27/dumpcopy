<?php get_header(); ?>

<section class="main-slider clearfix">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/main-slider-1-1.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">We are Producing Natural Products</p>
                                <h2 class="main-slider__title">Agriculture.</h2>
                                <div class="main-slider__btn-box">
                                    <a href="#" class="thm-btn main-slider__btn">Discover More <i
                                            class="icon-right-arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/main-slider-1-2.jpg);"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">We are Producing Natural Products</p>
                                <h2 class="main-slider__title">Agriculture.</h2>
                                <div class="main-slider__btn-box">
                                    <a href="#" class="thm-btn main-slider__btn">Discover More <i
                                            class="icon-right-arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/main-slider-1-3.jpg);"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">We are Producing Natural Products</p>
                                <h2 class="main-slider__title">Agriculture.</h2>
                                <div class="main-slider__btn-box">
                                    <a href="#" class="thm-btn main-slider__btn">Discover More <i
                                            class="icon-right-arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-pagination" id="main-slider-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-right-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow"></i>
            </div>
        </div>

    </div>
</section>

<section class="about-one">
            <div class="about-one-shape-1 float-bob-x">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/shapes/about-one-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Get to Know Agrion</span>
                                <h2 class="section-title__title">Agrion is the Agriculture and Organic farm</h2>
                                <div class="section-title__icon">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/section-title-icon-1.png" alt="">
                                </div>
                            </div>
                            <p class="about-one__text-1">We’ve 20 years of agriculture farming experience.</p>
                            <p class="about-one__text-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim dolore
                                veniam.</p>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>There are many variations of passage of lorem.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Available but the majority alteration.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-one__btn-and-ceo">
                                <div class="about-one__btn-box">
                                    <a href="" class="thm-btn about-one__btn">About More <i
                                            class="icon-right-arrow"></i> </a>
                                </div>
                                <div class="about-one__ceo">
                                    <div class="about-one__ceo-img">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/resources/about-one-ceo-img.jpg" alt="">
                                    </div>
                                    <div class="about-one__ceo-content">
                                        <h4 class="about-one__ceo-name">Mike Hardson</h4>
                                        <p class="about-one__ceo-title">CEO of Agrion</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="about-one__img-box wow slideInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img-one">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/resources/about-one-img-1.jpg" alt="">
                                </div>
                                <div class="about-one__img-two">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/resources/about-one-img-2.jpg" alt="">
                                </div>
                                <div class="about-one__video-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                        <div class="about-one__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="project-one">
            <div class="project-one__bg float-bob-y-2"
                style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/shapes/project-one-shape-1.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our Latest Projects</span>
                    <h2 class="section-title__title">Recently completed Projects</h2>
                    <div class="section-title__icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/section-title-icon-1.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/project/project-one-1.jpg" alt="">
                                </div>
                                <div class="project-one__arrow">
                                    <a href=""><i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="project-one__content">
                                    <span class="project-one__tagline">healthy</span>
                                    <h3 class="project-one__title"><a href="">organic
                                            <br> solutions</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/project/project-one-2.jpg" alt="">
                                </div>
                                <div class="project-one__arrow">
                                    <a href=""><i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="project-one__content">
                                    <span class="project-one__tagline">farming</span>
                                    <h3 class="project-one__title"><a href="">Harvest
                                            <br> Innovations</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
        
                  
                </div>
            </div>
        </section>


<?php get_footer();?>