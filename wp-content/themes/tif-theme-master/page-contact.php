<?php
/*
* Template Name: Contact Us
*/
?>

<?php get_header(); ?>

<?php include_once('inc/banner-page.php'); ?>

<div class="full-width" id="contactUs">
	<div class="container-fluid">
		<div class="inner col-xs-24">
		    
		    <div class="contact-sidebar col-xs-24 col-sm-8">
    		    <h1>Contact Information</h1>
    		    
    		    <h4>Address:</h4>
    		    <p><?php the_field('contact_address'); ?></p>
    		    
    		    <h4>Phone:</h4>
    		    <a href="tel:<?php the_field('contact_phone'); ?>"><?php the_field('contact_phone'); ?></a>
    		    
    		    <h4>Email:</h4>
    		    <a href="mailto:<?php the_field('contact_email_adresses'); ?>"><?php the_field('contact_email_adresses'); ?></a>
    		    
    		    <div class="google-map">
    		        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3586.74527975122!2d-80.12135338497465!3d25.976392983539693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9aca296ae388d%3A0x158e2f0617f46d39!2sParker+Tower+Condominiums!5e0!3m2!1sen!2sus!4v1458616543007" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    		    </div>
    		</div>
		    
		    <div class="form-holder col-xs-24 col-sm-offset-1 col-sm-15">
		        
		        <h1>Contact Us</h1>
			
    			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    			
    			<?php the_content(); ?>
    			
    			<?php endwhile; endif; ?>
    			
    		</div>
			
		</div>
	</div>
</div>

<?php get_footer(); ?>