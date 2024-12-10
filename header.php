<?php 
//template Traviara 
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Namaste Wellness Trips - La Plata - Tour - Agency - Incoming</title>
    <meta name="author" content="Tourm">
    <meta name="description" content="Tourm - Travel & Tour Booking Agency HTML Template ">
    <meta name="keywords" content="Tourm - Travel & Tour Booking Agency HTML Template ">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri();?>/assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Manrope:wght@200..800&family=Montez&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/magnific-popup.min.css">

    <!-- Swiper css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/swiper-bundle.min.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/style.css">
	<?php wp_head(); ?>
</head>

<body>

    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->

    <!--==============================
     Preloader
  ==============================-->
    <div id="preloader" class="preloader ">
        <button class="th-btn preloaderCls">Bienvenidos :D</button>
        <div class="preloader-inner">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo.png" alt="">
        </div>

        <div id="loader" class="th-preloader">
            <div class="animation-preloader">
                <div class="txt-loading">
                    <span preloader-text="H" class="characters">H </span>

                    <span preloader-text="O" class="characters">O </span>

                    <span preloader-text="L" class="characters">L </span>

                    <span preloader-text="A" class="characters">A </span>

                    <span preloader-text=":D" class="characters">:D </span>
                </div>
            </div>
        </div>

    </div> 
<!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper onepage-nav">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="home-travel.html"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo.png" alt="Tourm"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="<?php echo home_url( '/' ); ?>">Inicio</a></li>
                    <li><a href="<?php echo home_url( '/nosotros/' ); ?>">Nos Presentamos</a></li>
                    <li><a href="<?php echo home_url( '/categoria-producto/grupales/' ); ?>">Salidas Grupales</a></li>
					<li><a href="<?php echo home_url( '/categoria-producto/inicoming/' ); ?>">Incoming</a></li>
                    <li><a href="<?php home_url( '/contacto/ '); ?>">Contacto</a></li>
                </ul>
            </div>
        </div>
    </div> 
<!--==============================
Header Area  
==============================-->
    <header class="th-header header-layout1 header-layout2">
        <div class="header-top">
            <div class="container th-container">
                <div class="row justify-content-center justify-content-lg-between align-items-center">
                    <div class="col-auto d-none d-md-block">
                        <div class="header-links">
                            <ul>
                                <li class="d-none d-xl-inline-block"><i class="fa-sharp fa-regular  fa-location-dot"></i>
                                    <span>Local virtual - La Plata, Argentina</span>
                                </li>
                                <li class="d-none d-xl-inline-block"><i class="fa-regular fa-clock"></i>
                                    <span>9hs a 18hs</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-right">
                            <div class="currency-menu">
                                <select class="form-select nice-select">
                                    <option selected="">Idiomas</option>
                                    <option>CNY</option>
                                    <option>EUR</option>
                                    <option>AUD</option>
                                </select>
                            </div>
                            <div class="header-links">
                                <ul>
                                    <li><a href="#login-form" class="popup-content">Ingresar / Registrarme<i class="fa-regular fa-user"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area" data-bg-src="<?php echo get_stylesheet_directory_uri();?>/assets/img/bg/line-pattern.png">
                <div class="container th-container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="home-travel.html"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo.png" alt="Tourm"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-xl-inline-block">
                                <ul>
                    <li><a href="<?php echo home_url( '/' ); ?>">Inicio</a></li>
                    <li><a href="<?php echo home_url( '/nosotros/' ); ?>">Nos Presentamos</a></li>
                    <li><a href="<?php echo home_url( '/categoria-producto/grupales/' ); ?>">Salidas Grupales</a></li>
					<li><a href="<?php echo home_url( '/categoria-producto/incoming/' ); ?>">Incoming</a></li>
                    <li><a href="<?php echo home_url( '/contacto/' ); ?>">Contacto</a></li>
                </ul>
                            </nav>
                            <button type="button" class="th-menu-toggle d-block d-xl-none"><i class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                <a href="presupuesto.html" class="th-btn style3 th-icon">Tu Presupuesto</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>