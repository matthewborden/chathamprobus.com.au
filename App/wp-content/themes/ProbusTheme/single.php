<?php get_header(); ?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php the_post(); ?>
		<div class="contaniner">
			<div class="row">
				<div class="span12">
					<h1><?php the_title(); ?></h1>
					<p> <?php the_content(); ?> </p>
				</div>
			</div>
		</div>
		
		<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'hbd-theme' ) . '&after=</div>') ?>
		<?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?>
		<?php get_footer(); ?>
	</body>
</html>