<?php
/*
Template Name: Single Portfolio Page
*/
?>
<?php get_header(); ?>
<main>
<div class="container detailcontainer">
<div class="row">
    <div class="col-md-12 backBtnDiv">
        <a id="backLink" href="http://madwester.com/home/#portfolio"><i class="fa fa-angle-double-left"></i>Go Back to Portfolio</a>
    </div>
</div>
<?php while ( have_posts() ) : the_post(); ?>
<?php
endwhile;
?>
<div class="row detailrow">
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
    <?php if( get_field('image_1') ): ?>
        <img src="<?php the_field('image_1'); ?>" class="img-responsive"/>
    <?php endif; ?>
    <?php if( get_field('image_2') ): ?>
        <img src="<?php the_field('image_2'); ?>" class="img-responsive"/>
    <?php endif; ?>
    <?php if( get_field('image_3') ): ?>
        <img src="<?php the_field('image_3'); ?>" class="img-responsive"/>
    <?php endif; ?>
    <?php if( get_field('vertical_image_1') ): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php the_field('vertical_image_1'); ?>" class="img-responsive"/>
                    </div>
                    <?php if( get_field('vertical_image_2') ): ?>
                        <div class="col-md-6">
                            <img src="<?php the_field('vertical_image_2'); ?>" class="img-responsive"/>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('vertical_image_3') ): ?>
                        <div class="col-md-6">
                            <img src="<?php the_field('vertical_image_3'); ?>" class="img-responsive"/>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div> 
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 detailtext">
<h1><?php the_title(); ?></h1>
<p><?php the_field('description'); ?></p>
<a href="<?php the_field('external_link_to_project');?>"><?php the_field('external_link_title');?><i class="fa fa-angle-double-right"></i>
</div>
</div>
</div>
</main>
<?php get_footer(); ?>