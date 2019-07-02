<?php
function vw_writer_blog_child_scripts()
{
wp_enqueue_style('vw-writer-blog-child-scripts', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'vw_writer_blog_child_scripts');

?>