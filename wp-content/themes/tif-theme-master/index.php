<?php get_header(); ?>

<div class="full-width" id="home">
	
	<div class="slick-slider">
		
		<?php if (have_rows('photo_gallery_setup')) {
		while (have_rows('photo_gallery_setup')) : the_row(); ?>
		
		<div href="<?php the_sub_field('home_slider_link'); ?>" class="image-cell" style="background-image: url(<?php the_sub_field('home_slider_image'); ?>);"></div>
		
		<?php endwhile; ?>
		<?php } ?>
		
	</div>
	
	<div id="weather"></div>
	
</div>

<div class="full-width" id="news-events">
	<div class="container-fluid no-pad">
		<div class="inner no-pad col-xs-24">

			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="col-xs-12 col-md-offset-6 col-md-6 active">
					<a href="#news" aria-controls="news" role="tab" data-toggle="tab">News</a>
				</li>
				
				<li role="presentation" class="col-xs-12 col-md-6">
					<a href="#events" aria-controls="events" role="tab" data-toggle="tab">Events</a>
				</li>
			</ul>
			
		</div>
	</div>
</div>

<div class="full-width" id="news-events-content">
	<div class="container-fluid">
		<div class="inner col-xs-24">
			
			<div class="tab-content">
				
				<div role="tabpanel" class="tab-pane fade in active" id="news">
					
					<?php $args = array('post_type' => 'news', 'order' => 'ASC', 'orderby' => 'date', 'posts_per_page' => 5);
					query_posts($args);
					while (have_posts()) : the_post();
					
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
					$imgURL = $thumb['0']; ?>
					
					<div class="block news-block no-pad col-xs-24">
						
						<a href="<?php the_permalink(); ?>" class="image no-pad col-xs-24 col-sm-8" style="background-image: url(<?php echo $imgURL; ?>); ?>"></a>
						<div class="content col-xs-24 col-sm-16">
							
							<p class="title"><a href=""><?php the_title(); ?></a></p>
							<ul>
								<li class="date"><?php the_date('m-d-Y'); ?><span> / </span></li>
								<li class="author"><?php the_author(); ?></li>
							</ul>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
							
						</div>
						
					</div>
					
					<?php endwhile; wp_reset_query(); ?>
					
					
				</div>
				
				<div role="tabpanel" class="tab-pane fade" id="events">
					
					<?php $args = array('post_type' => 'events', 'order' => 'ASC', 'orderby' => 'date', 'posts_per_page' => 5);
					query_posts($args);
					while (have_posts()) : the_post();
					
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
					$imgURL = $thumb['0']; ?>
					
					<div class="block news-block no-pad col-xs-24">
						
						<a href="<?php the_permalink(); ?>" class="image no-pad col-xs-24 col-sm-8" style="background-image: url(<?php echo $imgURL; ?>); ?>"></a>
						<div class="content col-xs-24 col-sm-16">
							
							<p class="title"><a href=""><?php the_title(); ?></a></p>
							<ul>
								<li class="date"><?php the_date('m-d-Y'); ?><span> / </span></li>
								<li class="author"><?php the_author(); ?></li>
							</ul>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
							
						</div>
						
					</div>
					
					<?php endwhile; wp_reset_query(); ?>
					
				</div>
				
			</div>
			
		</div>	
	</div>
</div>

<div class="full-width" id="board-of-directors">
    <div class="container-fluid">
        <div class="inner col-xs-24 col-lg-offset-2 col-lg-20">
            
            <h1>Board of Directors</h1>
            
            <?php if (have_rows('board_of_directors_setup')) {
            while (have_rows('board_of_directors_setup')) : the_row(); ?>
            
            <div class="board-holder no-pad col-xs-24 col-sm-12 col-md-offset-2 col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php the_sub_field('board_directors_title'); ?></h3>
                    </div>
                    <div class="panel-body">
                        
                        <?php if (have_rows('board_directors_name_title_setup')) {
                        while (have_rows('board_directors_name_title_setup')) : the_row(); ?>
                        
                        <p><?php the_sub_field('board_name_title'); ?></p>
                        
                        <?php endwhile; ?>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
            
            <?php endwhile; ?>
            <?php } ?>
            
        </div>
    </div>
</div>

<div class="full-width" id="committees">
    <div class="container-fluid">
        <div class="inner col-xs-24">
            
            <h1>Committees</h1>
            
            <div class="grid">
            
                <?php if (have_rows('committees_setup')) {
                while (have_rows('committees_setup')) : the_row(); ?>
                
                <div class="grid-item committee-holder">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php the_sub_field('committee_title'); ?></h3>
                        </div>
                        <div class="panel-body">
                            
                            <?php if (have_rows('committee_name_title_setup')) {
                            while (have_rows('committee_name_title_setup')) : the_row(); ?>
                            
                            <p><?php the_sub_field('committee_name_title'); ?></p>
                            
                            <?php endwhile; ?>
                            <?php } ?>
                            
                            <div class="rule"></div>
                            
                            <p><?php the_sub_field('committee_description'); ?></p>
                            
                        </div>
                    </div>
                </div>
                
                <?php endwhile; ?>
                <?php } ?>
            
            </div>
            
        </div>
    </div>
</div>

<div class="full-width" id="files-forms">
	<div class="container-fluid no-pad">
		<div class="inner no-pad col-xs-24">

			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="col-xs-12 col-md-offset-6 col-md-6 active">
					<a href="#files" aria-controls="files" role="tab" data-toggle="tab">Files</a>
				</li>
				
				<li role="presentation" class="col-xs-12 col-md-6">
					<a href="#forms" aria-controls="forms" role="tab" data-toggle="tab">Forms</a>
				</li>
			</ul>
			
		</div>
	</div>
</div>

<div class="full-width" id="files-forms-content">
	<div class="container-fluid">
		<div class="inner col-xs-24">
			
			<div class="tab-content">
				
				<div role="tabpanel" class="tab-pane fade in active" id="files">
					
					
					<?php
		            $j = count(get_field('files_setup'));
		            $k = ceil($j / 2);
		            $i = 0;
		            if (have_rows('files_setup')) {
		            while (have_rows('files_setup')) : the_row(); ?>
		            
		            <?php if ($i%$k == 0) { ?>
					
					<div class="file-tree-holder col-xs-24 col-sm-offset-2 col-sm-10">
					
					<?php } ?>
					
		                <div class="file-tree file-tree-<?php echo $i; ?>">
		                    
		                    <h3><?php the_sub_field('files_setup_title'); ?></h3>
		                    
		                    <div class="tree-holder">
		                        <?php the_sub_field('files_setup_list'); ?>
		                    </div>
		                    
		                </div>
		            
		            <?php $i++; if ($i%$k == 0) { ?>
		            
		            </div>
		            
		            <?php } ?>
		            
		            <?php endwhile; ?>
		            <?php } ?>
					
					
				</div>
				
				<div role="tabpanel" class="tab-pane fade" id="forms">
					
					<?php
		            $j = count(get_field('forms_setup'));
		            $k = ceil($j / 2);
		            $i = 0;
		            if (have_rows('forms_setup')) {
		            while (have_rows('forms_setup')) : the_row(); ?>
		            
		            <?php if ($i%$k == 0) { ?>
					
					<div class="file-tree-holder col-xs-24 col-sm-offset-2 col-sm-10">
					
					<?php } ?>
					
		                <div class="file-tree file-tree-<?php echo $i; ?>">
		                    
		                    <h3><?php the_sub_field('forms_setup_title'); ?></h3>
		                    
		                    <div class="tree-holder">
		                        <?php the_sub_field('forms_setup_list'); ?>
		                    </div>
		                    
		                </div>
		            
		            <?php $i++; if ($i%$k == 0) { ?>
		            
		            </div>
		            
		            <?php } ?>
		            
		            <?php endwhile; ?>
		            <?php } ?>
					
				</div>
				
			</div>
			
		</div>	
	</div>
</div>

<div class="full-width" id="contact-us">
	<div class="container-fluid">
		<div class="inner col-xs-24">
		    
		    <div class="contact-sidebar col-xs-24 col-sm-8">
    		    <h1>Contact Information</h1>
    		    
    		    <h4>Address:</h4>
    		    <p><?php the_field('contact_address'); ?></p>
    		    
    		    <h4>Phone:</h4>
    		    <a href="tel:<?php the_field('contact_phone'); ?>"><?php the_field('contact_phone'); ?></a>
    		    
    		    <h4>Email:</h4>
    		    <a href="mailto:<?php the_field('contact_email_address'); ?>"><?php the_field('contact_email_address'); ?></a>
    		    
    		    <div class="google-map">
    		        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3586.74527975122!2d-80.12135338497465!3d25.976392983539693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9aca296ae388d%3A0x158e2f0617f46d39!2sParker+Tower+Condominiums!5e0!3m2!1sen!2sus!4v1458616543007" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    		    </div>
    		</div>
		    
		    <div class="form-holder col-xs-24 col-sm-offset-1 col-sm-15">
		        
		        <h1>Contact Us</h1>
		        
		        <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true]'); ?>
    			
    		</div>
			
		</div>
	</div>
</div>

<?php get_footer(); ?>