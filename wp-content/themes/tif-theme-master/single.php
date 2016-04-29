<?php get_header(); ?>

<?php include_once('inc/banner-page.php'); ?>

<div class="full-width" id="singlePage">
	<div class="container-fluid">
		<div class="inner col-xs-24 col-sm-offset-2 col-sm-20 col-md-offset-3 col-md-18 col-lg-offset-4 col-lg-16">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<h1><?php the_title(); ?></h1>
			
			<ul class="info">
				<li class="date"><?php the_date('m-d-Y'); ?><span> / </span></li>
				<li class="author"><?php the_author(); ?></li>
			</ul>
			
			<div class="single-rule"></div>
			
			<?php the_content(); ?>
			
			<?php endwhile; endif; ?>
			
		</div>
	</div>
</div>

<?php get_footer(); ?>