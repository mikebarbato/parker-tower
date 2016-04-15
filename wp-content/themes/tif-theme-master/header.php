<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<meta name="format-detection" content="telephone=no">
		<title><?php wp_title(' | Parker Tower', true, 'right'); ?></title>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="<?php bloginfo('template_directory');?>/js/html5shiv.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory');?>/js/respond.js" type="text/javascript"></script>
		<![endif]-->
		
		<link href='https://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Ruda:400,700,900' rel='stylesheet' type='text/css'>
		
		<?php wp_head(); ?>

	</head>
	<body <?php body_class(isset($class) ? $class : ''); ?>>
		
	<div class="full-width" id="popNavigation">
		
		<a href="<?php echo home_url(); ?>" class="logo-btn logo">Parker Tower</a>
		
		<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle" data-toggle="tooltip" data-placement="left" title="MENU"><i class="fa fa-bars"></i></a>
		
		<?php if (is_user_logged_in()) { ?>
		<a id="profile-toggle" href="<?php echo get_edit_user_link(); ?>" class="btn btn-dark btn-lg" data-toggle="tooltip" data-placement="left" title="PROFILE"><i class="fa fa-user"></i></a>
		<?php } ?>
		
		<a id="login-toggle" href="<?php if (is_user_logged_in()) {echo wp_logout_url(home_url());} else {echo wp_login_url(home_url());} ?>" class="btn btn-dark btn-lg" style="<?php if (is_user_logged_in()) {echo 'top: 100px';} else {echo 'top: 50px';} ?>" data-toggle="tooltip" data-placement="left" title="<?php if (is_user_logged_in()) {echo 'LOGOUT';} else {echo 'LOGIN';} ?>"><i class="<?php if (is_user_logged_in()) {echo 'fa fa-sign-out';} else {echo 'fa fa-sign-in';} ?>"></i></a>
		
		<nav id="sidebar-wrapper">
			<ul class="sidebar-nav">
            	<a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
				<li class="sidebar-brand"><a href="<?php echo home_url(); ?>">Parker Tower</a></li>
				
				<?php wp_nav_menu( array(
					'theme_location' => 'primary_navigation',
					'container' => ''
				)); ?>
				
				<div class="rule"></div>
				
				<?php wp_nav_menu( array(
					'theme_location' => 'secondary_navigation',
					'container' => ''
				)); ?>
				
			</ul>
		</nav>
		
	</div>