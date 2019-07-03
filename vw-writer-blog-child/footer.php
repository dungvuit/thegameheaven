<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package VW Writer Blog
 */
?>
<div class="copyright-wrapper footer">
    <div class="container">
        <?php
            $count = 0;
            
            if ( is_active_sidebar( 'footer-1' ) ) {
                $count++;
            }
            if ( is_active_sidebar( 'footer-2' ) ) {
                $count++;
            }
            if ( is_active_sidebar( 'footer-3' ) ) {
                $count++;
            }
            if ( is_active_sidebar( 'footer-4' ) ) {
                $count++;
            }
            // $count == 0 none
            if ( $count == 1 ) {
                $colmd = 'col-md-12 col-sm-12';
            } elseif ( $count == 2 ) {
                $colmd = 'col-md-6 col-sm-6';
            } elseif ( $count == 3 ) {
                $colmd = 'col-md-4 col-sm-4';
            } else {
                $colmd = 'col-md-3 col-sm-3';
            }
        ?>
        <div class="row">
            <div class="<?php if ( !is_active_sidebar( 'footer-1' ) ){ echo "footer_hide"; }else{ echo esc_attr($colmd); } ?> col-xs-12 footer-block">
                <?php dynamic_sidebar('footer-1'); ?>
            </div>
            <div class="<?php if ( is_active_sidebar( 'footer-2' ) ){ echo esc_attr($colmd); }else{ echo "footer_hide"; } ?> col-xs-12 footer-block">
                <?php dynamic_sidebar('footer-2'); ?>
            </div>
            <div class="<?php if ( is_active_sidebar( 'footer-3' ) ){ echo esc_attr($colmd); }else{ echo "footer_hide"; } ?> col-xs-12 col-xs-12 footer-block">
                <?php dynamic_sidebar('footer-3'); ?>
            </div>
            <div class="<?php if ( !is_active_sidebar( 'footer-4' ) ){ echo "footer_hide"; }else{ echo esc_attr($colmd); } ?> col-xs-12 footer-block">
                <?php dynamic_sidebar('footer-4'); ?>
            </div>
        </div>
    </div>
</div>
    <div id="footer-ct" >
        <div class="container text-center text-md-left"  >

        <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <p class="text-uppercase font-weight-bold">Thông tin : </p>
                    <p>The game heaven là trang tin tức giải trí game hàng đầu Việt Nam. Cung cấp Thông tin game, trò chơi trong nước và nước ngoài uy tín.</p>

                </div>
              <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

              <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-3">

                <!-- Content -->
                <p class="text-uppercase font-weight-bold">Liên Hệ :</p>
                    <ul>
                        <li>Địa chỉ: số 8 Lê Đại Hành, Hai Bà Trưng, Hà Nội</li>
                        <li>SĐT: 0988882266</li>
                        <li>Email:<a href="info@thegameheaven.com"> info@thegameheaven.com</a></li>
                    </ul>
                </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </div>
  <!-- Footer Text -->
<div class="footer-2">


  <!-- Copyright -->

    <div class="copyright container">
        <p>Copyright © 2019 - <a href="<?php bloginfo('home') ?>" target="_blank">www.thegameheaven.com. All rights reserved.</a></p>
        <a href="#" class="scrollup"><i class="fas fa-arrow-up" style="display: inline;"></i></a>
    </div>
    <div class="clear"></div>
</div>

<?php wp_footer(); ?>
</body>
</html>
