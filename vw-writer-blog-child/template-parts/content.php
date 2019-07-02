<?php
/**
 * The template part for displaying content
 *
 * @package VW Writer Blog 
 * @subpackage vw_writer_blog
 * @since VW Writer Blog 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box ">
    <div class="row m-0">
      <?php if(has_post_thumbnail()) {?>
        <div class="box-image col-lg-6 col-md-6">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php } ?>
      <div class="new-text <?php if(has_post_thumbnail()) { ?>col-lg-6 col-md-6"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h2>
        <div class="post-info">
          <?php if(get_theme_mod('vw_writer_blog_toggle_postdate',true)==1){ ?>
            <span class="entry-date"><?php the_date(); ?></span><span>|</span>
          <?php } ?>
          
          <?php if(get_theme_mod('vw_writer_blog_toggle_author',true)==1){ ?>  
            <span class="entry-author"> <?php the_author(); ?></span><span>|</span>
          <?php } ?>

          <?php if(get_theme_mod('vw_writer_blog_toggle_comments',true)==1){ ?>  
            <span class="entry-comments"><?php comments_number( __('0 Comment', 'vw-writer-blog'), __('0 Comments', 'vw-writer-blog'), __('% Comments', 'vw-writer-blog') ); ?> </span>
          <?php } ?>
          <hr>
        </div>      
        <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_writer_blog_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_writer_blog_excerpt_number','30')))); ?></p>
        <div class="content-bttn">
          <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'READ MORE','vw-writer-blog' ); ?>"><?php esc_html_e('READ MORE','vw-writer-blog'); ?></a><i class="fas fa-long-arrow-alt-right"></i>
        </div>
      </div>
    </div>
  </div>
</div>