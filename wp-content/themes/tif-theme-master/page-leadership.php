<?php
/*
* Template Name: Leadership
*/
?>

<?php get_header(); ?>

<?php include_once('inc/banner-page.php'); ?>

<div class="full-width" id="boardOfDirectors">
    <div class="container-fluid">
        <div class="inner col-xs-24 col-lg-offset-2 col-lg-20">
            
            <h1>Board of Directors</h1>
            
            <?php if (have_rows('board_of_directors_setup')) {
            while (have_rows('board_of_directors_setup')) : the_row(); ?>
            
            <div class="board-holder no-pad col-xs-24 col-sm-12 col-md-offset-2 col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php the_sub_field('board_block_title'); ?></h3>
                    </div>
                    <div class="panel-body">
                        
                        <?php if (have_rows('board_name_title_setup')) {
                        while (have_rows('board_name_title_setup')) : the_row(); ?>
                        
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
                            <h3 class="panel-title"><?php the_sub_field('committees_block_title'); ?></h3>
                        </div>
                        <div class="panel-body">
                            
                            <?php if (have_rows('committees_names_titles_setup')) {
                            while (have_rows('committees_names_titles_setup')) : the_row(); ?>
                            
                            <p><?php the_sub_field('committees_name_title'); ?></p>
                            
                            <?php endwhile; ?>
                            <?php } ?>
                            
                            <div class="rule"></div>
                            
                            <p><?php the_sub_field('committees_description'); ?></p>
                            
                        </div>
                    </div>
                </div>
                
                <?php endwhile; ?>
                <?php } ?>
            
            </div>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>