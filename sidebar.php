<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 category-menu">
<?php get_template_part( 'searchform'); ?>
<ul class="category-list">
<?php
    $categories = get_categories( array(
        'orderby' => 'name',
        'parent'  => 0,
        'current_category' => 1
    ) );
    
    foreach ( $categories as $category ) {
        echo '<li class="catlink"><a class="catitem" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';  
    }
?>
</ul>
</div>


