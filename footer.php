<?php
//template footer
?>

<!--==============================
	Footer Area
==============================-->
<footer class="footer-wrapper bg-title footer-layout2">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="home-travel.html"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo2.svg" alt="Tourm"></a>
                                </div>
                                <p class="about-text">En Namaste Viajes, creemos que cada aventura comienza con un sueño, y estamos aquí para hacerlo realidad.</p>
                                <div class="th-social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Links directos</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">

                                    <li><a href="<?php echo home_url( '/' ); ?>">Inicio</a></li>
                                    <li><a href="<?php echo home_url( '/nosotros/' ); ?>">Nos Presentamos</a></li>
                                    <li><a href="<?php echo home_url( '/categoria-producto/grupales/' ); ?>">Salidas Grupales</a></li>
                                    <li><a href="<?php echo home_url( '/categoria-producto/incoming/' ); ?>">Incoming</a></li>
                                    <li><a href="<?php echo home_url( '/contacto/' ); ?>">Contaco</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contactanos</h3>
                            <div class="th-widget-contact">
                                <div class="info-box_text">
                                    <div class="icon">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/phone.svg" alt="img">
                                    </div>
                                    <div class="details">
                                        <p><a href="tel:+01234567890" class="info-box_link">+54 9 2215 07-9520</a></p>
                                        <p><a href="tel:+09876543210" class="info-box_link">+54 9 2216 42-2475</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/envelope.svg" alt="img">
                                    </div>
                                    <div class="details">
                                        <p><a href="mailto:support24@tourm.com" class="info-box_link">info@namaste.tur.ar</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/location-dot.svg" alt="img"></div>
                                    <div class="details">
                                        <p>La Plata - Buenos Aires Argentina</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        button.th-btn {
                            background-color: #1ca8cb;
                            color: #fff;
                            border: unset;
                            border-radius: 50px;
                        }
                    </style>
                    <div class="col-md-6 col-xl-4">
                        <div class="widget mb-0 footer-widget">
                            <h4 class="widget_title">Recibí nuestras novedades</h4>
                            <div class="newsletter-widget">
                                <div class="footer-search-contact mt-30">
                                    <form>
                                        <input class="form-control" type="email" placeholder="Ingresa tu Email" wfd-id="id3">
                                    </form>
                                    <div class="footer-btn mt-10">
                                        <button type="submit" class="th-btn btn-fw style1">Suscribirme<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/plane2.svg" alt=""></button>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright 2024 <a href="home-travel.html">Namaste Wellness Trips</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-end d-none d-md-block">
                        <div class="footer-card">
                            <span class="title">Design By-<a href="mailto:support24@tourm.com" class="info-box_link">Polar Creativo</a></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="shape-mockup movingX d-none d-xxl-block" data-top="24%" data-left="5%">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/shape/shape_8.png" alt="shape">
        </div>
    </footer>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!--==============================
modal Area  
==============================-->
    <div id="login-form" class="popup-login-register mfp-hide">
        <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-menu" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="false">Loguearme</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-menu active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Registrarme</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h3 class="box-title mb-30">Inicia sesión en tu cuenta</h3>
                <div class="th-login-form">
                    <form action="<?php echo wp_login_url(); ?>" method="POST" class="login-form">
                        <div class="row">
                            <div class="form-group col-12">
                                <label>Usuario o Mail</label>
                                <input type="text" class="form-control" name="log" id="log" required="required">
                            </div>
                            <div class="form-group col-12">
                                <label>Contraseña</label>
                                <input type="password" class="form-control" name="pwd" id="pwd" required="required">
                            </div>

                            <div class="form-btn mb-20 col-12">
                                <button type="submit" class="th-btn btn-fw th-radius2">Ingresar</button>
                            </div>
                        </div>
                        <div id="forgot_url">
                            <a href="<?php echo wp_lostpassword_url(); ?>">Recuperar contraseña o usuario</a>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>

                </div>
            </div>
            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <h3 class="th-form-title mb-30">Iniciar registro</h3>
                <form action="<?php echo esc_url( wc_get_account_endpoint_url( 'register' ) ); ?>" method="post" class="login-form ajax-contact">
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="username">Usuario*</label>
                            <input type="text" class="form-control" name="username" id="username" required="required" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>">
                        </div>
                        <div class="form-group col-12">
                            <label for="firstname">Nombre*</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" required="required" value="<?php if ( ! empty( $_POST['firstname'] ) ) echo esc_attr( $_POST['firstname'] ); ?>">
                        </div>
                        <div class="form-group col-12">
                            <label for="lastname">Apellido*</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" required="required" value="<?php if ( ! empty( $_POST['lastname'] ) ) echo esc_attr( $_POST['lastname'] ); ?>">
                        </div>
                        <div class="form-group col-12">
                            <label for="email">Correo Electrónico*</label>
                            <input type="email" class="form-control" name="email" id="email" required="required" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>">
                        </div>
                        <div class="form-group col-12">
                            <label for="confirm_email">Confirmar Correo Electrónico*</label>
                            <input type="email" class="form-control" name="confirm_email" id="confirm_email" required="required">
                        </div>
                        <div class="form-group col-12">
                            <label for="password">Contraseña*</label>
                            <input type="password" class="form-control" name="password" id="password" required="required">
                        </div>
                        <div class="form-group col-12">
                            <label for="confirm_password">Confirmar Contraseña*</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" required="required">
                        </div>
                        <div class="statement">
                            <span class="register-notes">Se te enviará una contraseña por correo electrónico.</span>
                        </div>

                        <div class="form-btn mt-20 col-12">
                            <button type="submit" class="th-btn btn-fw th-radius2 ">Registrarme</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>


            </div>
        </div>
    </div>


    <style>
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:80px;
            right:15px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 2px 2px 3px #999;
            z-index:100;
        }
        .float:hover {
            text-decoration: none;
            color: #25d366;
            background-color:#fff;
        }

        .my-float{
            margin-top:16px;
        }
    |</style>
    <a href="https://api.whatsapp.com/send?phone=5492216824848&text=Hola%2C%20Quisiera%20solicitar%20un%20presupuesto." class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>
    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <!-- Jquery -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Swiper Js -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery-ui.min.js"></script>
    <!-- imagesloaded -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/isotope.pkgd.min.js"></script>
    <!-- gsap -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/gsap.min.js"></script>

    <!-- circle-progress -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/circle-progress.js"></script>

    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/matter.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/matterjs-custom.js"></script>


    <!-- nice select -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/nice-select.min.js"></script>

    <!-- Main Js File -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/main.js"></script>
	<?php wp_footer(); ?>
</body>

</html>