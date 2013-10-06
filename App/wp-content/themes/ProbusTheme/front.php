<?php get_header();

/*
Template Name: Front
*/

?>

		<div class="banner">
			<ul class="featured">
				<li style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/stock-photo-20640366-business-team.jpg); background-size: 100% 100%; width: 25%;">
					<div class="featured-details">
						<div class="inner">
							<h2 class="post-title">
								<a href="http://demo2.designerthemes.com/adapt/the-weekend-lake/">GRAMPIANS TOUR</a>
							</h2><!--BEGIN .post-content -->
							<div class="post-content format-video">
								<p>
									In late 2010 the club took a trip to the grampians, located 3 hours away from the club
								</p>
							</div><a class="read-more" href="http://demo2.designerthemes.com/adapt/the-weekend-lake/">Read More</a>
						</div>
					</div>
				</li>
				<li style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/stock-photo-20640366-business-team.jpg); background-size: 100% 100%; width: 25%;">
					<div class="featured-details">
						<div class="inner">
							<h2 class="post-title">
								<a href="http://demo2.designerthemes.com/adapt/the-weekend-lake/">GRAMPIANS TOUR</a>
							</h2><!--BEGIN .post-content -->
							<div class="post-content format-video">
								<p>
									In late 2010 the club took a trip to the grampians, located 3 hours away from the club
								</p>
							</div><a class="read-more" href="http://demo2.designerthemes.com/adapt/the-weekend-lake/">Photos</a> <a class="read-more" href="http://demo2.designerthemes.com/adapt/the-weekend-lake/">Read More</a>
						</div>
					</div>
				</li>
				<li style="background-image: url(http://static.squarespace.com/static/5134cbefe4b0c6fb04df8065/t/51e44fa0e4b031b926e2e71d/1373917093114/hero-customers-infinity.jpg?format=1500w); background-size: 100% 100%; width: 25%;">
					<div class="featured-details">
						<div class="inner">
							<h2 class="post-title">
								<a href="http://demo2.designerthemes.com/adapt/the-weekend-lake/">GRAMPIANS TOUR</a>
							</h2><!--BEGIN .post-content -->
							<div class="post-content format-video">
								<p>
									In late 2010 the club took a trip to the grampians, located 3 hours away from the club
								</p>
							</div><a class="read-more" href="http://demo2.designerthemes.com/adapt/the-weekend-lake/">Read More</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
		
		<div class="club-items">
			<div class="container">
				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?><?php } ?><?php while ( have_posts() ) : the_post() ?>
				<div class="row">
					<div class="col-sl-12 col-md-9 col-lg-6 col-lg-offset-3 col-md-offset-2">
						<div class="text-center">
							<h3>
								<?php the_title(); ?>
							</h3>
							<p>
								<?php the_content(); ?>
							</p>
						</div>
					</div>
				</div>
				
			</div><?php endwhile; ?><?php get_footer(); ?><?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?><?php } ?><?php while ( have_posts() ) : the_post() ?>
			<div class="container top">
				<div class="row">
					<div class_exists="col-sm-12 col-md-3 col-lg-4" style="text-align:center;">
						<img width="290" height="167" align="center" class="icon" src="http://deepcreekanglican.com/wp-content/uploads/2013/07/s@81-400x230.png" alt="">
							<h4>Newsletter</h4>
						<p class="text-center">
							Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
						</p>
						<a class="read-more" href="./blog">Read More</a>
						
					</div>
					<div class="col-sm-12 col-md-3 col-lg-4" style="text-align:center;">
						<img width="290" height="167" align="center" src="http://localhost:1111/chathamprobus.com.au/Application/wp-content/uploads/2013/10/Binghamton-University-Campus-Photo-Gallery.jpg" class="icon">
													
						<h4 class="text-center">
							Photos
						</h4>
						
						<p class="text-center">
							Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
						</p>
						<a class="read-more" href="./gallery">See Collection</a>
						
					</div>
					<div class="col-sm-12 col-md-3 col-lg-4" style="text-align:center;">
						<img width="290" align="center" height="167" src="http://localhost:1111/chathamprobus.com.au/Application/wp-content/uploads/2013/10/Events-calendar.jpg" class="icon">
						<h4 class="text-center">
							Events
						</h4>
						<p class="text-center">
							Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
						</p>
						<a class="read-more" href="./events">Find Out More</a>
						
					</div><?php endwhile; ?><?php get_footer(); ?>
				</div>
			</div>
			<br>
			<br>
			<br>
			<div class="container">
				<div class="row">
						<div class="col-lg-12">
							<h2 style="text-align:center;">Upcoming Events</h2>
							<hr>
						</div>
					</div>
				<div class="row">
					<?php if (class_exists('EM_Events')) {
							echo EM_Events::output( array('limit'=>5,'orderby'=>'date') );
						}
	 				?>

				</div>
				<hr>
			</div>
			
			
			<script type="text/javascript">
			$(document).ready(function() {
				$('.banner').unslider({ fluid: true });
			});
			</script>
		</div>
	</body>
</html>
