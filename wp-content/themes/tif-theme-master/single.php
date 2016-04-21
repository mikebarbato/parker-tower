<?php get_header(); ?>

<?php include_once('inc/banner-page.php'); ?>

<div class="full-width" id="singlePage">
	<div class="container-fluid">
		<div class="inner col-xs-24">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<?php the_title(); ?>
			
			<ul>
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