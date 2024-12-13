<?php 
/*
Template Name: Nosotros
*/
get_header(); ?>

    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="<?php echo get_stylesheet_directory_uri();?>/assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title" style="color: darkcyan">Somos Namaste Wellness Trips</h1>
                <ul class="breadcumb-menu" style="color: darkcyan">
                    <li><a href="index.html" style="color: darkcyan">Inicio</a></li>
                    <li style="color: darkcyan">Nos Presentamos</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
About Area  
==============================-->
    <div class="about-area position-relative overflow-hidden overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="img-box3">
                        <div class="img1">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/normal/about_3_1.jpg" alt="About">
                        </div>
                        <div class="img2">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/normal/about_3_2.jpg" alt="About">
                        </div>
                        <div class="img3 movingX">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/normal/about_3_3.jpg" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="ps-xl-4">
                        <div class="title-area mb-20">
                            <span class="sub-title style1 ">Bienvenidos</span>
                            <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">Nosotros somos Namaste Wellness Trips</h2>
                        </div>
                        <p class="pe-xl-5">Somos un equipo de profesionales apasionados por el turismo, con años de experiencia dedicados a hacer realidad los sueños de viajeros como tú.</p>
                        <p class="mb-30 pe-xl-5"> Nuestra creatividad y dedicación nos impulsan a diseñar paquetes turísticos únicos, pensados para que vivas momentos inolvidables y descubras el mundo de una manera especial. En Namaste Viajes, cada aventura es una oportunidad para crear recuerdos que atesorarás para siempre.</p>
                        <div class="about-item-wrap">
                            <div class="about-item style2">
                                <div class="about-item_img"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/about_1_1.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Viejes Exclusivos</h5>
                                    <p class="about-item_text">Diseñados a medida para que vivas experiencias únicas e inigualables en cada destino.</p>
                                </div>
                            </div>
                            <div class="about-item style2">
                                <div class="about-item_img"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/about_1_2.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Tu seguridad primero</h5>
                                    <p class="about-item_text">Tu seguridad es nuestra prioridad, asegurando cada detalle para un viaje sin preocupaciones.</p>
                                </div>
                            </div>
                            <div class="about-item style2">
                                <div class="about-item_img"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/about_1_3.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Guías Profesionales</h5>
                                    <p class="about-item_text">Expertos locales apasionados que harán de tu aventura un viaje lleno de conocimiento y encanto.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
<!--==============================
Team Area  
==============================-->
    <section class="team-area3 position-relative bg-top-center space" data-bg-src="<?php echo get_stylesheet_directory_uri();?>/assets/img/bg/team_bg_2.jpg">
        <div class="container z-index-common">
            <div class="title-area text-center">
                <span class="sub-title">Nuestro equipo</span>
                <h2 class="sec-title">Nos presentamos</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider teamSlider3 has-shadow" id="teamSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">

                        <?php
								// Consulta personalizada de productos de WooCommerce
								$args = array(
									'post_type' => 'partner', // Tipo de post: productos
									'posts_per_page' => -1, // Número de productos a mostrar
								);
								$loop = new WP_Query($args);

								if ($loop->have_posts()) :
									while ($loop->have_posts()) : $loop->the_post();
                                        $foto = get_field('foto');
                                        print_r($foto);
								        ?>
                                        <!-- Single Item -->

                                        <div class="swiper-slide">
                                            <div class="th-team team-grid">
                                                <div class="team-img">
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_img_1.jpg" alt="Team">
                                                </div>
                                                <div class="team-img2">
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_1_1.jpg" alt="Team">
                                                </div>
                                                <div class="team-content">
                                                    <div class="media-body">
                                                        <h3 class="box-title"><a href="tour-guider-details.html"><?php the_title(); ?></a></h3>
                                                        <span class="team-desig"><?php the_field('cargo'); ?></span>

                                                        <div class="th-social">
                                                            <a target="_blank" href="<?php the_field('facebook'); ?>"><i class="fab fa-facebook-f"></i></a>
                                                            <a target="_blank" href="<?php the_field('linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a>
                                                            <a target="_blank" href="<?php the_field('instagram'); ?>"><i class="fab fa-instagram"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<!--iv class="swiper-slide">
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
														<span><i class="fa-light fa-clock"></i><?php echo get_field('dias', get_the_ID()); // Campo ACF para duración ?></span>
														<a href="<?php echo get_permalink(); ?>" class="th-btn style4 th-icon">Ver info</a>
													</div>
												</div>
											</div>
										</div-->
								<?php
									endwhile;
									wp_reset_postdata(); // Restablecer datos globales de consulta
								else :
									echo '<p>No hay productos disponibles en esta categoría.</p>';
								endif;
						?>
                        <!-- Single Item -->

                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_img_1.jpg" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_1_1.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Cecilia Namaste</a></h3>
                                        <span class="team-desig">Ceo & founder</span>

                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_img_1.jpg" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_1_2.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Ailen Willson</a></h3>
                                        <span class="team-desig">Recepcionista</span>
                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_img_1.jpg" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_1_3.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Lucia Jones</a></h3>
                                        <span class="team-desig">Secretaria administrativa</span>
										<div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_img_1.jpg" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_1_4.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Paula Prova</a></h3>
                                        <span class="team-desig">Guia turística</span>
										<div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_img_1.jpg" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_1_5.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Sandra Maliha</a></h3>
                                        <span class="team-desig">Guia turística</span>
										<div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_img_1.jpg" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_1_6.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Daiane Mahmud</a></h3>
                                        <span class="team-desig">Guia turística</span>
										<div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_img_1.jpg" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_1_7.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Mariela Hawkins</a></h3>
                                        <span class="team-desig">Guia turística</span>
										<div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_img_1.jpg" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/team/team_1_8.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Mariana Wilson</a></h3>
                                        <span class="team-desig">Guia turística</span>
										<div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="slider-pagination"></div>

                </div>
                <button data-slider-prev="#teamSlider3" class="slider-arrow slider-prev"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/right-arrow2.svg" alt=""></button>
                <button data-slider-next="#teamSlider3" class="slider-arrow slider-next"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/left-arrow2.svg" alt=""></button>
            </div>
        </div>
    </section>

<?php get_footer(); ?>