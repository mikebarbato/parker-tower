<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$imgURL = $thumb['0']; ?>

<div class="full-width" id="imageBanner" style="background-image: url(<?php echo $imgURL; ?>);">
    <div class="container-fluid">
        <div class="inner col-xs-24">
            
            <div class="content">
                <h1><?php the_title(); ?></h1>
            </div>
            
        </div>
    </div>
</div>