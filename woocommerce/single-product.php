<?php get_header(); ?>

 <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="<?php echo get_stylesheet_directory_uri();?>/assets/img/bg/breadcumb-bg-buzios.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php the_title(); ?></h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo home_url('/'); ?>">Inicio</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('product'); ?>">Tours</a></li>
                </ul>
            </div>
        </div>
    </div><!--==============================
tour Area
==============================-->
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="page-single">
                        <!-- Slider de imágenes -->
                        <div class="slider-area tour-slider1">
                            <div class="swiper th-slider mb-4" id="tourSlider4">
                                <div class="swiper-wrapper">
                                    <?php
                                    global $product; // Accedemos al producto actual.
                                    
                                    if ($product) {
                                        // Obtenemos las imágenes de la galería del producto.
                                        $attachment_ids = $product->get_gallery_image_ids();

                                        // Incluimos la imagen principal del producto.
                                        $main_image_id = $product->get_image_id();
                                        if ($main_image_id) {
                                            array_unshift($attachment_ids, $main_image_id);
                                        }

                                        // Iteramos sobre las imágenes para mostrarlas en el slider.
                                        foreach ($attachment_ids as $attachment_id) {
                                            $image_url = wp_get_attachment_image_url($attachment_id, 'full');
                                            $image_alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
                                    ?>
                                            <div class="swiper-slide">
                                                <div class="tour-slider-img">
                                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <button data-slider-prev="#tourSlider4" class="slider-arrow style3 slider-prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/hero-arrow-left.svg" alt=""></button>
                            <button data-slider-next="#tourSlider4" class="slider-arrow style3 slider-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/hero-arrow-right.svg" alt=""></button>
                        </div>

						<br>
                        <div class="product-about">
                        	<h2 class="product-title"><?php the_title(); ?></h2>
                    	</div>
						<div class="page-content d-block">
                            <div class="page-meta mt-50 mb-45">
                            </div>
                            <h2 class="box-title">¿Cuál es la propuesta?</h2>

                            <?php the_content(); ?>

                            <h2 class="box-title">¿Qué incluye la propuesta?</h2>
							 <div class="checklist style2">
                                    <ul>
                                        <li>Aéreos a Rio de Janeiro de Aerolíneas Argentinas(Vuelo Directo). Incluye 1 equipaje de hasta 23kg en bodega</li>
                                        <li>Traslados a Buzios, de llegada y salida.</li>
                                        <li>Alojamiento: 7 noches en Hotel Buzios Espiritualidade</li>
                                        <li>Media Pensión. Alimentación Vegetariana. Desayuno + Almuerzo (sin bebidas)</li>
                                        <li>Clases de Yoga</li>
                                        <li>Meditación en el Oratorio y en el Laberinto de David</li>
                                        <li>Caminatas guiadas por la floresta a playas paradisíacas</li>
										<li>Actividades en Pirámide Sinética</li>
										<li>Kit Espiritual</li>
                                    </ul>
                               </div>
                            
							<br><br>
							<h2 class="box-title">¿Qué no incluye?</h2>
							 <div class="checklist style2">
                                    <ul>
                                        <li>Asistencia al viajero (Consultar precios promocionales vigentes)</li>
                                        <li>Comidas y Servicios no indicados en el itinerario.</li>
                                    </ul>
                               </div>
                            <blockquote>
                                <p>Join your neighbors for an eco-friendly social gathering as the day comes to a
                                    conclusion. Savor refreshments made with sustainable ingredients and have discussions on
                                    sustainable life. By fostering a sense of community.</p>
                                <cite>A tener en cuenta / Importante</cite>
                            </blockquote>
							
                            <p class="blog-text mb-35">Dinning: Prepare a dinner using fresh ingredients from your own garden
                                or the local CSA program. The energy-efficient appliances in your kitchen make cooking a
                                breeze while minimizing your overall energy consumption. Share a meal with neighbors, The
                                quiet night offers a peaceful ambiance, reinforcing the community's commitment to a
                                sustainable, low-impact lifestyle.</p>
                            <p class="blog-text mb-35">
                                Living sustainably at Realar Residence is more than a choice; it's an immersive experience
                                that shapes every moment of your day. From the moment you wake up in your solar-powered home
                                to the evening gatherings with like-minded neighbors</p>
                        <div class="product-about">
						<!-- <p class="price">Valor por <i class="far fa-user"> : u$d 1.285<del>u$d1.599</del></i></p> -->
                        <div class="actions">
                            <div class="quantity">
                                <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="1" title="Qty">
                                <button class="quantity-plus qty-btn"><i class="far fa-chevron-up"></i></button>
                                <button class="quantity-minus qty-btn"><i class="far fa-chevron-down"></i></button>
                            </div>
                            <button class="th-btn">Agregar a presupuesto</button>
                            <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                        </div>
						</div>
						</div>
						
                        <!-- Comment end --> <!-- Comment Form -->
                        <div class="th-comment-form ">
                            <div class="row">
                                <h3 class="blog-inner-title h4 mb-2">Dejanos tu consulta</h3>
                                <p class="mb-25">Puedes enviarnos una consulta directamente desde el formulario o agregarlo a tu presupuesto y enviar lo que te interesa todo junto.</p>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Nombre completo*" class="form-control" required>
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Tu Email*" class="form-control" required>
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea placeholder="Tu consulta*" class="form-control"></textarea>
                                    <i class="far fa-pencil"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <input type="checkbox" id="html">
                                    <label for="html">Guarda mi nombre, correo electrónico y sitio web en este navegador para la próxima vez que ingrese.</label>
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <button class="th-btn">Enviar consulta<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/plane2.svg" alt=""></button>
                                </div>
                            </div>
                        </div>
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
        <div class="shape-mockup shape1 d-none d-xxl-block" data-bottom="35%" data-right="12%">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/shape/shape_1.png" alt="shape">
        </div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-bottom="31%" data-right="8%">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/shape/shape_2.png" alt="shape">
        </div>
        <div class="shape-mockup shape3 d-none d-xxl-block" data-bottom="33%" data-right="5%">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/shape/shape_3.png" alt="shape">
        </div>
    </section>

<?php get_footer(); ?>