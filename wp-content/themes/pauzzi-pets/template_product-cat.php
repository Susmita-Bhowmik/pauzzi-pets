
<?php 

/** Template Name: Product category */



get_header();

?>
<?php $cat_slug = $_GET['category']; ?>
<section class="about-page-banner"  style="background-image: url(<?php bloginfo('template_url'); ?>/img/banner-02.jpg)">
  <div class="banner-text">
    <div class="container">
      <h2 style="text-transform: capitalize;">Category : <?php echo $cat_slug  ; ?></h2>
    </div>
  </div>
</section>
<section class="bestsellers_main">
        <div class="container">
                        <div class="row">
                         <?php

                            $args = array( 'post_type' => 'product','product_cat'=> $cat_slug, 'posts_per_page' => -1,'order' => 'DESC' );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post(); 
                            $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                            $id  = get_the_ID();
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
    </section>



<?php
get_footer(); ?>
