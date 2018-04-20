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
					<figure class="effect-zoe">
						<img src="<?php bloginfo('template_directory')?>/build/images/portfolio/everly.jpg" alt="img25"/>
						<figcaption>
							<p class="icon-links">
								<a href="http://localhost:8888/home/everly-detail/"><i class="fa fa-chevron-right"></i><h2>Everly <span>Stockholm</span></h2></a>
							</p>
						</figcaption>			
					</figure>
  			<figure class="effect-zoe">
  			  <img src="<?php bloginfo('template_directory')?>/build/images/portfolio/bucketlist.jpg" alt="img26"/>
  				<figcaption>
  					<p class="icon-links">
  						<a href="http://localhost:8888/bucket-list-detail/"><i class="fa fa-chevron-right"></i><h2>Maddies Bucket List</h2></span></a>
  					</p>
  				</figcaption>			
  			</figure>
  			<figure class="effect-zoe">
  			  <img src="<?php bloginfo('template_directory')?>/build/images/portfolio/thedepot.jpg" alt="img26"/>
  				<figcaption>
  					<p class="icon-links">
  						<a href="http://localhost:8888/home/depot-detail/"><i class="fa fa-chevron-right"></i><h2>The Depot <span>Bondi Beach</span></h2></span></a>
  					</p>
  				</figcaption>			
  			</figure>
  			<figure class="effect-zoe">
  				<img src="<?php bloginfo('template_directory')?>/build/images/portfolio/c21-office.jpg" alt="img25"/>
  				<figcaption>
  					<p class="icon-links">
  						<a href="http://localhost:8888/21-century-detail/"><i class="fa fa-chevron-right"></i></span><h2>21 Century</h2></a>
  					</p>
  				</figcaption>			
  			</figure>
  		</div>
    </div>
</section>
</main>
<?php get_footer();?>
</body>
</html>

