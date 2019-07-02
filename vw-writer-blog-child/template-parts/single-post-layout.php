<?php
/**
 * The template part for displaying single post
 *
 * @package VW Writer Blog
 * @subpackage vw-writer-blog
 * @since VW Writer Blog 1.0
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="post-info">
        <?php if(get_theme_mod('vw_writer_blog_toggle_postdate',true)==1){ ?>
            <span class="entry-date"><?php the_date(); ?></span><span>|</span>
        <?php } ?>
        <?php if(get_theme_mod('vw_writer_blog_toggle_comments',true)==1){ ?>  
            <span class="entry-comments"><?php comments_number( __('0 Comment', 'vw-writer-blog'), __('0 Comments', 'vw-writer-blog'), __('% Comments', 'vw-writer-blog') ); ?> </span>
        <?php } ?>
    </div>
    <h2><?php the_title(); ?></h2>
    <?php if(has_post_thumbnail()) { ?>
        <div class="feature-box">   
            <img src="<?php the_post_thumbnail_url('full'); ?>">
        </div>
        <?php } the_content();
        the_tags(); ?>
        <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() )
        comments_template();

        if ( is_singular( 'attachment' ) ) {
            // Parent post navigation.
            the_post_navigation( array(
                'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vw-writer-blog' ),
            ) );
        } 
    ?>
</div>