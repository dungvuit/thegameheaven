<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package VW Writer Blog
 */

get_header(); ?>

<?php do_action( 'vw_writer_blog_page_top' ); ?>

<div id="content-vw" class="container">
    <div class="middle-align">
		<?php while ( have_posts() ) : the_post(); ?>
        	<img src="<?php the_post_thumbnail_url('full'); ?>">
            <h1><?php the_title();?></h1>
            <?php the_content();?>
        <?php endwhile; // end of the loop. ?>
        <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
               comments_template();
            endif;
        ?>
    </div>
    <div class="clear"></div>
</div>

<?php do_action( 'vw_writer_blog_page_bottom' ); ?>

<?php get_footer(); ?>