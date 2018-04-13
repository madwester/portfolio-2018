<?php get_header(); ?>
<main>
    <div class="container-fluid">
        <div class="row">
                <?php get_template_part( 'sidebar'); ?>
            <div class="col-md-10">
            <h5 class="page-content-title">Search results for: <?php echo get_search_query(); ?></h5>
                <div class="container">
                    <div class="row">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part( 'blog-content', get_post_format() ); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>