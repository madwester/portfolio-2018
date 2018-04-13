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
<?php
$show_categories = true;
$categories = wp_get_post_categories( $post->ID );
// We don't want to show the categories if there is a single category and it is "uncategorized"
if ( count( $categories ) == 1 && in_array( 1, $categories ) ) :
  $show_categories = false;
endif;
if ( has_category( null, $post->ID ) && $show_categories ) :
  echo ' & ' . __('', '') . get_the_category_list();
endif;

?>

