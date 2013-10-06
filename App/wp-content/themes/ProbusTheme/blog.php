<?php get_header();

/*
Template Name: Blog
*/
?>

		<div class="club-items bg dark-bg">
			<div class="container">
				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?><?php } ?><?php while ( have_posts() ) : the_post() ?>
				<div class="row">
					<div class="span12">
						<h1>
							<?php the_title(); ?>
						</h1>
						<p>
							<?php the_content(); ?>
						</p>
					</div>
				</div>
			</div><?php endwhile; ?><?php get_footer(); ?>
		</div>
	   
	</body>
</html>