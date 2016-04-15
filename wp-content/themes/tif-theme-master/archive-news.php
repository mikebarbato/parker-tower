<?php get_header(); ?>

<?php include_once('inc/banner-post-type.php'); ?>

<div class="full-width" id="postBlock">
    <div class="container-fluid">
        <div class="inner col-xs-24">
            
            <div class="grid">
            
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array('post_type' => 'news', 'order' => 'ASC', 'paged' => $paged);
                query_posts($args);
                while (have_posts()) : the_post(); ?>
                
                <div class="grid-item panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                    <div class="panel-body">
                        
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
                        
                        <img src="<?php echo $image[0]; ?>" class="img-responsive" />
                        <h4>date, time, author</h4>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
                
                <?php endwhile; wp_reset_query(); ?>
                
            </div>
            
            <div class="event-pagination">
				<?php posts_nav_link(); ?>
			</div>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>