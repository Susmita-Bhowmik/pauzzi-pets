  <!-- Trending Product -->
  <section class="our-products-index trending_product">
        <div class="container">
            <h2>Similar Product</h2>
            <div class="trending-slick-slider">
                <?php
                
                $related_ids = wc_get_related_products( $product->get_id() ); 
                
                if ( ! empty( $related_ids ) ) { 
                    foreach ( $related_ids as $related_id ) {
                        $related_product = wc_get_product( $related_id );
                        $related_product_price = $related_product->get_price();
                  
                        $image_id = $related_product->get_image_id();
                        $image_url = wp_get_attachment_image_url( $image_id, 'full' );
                    ?>
                <div class="elemenst">
                    <div class="wapper">
                        <div class="top">
                            <div class="fig-holder">
                                <a href="<?php echo esc_url( get_permalink( $related_id ) ); ?>">
                                <figure style="background-image: url(<?php echo $image_url; ?>);"></figure>
                                </a>
                            </div>
                            <h4><a href="<?php echo esc_url( get_permalink( $related_id ) ); ?>"><?php echo $related_product->get_title() ; ?></a></h4>
                            <span class="price"><?php echo wc_price( $related_product_price ); ?></span>
                        </div>
                        <div class="bottom">
                        <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                            <span class="cart-tag"></span>
                        </div>
                    </div>
                </div>
                <?php } }?>
                
                
                
                
            </div>
        </div>
    </section>
    <!-- Trending Product -->