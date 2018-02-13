<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.css">
	 
	<!-- Default Theme -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.theme.css">
	<!--  jQuery 1.7+  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script src="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
	
	<?php wp_head(); ?>
	
	<link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/android-chrome-192x192.png" sizes="192x192">
	<script>
		$(function() {
		  $('a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
		  });
		});
	</script>
	
</head>

<body>
	<div id="st-container" class="st-container">
		<div class="row">
		
		<header>
			<div class="col-xs-12 address">
				13 Fitzroy Street, London, W1T 4BQ. Tel: <a href="tel:+442077553192">020 7755 3192</a> Email: <a href="mailto:info@fitzroviapartnership.com">info@fitzroviapartnership.com</a> <a href="https://twitter.com/fitzpartnership" target=_blank">@Fitzpartnership</a>
				<span class="copyright">&copy; The Fitzrovia Partnership <?php echo date('Y'); ?></span>
			</div>
			
			<nav class="st-menu st-effect-1" id="menu-1">
			<h2></h2>
			<?php get_search_form(); ?>
			<br />
			<?php 
				$defaults = array(	
				'container' => false, 	
				'theme_location' => 'primary-menu'
				);
							
				wp_nav_menu( $defaults );
			 ?>
			  
			 <p>The Fitzrovia Partnership<br />
			 13 Fitzroy Street,<br />
			 London,<br />
			 W1T 4BQ.<br /><br />
			 Tel: 020 7755 3380<br />
			 Email: <a href="mailto:info@fitzroviapartnership.com">info@fitzroviapartnership.com</a></p>
			 
			</nav>
			
			
			<div id="st-trigger-effects" class="menu">
				<a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/tfp-white-logo.png" class="logo" border="0" /></a>
				<button data-effect="st-effect-1" class="menu"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-icon.png" /></button>
			</div>
		</header>	
		
		</div>