<?php 

/*
Template Name: Index Dont Use
*/
?>

<?php get_header();?>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">

				<?php the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>		
			</div>
		</div>
	</div>
	