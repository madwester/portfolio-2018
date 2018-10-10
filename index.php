<?php get_header(); ?>
<main>
  <div class="feature">
    <div class="feature-inline">
      <h1>My name is Madeleine Westerström</h1>
      <h1 id="typedtext"></h1>
    </div>
    <a href="#portfolio">
      <button class="btn btn-view-work">
        <p>View my work <i class="fa fa-arrow-right"></i></p>
      </button>
    </a>
  </div>
  <section id="portfolio">
  	<div class="content">
  		<div class="grid">
			<?php
				$args = array(
					'post_type' => 'portfolio_items'
				);
				$query = new WP_Query($args);
			?>
			<?php if ($query->have_posts() ) : ?>
			<?php while ($query -> have_posts() ) : $query->the_post(); ?>
			<a href="<?php the_permalink(); ?>">
					<figure class="effect-zoe">
						<?php the_post_thumbnail(); ?>
						<figcaption>
							<p class="icon-links">
								<a href="<?php the_permalink(); ?>"><i class="fa fa-chevron-right"></i><h2><?php the_title(); ?></h2></a>
							</p>
						</figcaption>			
					</figure>
				</a>
			<?php endwhile; ?>
			<?php endif; ?>
  		</div>
    </div>
</section>
</main>
<?php get_footer();?>
</body>
</html>

