<?php
/*
Template Name: blog
*/
?>
<?php get_header(); ?>
<main>
    <div class="container-fluid">
        <div class="row">
                <?php get_template_part( 'sidebar'); ?>
            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                <?php 
                $blog_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>20)); ?>
                <?php if ( $blog_query->have_posts() ) : ?>
                <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
                <?php get_template_part( 'blog-content', get_post_format() ); ?>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata()?>
            </div>       
        </div>
    </div>
</main>
<?php get_footer(); ?>
