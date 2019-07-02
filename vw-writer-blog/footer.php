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
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <?php dynamic_sidebar('footer-1');?>
            </div>
            <div class="col-lg-3 col-md-3">
                <?php dynamic_sidebar('footer-2');?>
            </div>
            <div class="col-lg-3 col-md-3">
                <?php dynamic_sidebar('footer-3');?>
            </div>
            <div class="col-lg-3 col-md-3">
                <?php dynamic_sidebar('footer-4');?>
            </div>
        </div>
    </div>
</div>

<div class="footer-2">
  	<div class="copyright container">
        <p><?php echo esc_html(get_theme_mod('vw_writer_blog_footer_text',__('Copyright 2018-','vw-writer-blog'))); ?> <?php vw_writer_blog_credit(); ?></p>
  	</div>
  	<div class="clear"></div>
</div>

<?php wp_footer(); ?>
</body>
</html>