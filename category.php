<?php get_header(); ?>
<main>
    <div class="container-fluid">
        <div class="row">
                <?php get_template_part( 'sidebar'); ?>
                <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
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