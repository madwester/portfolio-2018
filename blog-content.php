<div class="blog-post col-12">

	<h4><?php the_category(); ?></h4>
	<h2><?php the_title(); ?></h2>
	<h3><?php the_date(); ?></h3>
	<?php 
	//if( has_post_thumbnail() ):
	the_post_thumbnail(array(400, 'auto'), ['class' => 'blog-photo']);
	//endif;
	?>
 	<p><?php the_content(); ?></p>
</div>
