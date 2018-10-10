<?php if ( have_posts() ) { the_post(); rewind_posts(); } ?>
    <?php if('portfolio_items' == get_post_type()) { ?>
        <?php include(TEMPLATEPATH . '/single-portfolio.php'); ?>
    <?php } ?>