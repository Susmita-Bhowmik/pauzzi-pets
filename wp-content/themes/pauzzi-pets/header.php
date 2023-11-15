<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Pauzzi Pets</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/fav-icon.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!--  -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Jquery UI -->
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery-ui-1.9.2.custom.min.css"> -->
    <!-- Main Css -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css">
	<?php wp_head(); ?>
</head>

<body>
<header class="main_header">
        <div class="top">
            <div class="contact_info">
                <ul>
                    <li>
                        <span><img src="<?php bloginfo('template_url'); ?>/img/icon-phone.png" alt=""></span>
                        <a href="tel: <?php  dynamic_sidebar('contact_phone'); ?>"><?php  dynamic_sidebar('contact_phone'); ?></a>
                    </li>
                    <li>
                        <span><img src="<?php bloginfo('template_url'); ?>/img/icon-email.png" alt=""></span>
                        <a href="mailto: <?php  dynamic_sidebar('contact_email'); ?>"><?php  dynamic_sidebar('contact_email'); ?></a>
                    </li>
                </ul>
            </div>
            <div class="social_media">
                <ul>
                    <li>
                    <a href="<?php  dynamic_sidebar('social_facebook'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/icon-facebook.png" alt=""></a>
                    </li>
                    <li>
                        <a href="<?php  dynamic_sidebar('social_insta'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/icon-instagram.png" alt=""></a>
                    </li>
                    <li>
                        <a href="<?php  dynamic_sidebar('social_twitter'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/icon-twitter.png" alt=""></a>
                    </li>
                    <li><a href="<?php  dynamic_sidebar('social_linkedin'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/icon-linkedin.png" alt=""></a></li>
                    <li><a href="<?php  dynamic_sidebar('social_pinterest'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/icon-pinterest.png" alt=""></a></li>
                    <li><a href="<?php  dynamic_sidebar('social_youtube'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/icon-youtube.png" alt=""></a></li>
                </ul>
            </div>
        </div>
        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="logo">
                            <a href="<?php echo home_url(); ?>">
                              <?php 
  
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                if ( has_custom_logo() ) {
                                    echo '<img  src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                } else {
                                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                                }
                                
                                ?></a>
                        </div>
                    </div>
                    <div class="col-md-10"> 
                        <div class="nav_main_wapper">
                            <div class="nav_list">
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu') );?>
                            </div>
                            <div class="top_search_div">
                                <span class="top_search_btn"><img src="<?php bloginfo('template_url'); ?>/img/icon-search.png" alt=""></span>
                                <div class="main_wapper_header" style="display: none;">
                                    <div class="form_wapper">
                                    <form action="" id="search_form" method="post">
                                            <div class="form_group">
                                                <input type="text" id="upper-search" value="" name="product_name" placeholder="Search...">
                                                <button type="submit" name="submit" id="submit" class="a_btn">submit</button>
                                            </div>
                                        </form>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="cart_div">
                                <a href="<?php echo site_url('/cart'); ?>">
                                <div class="cart-count">
                                       <?php
                                        global $woocommerce;
                                        echo $count = $woocommerce->cart->cart_contents_count;
                                        ?>  
                                </div> 
                                <img src="<?php bloginfo('template_url'); ?>/img/icon-cart.png" alt=""></a>
                            </div>
                            <div class="login_sec_top">
                                <span><img src="<?php bloginfo('template_url'); ?>/img/icon-user.png" alt=""></span>
                                <ul class="login_ul">
                                <?php  if (!is_user_logged_in()) { ?>
                                        <li><a id="open-popup" href="<?php echo site_url('register'); ?>">Sign Up</a></li>
                                        <?php } ?>
                                       <?php  if (!is_user_logged_in()) { ?>
                                        <li>
                                            <?php   $login_page_url = get_permalink( get_option('woocommerce_myaccount_page_id') );?>
                                            <a href="<?php echo  esc_url( $login_page_url );  ?>">Login</a>
                                        </li>
                                        <?php } ?>
                                         <?php  if (is_user_logged_in()) { ?>
                                        
                                        <li>
                                            <?php  $my_account_url = get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>
                                            <a href="<?php echo esc_url( wp_logout_url( $my_account_url ) ) ; ?>">Log Out</a>
                                        </li>
                                         <?php } ?>
                                         <?php  if (is_user_logged_in()) { ?>
                                        <li>
                                            <?php  $my_account_url = get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>
                                            <a href="<?php echo esc_url( $my_account_url );  ?>">My Account</a>
                                        </li>
                                         <?php } ?>
                                         
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <?php if(is_shop() || is_cart() || is_checkout() || is_account_page()){?>
          <!-- About-banner -->
    <section class="about-page-banner" style="background-image: url(<?php bloginfo('template_url'); ?>/img/banner-02.jpg)">
        <div class="banner-text">
            <div class="container">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </section>
    <!-- About-banner -->
  <?php  } ?>


