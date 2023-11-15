<?php 

/** Template Name: General */



get_header();

?>
    <!-- About-banner -->
    <section class="about-page-banner" style="background-image: url(<?php bloginfo('template_url'); ?>/img/banner-02.jpg)">
        <div class="banner-text">
            <div class="container">
                <h2><?php the_title() ; ?></h2>
            </div>
        </div>
    </section>
    <!-- About-banner -->
    <!-- About-text -->
    <section class="welcome-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p><?php the_content() ; ?></p>
                   
                
            </div>
        </div>
    </section>
    <!-- About-text -->s
<?php get_footer(); ?>