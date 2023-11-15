<?php 

get_header(); 


	do_action( 'woocommerce_before_shop_loop' );

?>

 <!-- Listing Banner -->
 <section class="about-page-banner" style="background-image: url(<?php bloginfo('template_url'); ?>/img/banner-02.jpg)">
        <div class="container">
            <div class="banner-text">
                <h2> Product Details</h2>
            </div>
        </div>
    </section>
    <!-- Listing Banner -->

    <?php while ( have_posts() ) :
    the_post();
    $product = wc_get_product();
    $stock_quantity = $product->get_stock_quantity();
    
    $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
    
    ?>
    <!-- top -->
    <section class="product_details_top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="fig-holder">
                        <figure style="background-image: url(<?php echo $product_image[0] ; ?>);"></figure>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="side_text">
                        <div class="top">
                            <h3><?php the_title(); ?></h3>
                            <div class="price-wapper">
                                <span class="main-price"><?php echo  $product->get_price_html(); ?></span>
                               <?php if ( $stock_quantity !== null ) { ?>
                                <em class="left">Only <?php echo $stock_quantity ; ?> items left.</em><?php } ?>
                            </div>
                        </div>
                        <div class="bottom">
                            <h4>Quantity :</h4>
                          

                             <form class="cart" method="post" enctype="multipart/form-data">
                               <div class="form-wapper-main">
                                    <div class="each-wapper">
                                         <div class="quantity input-wapper">
                                            <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Quantity" class="price-tag input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                        </div>
                                        <!--<div class="input-wapper">-->
                                      
                                        <!--<?php echo  woocommerce_quantity_input(); ?>-->
                                        <!--     <span class="count-span">+</span>-->
                                          
                                        <!--    <input type="text" name="" id="" value="01" class="price-tag">-->
                                        <!--    <span class="count-span">-</span> -->
                                        <!--</div>-->
                                    </div>
                                    <div class="each-wapper">
                                      
                                       
                                    
                                        <input type="hidden" name="add-to-cart" value="<?php echo get_the_ID(); ?>">
                                    
                                        <button type="submit" id="buy_now_btn " class=" a_btn single_add_to_cart_button button alt">Add to cart</button>
                                    </form>
                                        
                                        <!--<a href="?add-to-cart=<?php echo esc_attr($product->get_id()); ?>" id="buy_now_btn " class=" buy_now_btn a_btn" data-product_id="<?php echo esc_attr($product->get_id()); ?>">Buy now</a>-->
                                        <!--<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>-->
                                    </div>
                                    
                                </div>
                            
                        </div>
                        <div class="item_details">
                            <h4>Item Details</h4>
                            <p><?php echo  wpautop( $product->get_description() ) ; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top  -->

    <!-- Similer Products -->

   <!-- Shop Best Sellers -->
   <section class="best_saller_bottom">
        <div class="container">
        <h2>Similar Product</h2>
            <div class="best_saller_bottom_slider">
            <?php
                
                $related_ids = wc_get_related_products( $product->get_id() ); 
                
                if ( ! empty( $related_ids ) ) { 
                    foreach ( $related_ids as $related_id ) {
                        $related_product = wc_get_product( $related_id );
                        $related_product_price = $related_product->get_price();
                  
                        $image_id = $related_product->get_image_id();
                        $image_url = wp_get_attachment_image_url( $image_id, 'full' );
                    ?>
                <div class="elements">
                    <div class="product_box_main">
                               <a href="<?php echo esc_url( get_permalink( $related_id ) ); ?>">
                                <figure style="background-image: url(<?php echo $image_url; ?>);"></figure>
                                </a>
                        <div class="text">
                            <h3><a href="<?php echo esc_url( get_permalink( $related_id ) ); ?>"><?php echo $related_product->get_title() ; ?></a></h3>
                            <span class="price_tag">$ 5.67</span>
                        </div>
                        <div class="cart_box">
                        <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                        </div>
                    </div>
                </div>
                <?php } }?>
              
            </div>
        </div>
    </section>

    <!-- Similer Products -->
<?php endwhile; ?>


   
<?php get_footer(); ?>