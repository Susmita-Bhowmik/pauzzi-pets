<?php 

/** Template Name: Home */



get_header();

?>

 <!-- Banner -->
 <section class="main_banner">
        <div class="main_banner_slider">
        <?php
        if( have_rows('banner_slider') ):
        while( have_rows('banner_slider') ) : the_row(); ?>

             <div class="elements">
                <div class="banner_wapper">
                    <figure style="background-image: url(<?php the_sub_field('banner_image'); ?>);"></figure>
                    <div class="banner_text_main">
                        <div class="text_wapper text-end">
                            <span class="top_heading"><?php the_sub_field('banner_subtitle'); ?></span>
                            <h1><?php the_sub_field('banner_title'); ?></h1>
                            <p><?php the_sub_field('banner_content'); ?></p>
                            <a href="<?php echo site_url('/shop') ; ?>" class="a_btn">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            endwhile;
            endif;
        ?>
           
           
        </div>
    </section>
    <!-- Banner -->

    <!-- product shop -->
    <section class="product_shop_main">
        <div class="container-fluid">
            <div class="row">
            <?php
            if( have_rows('product_shop_box') ):
            while( have_rows('product_shop_box') ) : the_row(); ?>

                <div class="col-md-4">
                    <div class="product_shop_box">
                        <figure style="background-image: url(<?php the_sub_field('product_shop_image'); ?>);"></figure>
                        <div class="text">
                            <h3><span><?php the_sub_field('product_shop_title'); ?></h3>
                            <a href="<?php echo site_url('/shop') ; ?>" class="a_btn">Shop Now</a>
                        </div>
                    </div>
                </div>

            <?php
                endwhile;
                endif;
            ?>
             
            </div>
        </div>
    </section>
    <!-- product shop -->

    <!-- Bestsellers -->
    <section class="bestsellers_main">
        <div class="container">
            <h2>Bestsellers</h2>
            <div class="main_tab_wapper text-center">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Dogs</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Cats</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Fish</button>
                    <button class="nav-link" id="nav-small-pets-tab" data-bs-toggle="tab" data-bs-target="#nav-small-pets" type="button" role="tab" aria-controls="nav-small-pets" aria-selected="false">Small Pets</button>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">

                    <?php

                    $args = array( 'post_type' => 'product', 'posts_per_page' => 6, 'product_cat' =>  'dogs', 'order' => 'DESC' );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    global $product;
                    $product_price = $product->get_price();
                    ?>

                    <div class="col-md-4">
                        <div class="product_box_main">
                            <a href="<?php the_permalink() ; ?>"><figure style="background-image: url(<?php echo $product_image[0] ;?>);"></figure></a>
                            <div class="text">
                                <h3><a href="<?php the_permalink() ; ?>"><?php the_title() ; ?></a></h3>
                                <span class="price_tag"><?php echo  $product->get_price_html(); ?></span>
                            </div>
                            <div class="cart_box">
                            <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                                <!-- <a href="" class="cart_icon"><img src="<?php bloginfo('template_url'); ?>/img/icon-cart-h.png" alt=""></a> -->
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row">

                        <?php

                        $args = array( 'post_type' => 'product', 'posts_per_page' => 6, 'product_cat' =>  'cats', 'order' => 'DESC' );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                        $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                        global $product;
                        $product_price = $product->get_price();
                        ?>

                        <div class="col-md-4">
                            <div class="product_box_main">
                                <a href="<?php the_permalink() ; ?>"><figure style="background-image: url(<?php echo $product_image[0] ;?>);"></figure></a>
                                <div class="text">
                                    <h3><a href="<?php the_permalink() ; ?>"><?php the_title() ; ?></a></h3>
                                    <span class="price_tag"><?php echo  $product->get_price_html(); ?></span>
                                </div>
                                <div class="cart_box">
                                <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                                    <!-- <a href="" class="cart_icon"><img src="<?php bloginfo('template_url'); ?>/img/icon-cart-h.png" alt=""></a> -->
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>

                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row">

                    <?php

                    $args = array( 'post_type' => 'product', 'posts_per_page' => 6, 'product_cat' =>  'fish', 'order' => 'DESC' );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    global $product;
                    $product_price = $product->get_price();
                    ?>

                    <div class="col-md-4">
                        <div class="product_box_main">
                            <a href="<?php the_permalink() ; ?>"><figure style="background-image: url(<?php echo $product_image[0] ;?>);"></figure></a>
                            <div class="text">
                                <h3><a href="<?php the_permalink() ; ?>"><?php the_title() ; ?></a></h3>
                                <span class="price_tag"><?php echo  $product->get_price_html(); ?></span>
                            </div>
                            <div class="cart_box">
                            <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                                <!-- <a href="" class="cart_icon"><img src="<?php bloginfo('template_url'); ?>/img/icon-cart-h.png" alt=""></a> -->
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                    </div>
                </div>
                <div class="tab-pane fade" id="nav-small-pets" role="tabpanel" aria-labelledby="nav-small-pets-tab">
                <div class="row">

                    <?php

                    $args = array( 'post_type' => 'product', 'posts_per_page' => 6, 'product_cat' =>  'small-pets', 'order' => 'DESC' );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    global $product;
                    $product_price = $product->get_price();
                    ?>

                    <div class="col-md-4">
                        <div class="product_box_main">
                            <a href="<?php the_permalink() ; ?>"><figure style="background-image: url(<?php echo $product_image[0] ;?>);"></figure></a>
                            <div class="text">
                                <h3><a href="<?php the_permalink() ; ?>"><?php the_title() ; ?></a></h3>
                                <span class="price_tag"><?php echo  $product->get_price_html(); ?></span>
                            </div>
                            <div class="cart_box">
                            <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                                <!-- <a href="" class="cart_icon"><img src="<?php bloginfo('template_url'); ?>/img/icon-cart-h.png" alt=""></a> -->
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bestsellers -->
    
    <!-- Puppy Home -->
    <section class="puppy_home_main" style="background-image: url(<?php the_field('puppy_home_section_background_image'); ?>);">
        <div class="container">
            <h2><?php the_field('puppy_home_section_title'); ?></h2>
            <p><?php the_field('puppy_home_section_content'); ?></p>
            <a href="<?php echo site_url('/shop') ; ?>" class="a_btn">Shop Now</a>
        </div>
    </section>
    <!-- Puppy Home -->

    <!-- Shop Best Sellers -->
    <section class="best_saller_bottom">
        <div class="container">
            <h2>Shop Best Sellers</h2>
            <div class="best_saller_bottom_slider">
            <?php

                $args = array( 'post_type' => 'product', 'posts_per_page' => -1,  'order' => 'DESC' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                global $product;
                $product_price = $product->get_price();
                ?>  

                <div class="elements">
                    <div class="product_box_main">
                        <a href="<?php the_permalink() ; ?>"><figure style="background-image: url(<?php echo $product_image[0]; ?>);"></figure></a>
                        <div class="text">
                            <h3><a href="<?php the_permalink() ; ?>"><?php the_title()  ; ?></a></h3>
                            <span class="price_tag"><?php echo  $product->get_price_html(); ?> </span>
                        </div>
                        <div class="cart_box">
                           <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                            
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>

               
            </div>
        </div>
    </section>
    <!-- Shop Best Sellers -->

    <!-- images Shoe case -->
    <section class="accessories_main">
        <div class="container-fluid">
        <div class="row">

        <?php
        $taxonomy     = 'product_cat';
        $orderby      = 'name';
        $show_count   = 0;      
        $pad_counts   = 0;     
        $hierarchical = 1;     
        $title        = '';
        $empty        = 0;

        $args = array(
            'taxonomy'     => $taxonomy,
            'orderby'      => $orderby,
            'show_count'   => $show_count,
            'pad_counts'   => $pad_counts,
            'hierarchical' => $hierarchical,
            'title_li'     => $title,
            'hide_empty'   => $empty,
        );

     
       $all_categories = get_categories( $args );
       foreach ($all_categories as $cat) {
        $category_id = $cat->term_id;
        $thumbnail_id = get_term_meta( $category_id, 'thumbnail_id', true );
	   if($cat->slug != 'uncategorized' && $thumbnail_id ) {
		
        ?>


 
       <?php 
                
		$category_id = $cat->term_id;

	
		$thumbnail_id = get_term_meta( $category_id, 'thumbnail_id', true );
		$image_url    = wp_get_attachment_url( $thumbnail_id );

		
        ?>

                <div class="col-md-4">
                    <div class="accessories_img_box_main blue">
                        <div class="fig_holder">
                            <a href="<?php echo site_url('/product-category') .'?category='.$cat->slug ; ?>"><figure style="background-image: url(<?php echo $image_url ; ?>);"></figure></a>
                        </div>
                        <div class="text">
                            <h3><a href="<?php echo site_url('/product-category') .'?category='.$cat->slug ; ?>"><span><?php echo $cat->name; ?></span><?php echo $cat->description; ?></a></h3>
                            <a href="<?php echo site_url('/product-category') .'?category='.$cat->slug ; ?>" class="a_btn">Shop Now</a>
                        </div>
                    </div>
                </div>
        <?php  } } ?>
        
       
            
            </div>
        </div>
    </section>
    <!-- images Shoe case -->

    <!-- Veterinary Care -->
    <section class="veterinary_care_index">
        <div class="container">
            <div class="main_wapper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text">
                            <h2><?php the_field('veterinary_care_title'); ?></h2>
                            <p><?php the_field('veterinary_care_content'); ?></p>
                            <div class="free">
                                <h3><?php the_field('veterinary_care_subtitle'); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg_img">
                            <figure style="background-image: url(<?php the_field('veterinary_care_image'); ?>);"></figure>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text">
                            <ul>
                                <?php
                                    if( have_rows('veterinary_care_text_box') ):
                                    while( have_rows('veterinary_care_text_box') ) : the_row(); ?>
                                        <li>
                                            <span class="icon_wapper"><img src="<?php the_sub_field('image'); ?>" alt=""></span>
                                            <strong><?php the_sub_field('title'); ?></strong>
                                            <p><?php the_sub_field('content'); ?></p>
                                        </li>
                                    <?php
                                        endwhile;
                                        endif;
                                    ?>
                               
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Veterinary Care -->

    <!-- Free Shipping -->
    <section class="free_shipping_main">
        <div class="container">
            <ul>
            <?php
                if( have_rows('free_shipping_box') ):
                while( have_rows('free_shipping_box') ) : the_row(); ?>
                    <li>
                    <span><img src="<?php the_sub_field('icon'); ?>" alt=""></span>
                    <?php the_sub_field('title'); ?>
                    </li>
                <?php
                    endwhile;
                    endif;
                ?>
                
                
            </ul>
        </div>
    </section>
    <!-- Free Shipping -->

<?php get_footer(); ?>