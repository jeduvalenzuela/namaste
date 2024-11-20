<?php 
//template Traviara 
?>

<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Lobo Larsen Buceo - Puerto Madryn - Chubut - Patagonia Argentina</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/animations.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/icomoon.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/shop.css" class="color-switcher-link">
	<script src="<?php echo get_stylesheet_directory_uri();?>/js/vendor/modernizr-2.6.2.min.js"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-204TQ2CJJJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-204TQ2CJJJ');
</script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->
<?php wp_head(); ?>

</head>

<body>

	<div class="preloader">
		<div class="preloader_image pulse"></div>
	</div>

	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<div class="header_absolute ds cover-background ">
				<!-- header with three Bootstrap columns - left for logo, center for navigation and right for includes-->
				<header class="page_header ds ms s-overlay">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-xl-2 col-lg-3 col-11">
								<a href="<?php echo home_url( '/' ); ?>" class="logo">
									<img src="<?php echo get_stylesheet_directory_uri();?>/images/logo.png" alt="Lobo Larsen">
								</a>
							</div>
							<div class="col-xl-8 col-lg-5 col-1">
								<!-- main nav start -->
								<nav class="top-nav">
									<?php
									wp_nav_menu(array(
										'theme_location' => 'menu-principal',
										'container' => false,
										'menu_class' => 'nav sf-menu',
										'fallback_cb' => false,
									));
									?>
								</nav>
								<!-- eof main nav -->
							</div>
							<div class="col-xl-2 col-lg-3 text-right d-none d-lg-block">
								<a class="fs-20 links-maincolor-hover" href="tel:+5492804516314"><mark>+54 9</mark> 280-4327476</a>
							</div>
						</div>
					</div>
					<!-- header toggler -->
					<span class="toggle_menu"><span></span></span>
				</header>

			</div>