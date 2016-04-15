<?php
/*
* Template Name: Files & Reports
*/
?>

<?php get_header(); ?>

<?php include_once('inc/banner-page.php'); ?>

<div class="full-width" id="fileIntro">
    <div class="container-fluid">
        <div class="inner col-xs-24 col-sm-offset-1 col-sm-22 col-md-offset-3 col-md-18 col-lg-offset-4 col-lg-16">
            
            <h1><?php the_field('file_reports_title'); ?></h1>
            <?php the_field('file_reports_content'); ?>
            
        </div>
    </div>
</div>

<div class="full-width" id="fileTree">
    <div class="container-fluid">
        <div class="inner col-xs-24 col-lg-offset-3 col-lg-18">
            
            <?php
            $j = count(get_field('file_tree_setup'));
            $k = ceil($j / 2);
            $i = 0;
            if (have_rows('file_tree_setup')) {
            while (have_rows('file_tree_setup')) : the_row(); ?>
            
            <?php if ($i%$k == 0) { ?>
			
			<div class="file-tree-holder col-xs-24 col-sm-offset-2 col-sm-10">
			
			<?php } ?>
			
                <div class="file-tree file-tree-<?php echo $i; ?>">
                    
                    <h3><?php the_sub_field('file_tree_title'); ?></h3>
                    
                    <div class="tree-holder">
                        <?php the_sub_field('file_tree_list'); ?>
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

<?php get_footer(); ?>