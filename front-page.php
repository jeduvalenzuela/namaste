<?php
get_header();
// template front page
?>

<!--==============================
Hero Area
==============================-->
<div class="hero-2" id="hero">
        <div class="hero2-overlay" data-bg-src="<?php echo get_stylesheet_directory_uri();?>/assets/img/bg/line-pattern.png"></div>
        <div class="swiper hero-slider-2" id="heroSlide2">
            <div class="swiper-wrapper">
                
                


                <?php
								// Consulta personalizada de productos de WooCommerce
								$args = array(
									'post_type' => 'slider', // Tipo de post: productos
									'posts_per_page' => -1, // Número de productos a mostrar
								);
								$loop = new WP_Query($args);

								if ($loop->have_posts()) :
									while ($loop->have_posts()) : $loop->the_post();
                                        $foto = get_field('foto');
                                        if ($foto) {
                                            echo print_r($foto);
                                            //$url_foto = $foto['sizes']['medium'];
                                        }
                                        $video = get_field('video');
                                        if ($video) {
                                            echo print_r($video);
                                            //$url_foto = $video['sizes']['medium'];
                                        }
                                         
								        ?>
                                        

                                        <div class="swiper-slide">
                                            <div class="hero-inner">

                                                <?php if (!empty($video)) { ?>
                                                    <video autoplay loop muted>
                                                        <source src="<?php echo get_stylesheet_directory_uri();?>/assets/img/hero/hero-video.mp4" type="video/mp4">
                                                    </video>
                                                <?php }else{ ?>
                                                    <div class="th-hero-bg" data-bg-src="<?php echo get_stylesheet_directory_uri();?>/assets/img/hero/hero_bg_2_1.jpg">
                                                    </div>
                                                <?php } ?>

                                                <div class="container">
                                                    <div class="hero-style2">
                                                        <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                                            <?php the_title(); ?> <span class="hero-text"><?php the_field('intro'); ?></span>
                                                        </h1>
                                                        
                                                        <div class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">
                                                            <?php the_field('descripcion'); ?>
                                                        </div>
                                                        <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                                            <a href="<?php the_field('link'); ?>" class="th-btn white-btn th-icon">Ver info</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
								<?php
									endwhile;
									wp_reset_postdata(); // Restablecer datos globales de consulta
								else :
									echo '<p>No hay productos disponibles en esta categoría.</p>';
								endif;
				?>

                <!--div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="<?php echo get_stylesheet_directory_uri();?>/assets/img/hero/hero_bg_2_1.jpg">
                        </div>
                        <div class="container">
                            <div class="hero-style2">
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    Enjoy Disney <span class="hero-text">Salidas desde Córdoba, Rosario & Bs.As.</span>
                                </h1>
                                <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">
                                    Tus 15 en un lugar mágico.
									<br>¡Vos, tus amigas y mucha diversión!
                                </p>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="salidasgrupales.html" class="th-btn white-btn th-icon">Ver info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <video autoplay loop muted>
                            <source src="<?php echo get_stylesheet_directory_uri();?>/assets/img/hero/hero-video.mp4" type="video/mp4">
                        </video>

                        <div class="container">
                            <div class="hero-style2">
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    Búzios Espiritual<span class="hero-text">Sintonizá con la Naturaleza</span>
                                </h1>
                                <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">
                                    Te invitamos a que tengas unos días de conexión con tu interior en completa sintonía con la Naturaleza; en un lugar mágico, rodeado de vegetación y frente al mar
                                </p>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="salidasgrupales.html" class="th-btn white-btn th-icon">Explore Tours</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div-->
            </div>
            <div class="th-swiper-custom">
                <div class="swiper-pagination"></div>
                <div class="hero-icon">
                    <button data-slider-prev="#heroSlide2, #heroSlide3" class="hero-arrow slider-prev"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/hero-arrow-left.svg" alt=""></button>
                    <button data-slider-next="#heroSlide2, #heroSlide3" class="hero-arrow slider-next"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/hero-arrow-right.svg" alt=""></button>
                </div>
            </div>
        </div>


        <div class="swiper heroThumbs" id="heroSlide3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="hero-card">
                            <div class="hero-img">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/hero/hero_bg_2_1.jpg" alt="">
                            </div>
                            <div class="hero-card_content">
                                <h3 class="box-title">Enjoy Disney</h3>
                                <h4 class="hero-card_price"><span class="currency">u$s 3.790</span> x persona</h4>
                                <span><i class="fa-light fa-clock"></i>8 Días</span>
                                <a href="detalle-viaje.html" class="th-btn style2">Ver info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="hero-card">
                            <div class="hero-img">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/hero/hero_bg_2_2.jpg" alt="">
                            </div>
                            <div class="hero-card_content">
                                <h3 class="box-title">Búzios Espiritual</h3>
                                <h4 class="hero-card_price"><span class="currency">u$d 1.750</span> x persona </h4>
                                <span><i class="fa-light fa-clock"></i>6 Days</span>
                                <a href="detalle-viaje.html" class="th-btn style2">Ver info</a>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="hero-card">
                            <div class="hero-img">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/hero/hero_bg_2_2.jpg" alt="">
                            </div>
                            <div class="hero-card_content">
                                <h3 class="box-title">Búzios Espiritual</h3>
                                <h4 class="hero-card_price"><span class="currency">u$d 1.750</span> x persona </h4>
                                <span><i class="fa-light fa-clock"></i>6 Days</span>
                                <a href="detalle-viaje.html" class="th-btn style2">Ver info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-down">
            <a href="#destination-sec" class="scroll-wrap"><span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/down-arrow.svg" alt=""></span>
                Scrolea</a>
        </div>
    </div>



    <!--======== / Hero Section ========--><!--==============================
destination Area  
==============================-->
    <div class="destination-area bg-top-center position-relative space" id="destination-sec" data-bg-src="<?php echo get_stylesheet_directory_uri();?>/assets/img/bg/line-pattern2.png">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Nuestros Servicios</span>
                <h2 class="sec-title">¿Cómo vas a vivir tu próximo viaje?</h2>
            </div>
            <div class="row">
                <div class="destination-list-area">
                    <div class="destination-list-wrap">
                        <div class="destination-list" data-bg-src="<?php echo get_stylesheet_directory_uri();?>/assets/img/destination/destination_2_2.jpg">
                            <div class="destination-content">
                                <h4 class="box-title">
                                    <a href="<?php echo home_url( '/categoria-producto/paquetes/' ); ?>">Paquetes</a>
                                </h4>
                                <span class="destination-subtitle">Todo listo<br>para disfrutar!</span>
                            </div>
                            <a href="<?php echo home_url( '/categoria-producto/paquetes/' ); ?>" class="th-btn style2">Ver info</a>
                        </div>
                    </div>
                    <div class="destination-list-wrap">
                        <div class="destination-list" data-bg-src="<?php echo get_stylesheet_directory_uri();?>/assets/img/destination/destination_2_3.jpg">
                            <div class="destination-content">
                                <h4 class="box-title">
                                    <a href="<?php echo home_url( '/categoria-producto/incoming/' ); ?>">Incoming</a>
                                </h4>
                                <span class="destination-subtitle">Descubrí Argentina, <br>Brasil y Chile</span>
                            </div>
                            <a href="<?php echo home_url( '/categoria-producto/incoming/' ); ?>" class="th-btn style2">Ver info</a>
                        </div>
                    </div>
                    <div class="destination-list-wrap active">
                        <div class="destination-list" data-bg-src="<?php echo get_stylesheet_directory_uri();?>/assets/img/destination/destination_2_4.jpg">
                            <div class="destination-content">
                                <h4 class="box-title">
                                    <a href="<?php echo home_url( '/categoria-producto/grupales/' ); ?>">Salidas Grupales</a>
                                </h4>
                                <span class="destination-subtitle">25 Listing</span>
                            </div>
                            <a href="<?php echo home_url( '/categoria-producto/grupales/' ); ?>" class="th-btn style2">Ver info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup movingX d-none d-xl-block" data-top="8%" data-left="5%">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/shape/shape_2_1.png" alt="shape">
        </div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="23%" data-right="4%">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/shape/shape_2_2.png" alt="shape">
        </div>
        <div class="shape-mockup spin d-none d-xl-block" data-bottom="21%" data-left="4%">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/shape/shape_2_3.png" alt="shape">
        </div>
        <div class="shape-mockup movingX d-none d-xl-block" data-bottom="12%" data-right="4%">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/shape/shape_2_4.png" alt="shape">
        </div>
    </div>
<!--==============================
Category Area  
==============================-->
<section class="position-relative bg-top-center overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        <span class="sub-title">Destacados 2024</span>
                        <h2 class="sec-title">Salidas Grupales increíble</h2>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade active show" id="nav-step1" role="tabpanel">
					<div class="slider-area tour-slider slider-drag-wrap">
						<div class="swiper th-slider has-shadow" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
							<div class="swiper-wrapper">
								<?php
								// Consulta personalizada de productos de WooCommerce
								$args = array(
									'post_type' => 'product', // Tipo de post: productos
									'posts_per_page' => 10, // Número de productos a mostrar
									'product_cat' => 'grupales', // Slug de la categoría
									'post_status' => 'publish' // Solo productos publicados
								);
								$loop = new WP_Query($args);

								if ($loop->have_posts()) :
									while ($loop->have_posts()) : $loop->the_post();
										$product = wc_get_product(get_the_ID()); // Obtener producto actual
								?>
										<div class="swiper-slide">
											<div class="tour-box th-ani gsap-cursor">
												<div class="tour-box_img global-img">
													<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php echo get_the_title(); ?>">
												</div>
												<div class="tour-content">
													<h3 class="box-title"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
													<div class="tour-rating"><i class="fa-light fa-calendar"></i>
														<a href="<?php echo get_permalink(); ?>" class="woocommerce-review-link">
															Salida: <strong><?php echo get_field('salidas', get_the_ID()); // Campo ACF para fecha de salida ?></strong>
														</a>
													</div>
													<h4 class="tour-box_price"><span class="currency"><?php echo $product->get_price_html(); ?></span>/x Persona</h4>
													<div class="tour-action">
														<span><i class="fa-light fa-clock"></i><?php echo get_field('dias', get_the_ID()); // Campo ACF para duración ?> Dias</span>
														<a href="<?php echo get_permalink(); ?>" class="th-btn style4 th-icon">Ver info</a>
													</div>
												</div>
											</div>
										</div>
								<?php
									endwhile;
									wp_reset_postdata(); // Restablecer datos globales de consulta
								else :
									echo '<p>No hay productos disponibles en esta categoría.</p>';
								endif;
								?>
							</div>
							<div class="slider-pagination"></div>
						</div>
						<div class="destination-btn text-center mt-50">
							<a href="<?php echo home_url( '/categoria-producto/grupales/' ); ?>" class="th-btn style3 th-icon">Ver más Salidas Grupales</a>
						</div>
					</div>
				</div>
			</div>

        </div>
    </section><!--==============================
Gallery Area  
==============================-->        
<!--==============================
Gallery Area  
==============================-->
    <div class=" bg-top-center space" data-bg-src="<?php echo get_stylesheet_directory_uri();?>/assets/img/bg/gallery_bg_1.jpg">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-7">
                    <div class="title-area text-center text-lg-start mb-20 pe-xl-5 me-xl-5">
                        <span class="sub-title">Experiencias que Inspiran</span>
                        <h2 class="sec-title">Historias capturadas por nuestros viajeros</h2>
                    </div>
                    <p class="sec-text style2 text-title mb-50">Revive las emociones y paisajes de quienes confiaron en nosotros para hacer realidad sus sueños de viaje. Cada foto es un recuerdo lleno de magia</p>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="gallery.html" class="th-btn style3 th-icon">Ver Galeria</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container th-container2">
            <div class="row gy-24 gx-24 justify-content-center">
                <div class="col-lg-3 gallery-box_wrapp">
                    <div class="gallery-box">
                        <div class="gallery-img global-img">
                            <a href="<?php echo get_stylesheet_directory_uri();?>/assets/img/gallery/gallery_2_1.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/gallery/gallery_2_1.jpg" alt="gallery image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gallery-box_wrapp">
                    <div class="gallery-box">
                        <div class="gallery-img global-img">
                            <a href="<?php echo get_stylesheet_directory_uri();?>/assets/img/gallery/gallery_2_2.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/gallery/gallery_2_2.jpg" alt="gallery image">
                            </a>
                        </div>
                    </div>
                    <div class="gallery-box">
                        <div class="gallery-img global-img">
                            <a href="<?php echo get_stylesheet_directory_uri();?>/assets/img/gallery/gallery_2_3.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/gallery/gallery_2_3.jpg" alt="gallery image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gallery-box_wrapp">
                    <div class="gallery-box">
                        <div class="gallery-img global-img">
                            <a href="<?php echo get_stylesheet_directory_uri();?>/assets/img/gallery/gallery_2_4.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/gallery/gallery_2_4.jpg" alt="gallery image">
                            </a>
                        </div>
                    </div>
                    <div class="gallery-box">
                        <div class="gallery-img global-img">
                            <a href="<?php echo get_stylesheet_directory_uri();?>/assets/img/gallery/gallery_2_5.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/gallery/gallery_2_5.jpg" alt="gallery image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gallery-box_wrapp">
                    <div class="gallery-box">
                        <div class="gallery-img global-img">
                            <a href="<?php echo get_stylesheet_directory_uri();?>/assets/img/gallery/gallery_2_6.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/gallery/gallery_2_6.jpg" alt="gallery image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup movingX d-none d-xl-block" data-bottom="35%" data-right="4%">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/shape/shape_2_1.png" alt="shape">
        </div>
        <div class="shape-mockup movingX d-none d-xl-block" data-bottom="8%" data-left="10%">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/shape/shape_2_4.png" alt="shape">
        </div>
    </div>
<!--==============================
Brand Area  
==============================-->
    <div class="brand-area overflow-hidden space-bottom">
        <div class="container th-container">
            <div class="swiper th-slider brandSlider1" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                                <img class="gray" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_2.svg" alt="Brand Logo">
                                <img class="gray" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_2.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_3.svg" alt="Brand Logo">
                                <img class="gray" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_3.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_4.svg" alt="Brand Logo">
                                <img class="gray" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_4.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_5.svg" alt="Brand Logo">
                                <img class="gray" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_5.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_6.svg" alt="Brand Logo">
                                <img class="gray" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_6.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_7.svg" alt="Brand Logo">
                                <img class="gray" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_7.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_8.svg" alt="Brand Logo">
                                <img class="gray" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_8.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_4.svg" alt="Brand Logo">
                                <img class="gray" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_4.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_3.svg" alt="Brand Logo">
                                <img class="gray" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_3.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_2.svg" alt="Brand Logo">
                                <img class="gray" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_2.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                                <img class="gray" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div><!--==============================
Blog Area  
==============================-->
    <section class="bg-smoke overflow-hidden space-top" id="blog-sec">
        <div class="container">
            <div class="mb-30 text-center text-md-start">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-7">
                        <div class="title-area mb-md-0">
                            <span class="sub-title">Incoming</span>
                            <h2 class="sec-title">Top 3 de este del mes</h2>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <a href="<?php echo home_url( '/categoria-producto/incoming/' ); ?>" class="th-btn style4 th-icon">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        
                    <?php
								// Consulta personalizada de productos de WooCommerce
								$args = array(
									'post_type' => 'product', // Tipo de post: productos
									'posts_per_page' => 10, // Número de productos a mostrar
									'product_cat' => 'incoming', // Slug de la categoría
									'post_status' => 'publish' // Solo productos publicados
								);
								$loop = new WP_Query($args);

								if ($loop->have_posts()) :
									while ($loop->have_posts()) : $loop->the_post();
										$product = wc_get_product(get_the_ID()); // Obtener producto actual
								?>

                                        <div class="swiper-slide">
                                            <div class="tour-box th-ani gsap-cursor">
                                                <div class="tour-box_img global-img">
                                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php echo get_the_title(); ?>">
                                                </div>
                                                <div class="tour-content">
                                                    <h3 class="box-title"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                                                    <div class="tour-rating"><i class="fa-light fa-calendar"></i>
                                                        <a href="<?php echo get_permalink(); ?>" class="woocommerce-review-link">Salida: <strong><?php echo get_field('salidas', get_the_ID()); // Campo ACF para fecha de salida ?></strong></a>
                                                    </div>
                                                    <h4 class="tour-box_price"><span class="currency">u$d 2.547</span>/x Persona</h4>
                                                    <div class="tour-action">
                                                        <span><i class="fa-light fa-clock"></i><?php echo get_field('dias', get_the_ID()); // Campo ACF para duración ?> Días</span>
                                                        <a href="<?php echo get_permalink(); ?>" class="th-btn style4 th-icon">Ver info</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
								<?php
									endwhile;
									wp_reset_postdata(); // Restablecer datos globales de consulta
								else :
									echo '<p>No hay productos disponibles en esta categoría.</p>';
								endif;
								?>

                        <div class="swiper-slide">
                                    <div class="tour-box th-ani gsap-cursor">
                                        <div class="tour-box_img global-img">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/tour/tour_box_8.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="tour-details.html">Rivera Maya con Iberostar</a></h3>
                                            <div class="tour-rating"><i class="fa-light fa-calendar"></i>
                                                <a href="tour-details.html" class="woocommerce-review-link">Salida: <strong>Marzo del 2025</strong></a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">u$d 2.547</span>/x Persona</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>8 Días</span>
                                                <a href="contacto.html" class="th-btn style4 th-icon">Ver info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <div class="swiper-slide">
                                    <div class="tour-box th-ani gsap-cursor">
                                        <div class="tour-box_img global-img">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/tour/tour_box_7.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="tour-details.html">Fortaleza & Jericoacoara</a></h3>
                                            <div class="tour-rating"><i class="fa-light fa-calendar"></i>
                                                <a href="tour-details.html" class="woocommerce-review-link">Salida: <strong>01 al 08 de abril 2024</strong></a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">u$d 1.388</span>/x Persona</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>8 Días</span>
                                                <a href="contacto.html" class="th-btn style4 th-icon">Ver info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <div class="swiper-slide">
                                    <div class="tour-box th-ani gsap-cursor">
                                        <div class="tour-box_img global-img">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/tour/tour_box_6.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="tour-details.html">Explora Machu Pichu</a></h3>
                                            <div class="tour-rating"><i class="fa-light fa-calendar"></i>
                                                <a href="tour-details.html" class="woocommerce-review-link">Salida: <strong>Todo el año</strong></a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">u$d 695</span>/x Persona</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Noches</span>
                                                <a href="contacto.html" class="th-btn style4 th-icon">Ver info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup shape1 d-none d-xxl-block" data-top="14%" data-right="9%">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/shape/shape_1.png" alt="shape">
        </div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-top="25%" data-right="6%">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/shape/shape_2.png" alt="shape">
        </div>
        <div class="shape-mockup shape3 d-none d-xxl-block" data-top="15%" data-right="4%">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/shape/shape_3.png" alt="shape">
        </div>
    </section><!--==============================
elements Area  
==============================-->
    <div class="elements-sec bg-smoke overflow-hidden">
        <div class="container-fluid">
            <div class="tags-container relative"></div>
        </div>
    </div>

<?php get_footer(); ?>