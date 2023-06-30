
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/page-header-bg.jpg)"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo home_url();?>">Home</a></li>
                <li><span>/</span></li>
                <li><?php the_title();?></li>
            </ul>
            <!-- <h2><?php the_title();?></h2> -->
        </div>
    </div>
</section>
<section class="news-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="news-details__left">
                    
                    <div class="news-details__content">
                        
                        <h1 class="news-details__title"><?php the_title();?></h1>
                        <div class="news-details__text-1"><?php the_content();?></div>
                        
                    </div>
                    
                    
                    
                    
                </div>
            </div>
        
        </div>
    </div>
</section>


