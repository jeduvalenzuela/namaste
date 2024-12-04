<?php get_header(); ?>


<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="<?php echo get_stylesheet_directory_uri();?>/assets/img/bg/breadcumb-bg2.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title" style="color: darkcyan">Salidas Grupales</h1>
            </div>
        </div>
    </div>
    
    
    
    
    <!--==============================
Product Area
==============================-->
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="tab-grid" role="tabpanel" aria-labelledby="tab-destination-grid">
                            <div class="row gy-24 gx-24">

                                <?php

                                woocommerce_product_loop_start();

                                if (wc_get_loop_prop('total')) {
                                    while (have_posts()) {
                                        the_post();

                                        /**
                                         * Hook: woocommerce_shop_loop.
                                         *
                                         * Agrega clases o atributos al loop de productos.
                                         */
                                        do_action('woocommerce_shop_loop');

                                        wc_get_template_part('content', 'product'); // Carga la plantilla del producto individual.
                                    }
                                }

                                woocommerce_product_loop_end();

                                ?>

                                <!--div class="col-md-6">
                                    <div class="tour-box th-ani">
                                        <div class="tour-box_img global-img">
                                            <a href="detalle-viaje.html" class="woocommerce-review-link"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/tour/tour_box_1.jpg" alt="image"></a>
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="tour-details.html">Akamana Sheskin Ushuaia</a></h3>
                                            <div class="tour-rating"><i class="fa-light fa-calendar"></i>
                                                <a href="detalle-viaje.html" class="woocommerce-review-link">Salida: <strong>01 al 08 de abril 2024</strong></a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">u$d 980.00</span>/x Persona</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Días</span>
                                                <a href="detalle-viaje.html" class="th-btn style4 th-icon">Ver info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="tour-box th-ani">
                                        <div class="tour-box_img global-img">
                                            <a href="detalle-viaje.html" class="woocommerce-review-link"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/tour/tour_box_2.jpg" alt="image"></a>
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="tour-details.html">Camino de Sntiago de Compostela</a></h3>
                                            <div class="tour-rating"><i class="fa-light fa-calendar"></i>
                                                <a href="detalle-viaje.html" class="woocommerce-review-link">Salida: <strong>01 al 08 de abril 2024</strong></a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">u$d 980.00</span>/x Persona</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Días</span>
                                                <a href="detalle-viaje.html" class="th-btn style4 th-icon">Ver info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="tour-box th-ani gsap-cursor">
                                        <div class="tour-box_img global-img">
                                            <a href="detalle-viaje.html" class="woocommerce-review-link"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/tour/tour_box_3.jpg" alt="image"></a>
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="tour-details.html">Búzios Espiritual</a></h3>
                                            <div class="tour-rating"><i class="fa-light fa-calendar"></i>
                                                <a href="detalle-viaje.html" class="woocommerce-review-link">Salida: <strong>01 al 08 de abril 2024</strong></a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">u$d 980.00</span>/x Persona</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Días</span>
                                                <a href="detalle-viaje.html" class="th-btn style4 th-icon">Ver info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="tour-box th-ani gsap-cursor">
                                        <div class="tour-box_img global-img">
                                            <a href="detalle-viaje.html" class="woocommerce-review-link"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/tour/tour_box_4.jpg" alt="image"></a>
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="tour-details.html">Retiro Comer, Rezar y Amar en tierras de México</a></h3>
                                            <div class="tour-rating"><i class="fa-light fa-calendar"></i>
                                                <a href="detalle-viaje.html" class="woocommerce-review-link">Salida: <strong>01 al 08 de abril 2024</strong></a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">u$d 980.00</span>/x Persona</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Días</span>
                                                <a href="detalle-viaje.html" class="th-btn style4 th-icon">Ver info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="tour-box th-ani gsap-cursor">
                                        <div class="tour-box_img global-img">
                                           <a href="detalle-viaje.html" class="woocommerce-review-link"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/tour/tour_box_5.jpg" alt="image"></a>
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="tour-details.html">Camino de Sntiago de Compostela</a></h3>
                                            <div class="tour-rating"><i class="fa-light fa-calendar"></i>
                                                <a href="detalle-viaje.html" class="woocommerce-review-link">Salida: <strong>01 al 08 de abril 2024</strong></a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">u$d 980.00</span>/x Persona</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Días</span>
                                                <a href="detalle-viaje.html" class="th-btn style4 th-icon">Ver info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div-->
                            </div>
                        </div>
                    </div>
                    <div class="th-pagination text-center mt-60 mb-0">
                        <ul>
                            <li><a class="active" href="salidasgrupales.html">1</a></li>
                            <li><a href="salidasgrupales.html">2</a></li>
                            <li><a href="salidasgrupales.html">3</a></li>
                            <li><a href="salidasgrupales.html">4</a></li>
                            <li><a class="next-page" href="salidasgrupales.html">Next <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/arrow-right4.svg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
				
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area style2">
						<div class="widget widget_search  ">
                            <form class="search-form">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>

                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Categorias</h3>
                            <ul>
                                <li>
                                    <a href="blog.html"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/theme-img/map.svg" alt="">City Tour</a>
                                    <span>(8)</span>
                                </li>
                                <li>
                                    <a href="blog.html"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/theme-img/map.svg" alt="">Playas y Relax</a>
                                    <span>(6)</span>
                                </li>
                                <li>
                                    <a href="blog.html"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/theme-img/map.svg" alt="">Viajes de Aventura</a>
                                    <span>(2)</span>
                                </li>
                                <li>
                                    <a href="blog.html"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/theme-img/map.svg" alt="">Nuevas Culturas</a>
                                    <span>(9)</span>
                                </li>
                                <li>
                                    <a href="blog.html"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/theme-img/map.svg" alt="">Turismo religioso</a>
                                    <span>(10)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_offer  " data-bg-src="<?php echo get_stylesheet_directory_uri();?>/assets/img/bg/widget_bg_1.jpg">
                            <div class="offer-banner">
                                <div class="offer">
                                    <h6 class="box-title">Espacio publicitario</h6>
                                    <div class="banner-logo">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo.svg" alt="Tourm">
                                    </div>
                                    <div class="offer">
                                        <h6 class="offer-title">Llamado a la acción</h6>
                                        <a class="offter-num" href="+256214203215">+123 4567 8912</a>
                                    </div>
                                    <a href="contacto.html" class="th-btn style2 th-icon">Comunicarme</a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>

            </div>

        </div>
    </section>

<?php get_footer(); ?>