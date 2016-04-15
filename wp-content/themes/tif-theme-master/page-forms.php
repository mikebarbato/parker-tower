<?php
/*
* Template Name: Forms
*/
?>

<?php get_header(); ?>

<?php include_once('inc/banner-page.php'); ?>

<div class="full-width">
	<div class="container-fluid">
		<div class="col-xs-24 col-lg-offset-4 col-lg-16">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<?php the_content(); ?>
			
			<?php endwhile; endif; ?>
			
		</div>
	</div>
</div>

<?php get_footer(); ?>