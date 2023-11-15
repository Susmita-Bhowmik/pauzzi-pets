<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
  <!-- footer -->
  <footer class="main_footer">
        <div class="container">
            <div class="top">
                <div class="row">
                    <div class="col-md-4">
                        <div class="first_part">
                            <div class="logo">
                                <a href="<?php echo home_url() ; ?>"> 
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
                            <p> <?php  dynamic_sidebar('footer_text'); ?></p>
                            <ul>
                                <li><a href="<?php echo site_url('/privacy-policy') ;?>">Privacy Policy</a></li>      
                                <li><a href="<?php echo site_url('/terms-and-conditions') ;?>">Terms and Conditions</a></li>      
                                <li><a href="<?php echo site_url('/sitemap'); ?>">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="quick_links">
                            <h3>Quick Links</h3>
                            <?php wp_nav_menu( array( 'theme_location' => 'quick-link-menu') );?>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="quick_links">
                            <h3>Customer Services</h3>
                            <?php wp_nav_menu( array( 'theme_location' => 'customer-services-menu') );?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer_form">
                            <h3>Subscribe to our Newsletter</h3>
                            <form  name="newsletter_form" id="newsletter_form" method="post">
                                <div class="form_group">
                                    <input type="email" name="user_email" id="user_email" placeholder="Email Address" required>
                                    <button type="submit" id="submit" name="submit" class="a_btn">Submit</button>
                                </div>
                            </form>
                            <span class="news_info">Subscribe our Newsletter to get Latest Updates</span>
                            <div id="result_msg"></div>
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
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <div class="wapper">
                <p><?php  dynamic_sidebar('copyright_text'); ?></p>
                    <p>Design and Maintained By <a href="https://www.businessprodigital.com/" target="_blank">Business Pro Digital</a> </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.bundle.min.js"></script>
    <!-- extra js -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-3.6.3.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
    <!-- Jquery UI -->
    <!-- <script src="<?php bloginfo('template_url'); ?>/js/jquery-ui-1.9.2.custom.min.js"></script> -->
    <!-- main-Js -->
    <script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
    <script>$(".tab-pane:eq(0)").addClass("active show")</script>

    <script>
  $('#newsletter_form').submit(function(event){
    event.preventDefault(); 

 
  var link = "<?php echo admin_url('admin-ajax.php')?>";
  var form = $('#newsletter_form').serialize();
  var formData = new FormData;
  formData.append('action','newsletter');
  formData.append('newsletter',form);
  //$('#submit').attr('disabled',true);
  
  $.ajax({
      url:link,
      type:'post',
      data:formData,
      processData:false,
      contentType:false,
      success:function(result){
       
          var data = $.parseJSON(result)
          if(data.status == 1){
            $('#newsletter_form')[0].reset()
            $('#result_msg').html('<p id="success" style="color:green;" >'+data.message+'</p>')
            setTimeout(function () {
                     $('#success').html('');
                 }, 2500);

          }else{
            $('#newsletter_form')[0].reset()
            $('#result_msg').html('<p id="error" style="color:red;" >'+data.message+'</p>')
            setTimeout(function () {
                     $('#error').html('');
                 }, 2500);
          }
          
        
            }
    
    });
 });  
   

</script>	
<script>
$('#search_form').submit(function(event){
   event.preventDefault();
    $('#result_msg1').html('');
    var link="<?php echo admin_url('admin-ajax.php') ;?>";
    var form = $('#search_form').serialize();
    var formData = new FormData;
    formData.append('action','search_product');
    formData.append('search_product',form);
    $('#service_submit').attr('disabled',true);
    $.ajax({
        url:link,
        type:'post',
        data:formData,
        processData:false,
        contentType:false,
       
        success:function(resp){
          
            var data_product = $.parseJSON(resp)
        
            
             if(data_product.status == 1){
                
                 location.replace("<?php echo site_url('search/?title=');?>"+data_product.title);
                 return false;
            
             }     
           
        }
    });
});    
</script>
			
<?php wp_footer(); ?>

</body>
</html>
