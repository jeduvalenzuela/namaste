<?php
get_header();
// template front page
?>


			<section class="page_slider slider-1">
				<div class="flexslider">
					<ul class="slides">
					<?php // Configurar los argumentos para WP_Query
							$args = array(
								'post_type' => 'slider',
								'posts_per_page' => 5, // Número de posts a mostrar, puedes cambiarlo según sea necesario
							);

							// Crear la consulta personalizada
							$slider = new WP_Query($args);

							// Comprobar si hay posts
							if ($slider->have_posts()) :
								// Iniciar el loop
								while ($slider->have_posts()) : $slider->the_post();
									$color_texto = get_field('color_texto');
									if(!empty($color_texto)){
										$style = 'style="color:' . $color_texto . '"';
										$style_t = 'style="color:' . $color_texto . '"';
									}else{
										$style = '';
										$style_t = '';
									}	
									$image = get_field('imagen');								
									?>

									<li class="ls cover-image text-center text-lg-left">
										<?php if( $image ) {
											// Si hay una imagen, muestra la etiqueta HTML de la imagen
											echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
										} ?>
										<div class="container">
											<div class="row">
												<div class="col-12">
													<div class="intro_layers_wrapper">
														<div class="intro_layers">
															<div class="intro_layer" data-animation="fadeInRight">
																<div class="divider-90"></div>
																<div class="d-inline-block">
																	<h3 class="intro_before_featured_word" <?php echo $style; ?>>
																		<?php the_field('slogan'); ?>
																	</h3>
																	<h2 class="intro_featured_word" <?php echo $style_t; ?>>
																		<?php the_title(); ?>
																	</h2>
																</div>
															</div>
															<div class="intro_layer" data-animation="fadeInUp">
																<a href="<?php the_field('enlace'); ?>" class="btn btn-maincolor btn-slider btn-medium"><?php the_field('texto_boton'); ?></a>
															</div>
														</div> <!-- eof .intro_layers -->
													</div> <!-- eof .intro_layers_wrapper -->
												</div> <!-- eof .col-* -->
											</div><!-- eof .row -->
										</div><!-- eof .container-fluid -->
									</li>

									<?php
								endwhile;
								// Restaurar la consulta global de post
								wp_reset_postdata();
							else :
							endif; 
						?>

<!--
						<li class="ls cover-image text-center text-lg-left">
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/slide02.jpg" alt="img">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<div class="divider-90"></div>
													<div class="d-inline-block">
														<h3 class="intro_before_featured_word">
															Nada con lobos marinos
														</h3>
														<h2 class="intro_featured_word">
															Snorkeling
														</h2>
													</div>
												</div>
												<div class="intro_layer" data-animation="fadeInUp">
													<a href="snorkeling_con_lobos_marinos.html" class="btn btn-maincolor btn-slider btn-medium">Animate</a>
												</div>
											</div>
										</div> 
									</div> 
								</div>
							</div>
						</li>
						<li class="ds cover-image text-center text-lg-left">
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/slide01.jpg" alt="img">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<div class="divider-90"></div>
													<div class="d-inline-block">
														<h3 class="intro_before_featured_word">
															Tu proxima experiencia
														</h3>
														<h2 class="intro_featured_word">
															Buceo con Lobos marinos
														</h2>
													</div>
												</div>
												<div class="intro_layer" data-animation="fadeInUp">
													<a href="buceo_con_lobos_marinos.html" class="btn btn-maincolor btn-slider btn-medium">Animate</a>
												</div>
											</div> 
										</div> 
									</div> 
								</div>
							</div>
						</li>
						<li class="ds cover-image text-center text-lg-left">
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/slide03.jpg" alt="img">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<div class="divider-90"></div>
													<div class="d-inline-block">
														<h3 class="intro_before_featured_word">
															Navega junto a los
														</h3>
														<h2 class="intro_featured_word">
															Delfines
														</h2>
													</div>
												</div>
												<div class="intro_layer" data-animation="fadeInUp">
													<a href="#" class="btn btn-maincolor btn-slider btn-medium">Animate</a>
												</div>
											</div> 
										</div> 
									</div>
								</div>
							</div>
						</li> -->
					</ul>
				</div> <!-- eof flexslider -->
			</section>

			<section id="about" class="ls ms section-about s-py-90 s-py-xl-160 text-center text-md-left">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<p class="text-center text-md-left color-darkgrey mb-1">
								<span class="line-left"><?php the_field('rotulo_bienvenida'); ?></span>
							</p>
							<h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
								<span><?php the_field('titulo_bienvenida'); ?></span>
							</h3>
							<p class="text-center text-md-left color-darkgrey fs-20 fw-500">
								<span><?php the_field('subtitulo_bienvenida'); ?></span>
							</p>
							<div class="divider-40 divider-xl-50"></div>
							<div class="border-left-custom">
								<p>
								<?php the_field('descripcion_bienvenida'); ?>
								</p>
							</div>
							<div class="divider-40 divider-xl-50"></div>
							<div class="several-buttons">
								<a href="<?php the_field('enlace'); ?>" class="btn btn-maincolor btn-medium"><?php the_field('texto_boton'); ?></a>
							</div>
							<div class="divider-60 divider-lg-0"></div>
						</div>
						<div class="col-lg-6 mr--100-xl-with-scale">
							<div class="post_format-post-format-video">
								<div class="embed-responsive embed-responsive-3by2">
									<a href="<?php the_field('link_youtube'); ?>" class="embed-placeholder">
										<?php $image_id = get_field('imagen_bienvenida');
										if( $image_id ) {
										   // Si hay una imagen, muestra la etiqueta HTML de la imagen
										   echo '<img src="' . esc_url($image_id['url']) . '" alt="' . esc_attr($image_id['alt']) . '" />';
									   	} ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="services" class=" s-py-90 s-py-xl-160">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 col-xl-3 section-special small-section">
							<div>
								<div class="content-center">
									<p class="text-center text-lg-left color-darkgrey mb-1">
										<span class="line-left">Nuestros Servicios</span>
									</p>
									<h3 class="text-center text-lg-left mt-0 mb-2 special-heading color-darkgrey">
										<span>Viví tu próxima<br> experiencia!</span>
									</h3>
									<div class="divider-35"></div>
									<div class="owl-custom-nav hidden-below-lg">
										<a href="#" class="owl-prev"><i class="fa fa-chevron-left"></i></a>
										<a href="#" class="owl-next"><i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-9">
							<div class="quote-carousel owl-carousel" data-margin="50" data-responsive-xl="4" data-responsive-ml="3" data-responsive-lg="2" data-responsive-md="1" data-responsive-sm="2" data-responsive-xs="1" data-dots="false" data-loop="true" data-autoplay="true">
								
								<?php // Configurar los argumentos para WP_Query
									$category = get_category_by_slug('excursiones');

									$args = array(
										'post_type' => 'post',
										'posts_per_page' => 5,
										'order' => 'rand',
										'tax_query'      => array(
											array(
												'taxonomy' => 'category',
												'field'    => 'slug',
												'terms'    => 'cursos',
												'operator' => 'NOT IN',
											),
										),
									);

									// Crear la consulta personalizada
									$excursiones_query = new WP_Query($args);

									// Comprobar si hay posts
									if ($excursiones_query->have_posts()) :
										// Iniciar el loop
										while ($excursiones_query->have_posts()) : $excursiones_query->the_post(); ?>

											<div class="vertical-item service-layout-1 ls">
												<div class="item-media">
													<?php the_post_thumbnail(); ?>
													<div class="media-links">
														<a class="abs-link" title="" href="<?php the_permalink(); ?>"></a>
													</div>
												</div>
												<div class="item-content">
													<div class="item-content-wrap">
														<span class="cat-links">
															<span class="screen-reader-text">Servicios y Experiencias</span>
															<?php $tags = get_the_tags();
															if ($tags) {
																foreach ($tags as $tag) {
																	$tag_link = get_tag_link($tag->term_id);
																	echo '<a href="' . get_the_permalink() . '" rel="category tag">' . esc_html($tag->name) . '</a>';
																}
															} ?>
														</span>
														<h5 class="mt-1">
															<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
														</h5>
													</div>
													<a href="<?php the_permalink(); ?>" class="btn-booking">+ Info</a>
												</div>
											</div>
									
										<?php endwhile;
										// Restaurar la consulta global de post
										wp_reset_postdata();
									else :
									endif; 
								?>

							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="gallery" class="ls ds s-pt-90 s-pb-80 s-pt-xl-160 s-pb-xl-150 c-gutter-10">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="content-center">
								<div class="divider-lg-25 divider-xl-50"></div>
								<p class="text-center text-md-left color-main mb-1">
									<span class="line-left">Retratos de Aventuas</span>
								</p>
								<h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
									<span>Fotos & Videos</span>
								</h3>
								<p class="text-center text-md-left color-darkgrey fs-20 fw-500">
									<span>Te invitamos a que formes parte de nuestras aventuras</span>
								</p>
								<div class="divider-40 divider-lg-25 divider-xl-50"></div>
								<div class="col-lg-12">
									<div class="vertical-item item-gallery content-absolute ds">
										<div class="item-media">

											<?php $args1 = array(
												'post_type' => 'image',
												'posts_per_page' => 1, // Número de posts a mostrar, puedes cambiarlo según sea necesario
											);

											// Crear la consulta personalizada
											$img_1 = new WP_Query($args1);

											// Comprobar si hay posts
											if ($img_1->have_posts()) :
												// Iniciar el loop
												while ($img_1->have_posts()) : $img_1->the_post(); 
													
													$image1 = get_field('imagen'); 
												 	if( $image1 ) {
														// Si hay una imagen, muestra la etiqueta HTML de la imagen
														echo '<img src="' . esc_url($image1['url']) . '" alt="' . esc_attr($image1['alt']) . '" />';
													}

												endwhile;
												// Restaurar la consulta global de post
												wp_reset_postdata();
											else :
											endif; ?>

										</div>
										<div class="item-content dark-bg">
											<h5>
												<a href="<?php echo home_url( '/galeria/' ); ?>">Snorkeling</a>
											</h5>
										</div>
									</div>
								</div>
								<div class="divider-10 divider-lg-0"></div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="row isotope-wrapper  c-mb-10">
								<div class="col-lg-12">
									<div class="vertical-item item-gallery content-absolute ds">
										<div class="item-media">
											<?php $args2 = array(
												'post_type' => 'image',
												'posts_per_page' => 1, // Número de posts a mostrar, puedes cambiarlo según sea necesario
												'offset' => 1,
											);

											// Crear la consulta personalizada
											$img_2 = new WP_Query($args2);

											// Comprobar si hay posts
											if ($img_2->have_posts()) :
												// Iniciar el loop
												while ($img_2->have_posts()) : $img_2->the_post(); 
													
													$image2 = get_field('imagen'); 
												 	if( $image2 ) {
														// Si hay una imagen, muestra la etiqueta HTML de la imagen
														echo '<img src="' . esc_url($image2['url']) . '" alt="' . esc_attr($image2['alt']) . '" />';
													}

												endwhile;
												// Restaurar la consulta global de post
												wp_reset_postdata();
											else :
											endif; ?>
										</div>
										<div class="item-content dark-bg">
											<h5>
												<a href="<?php echo home_url( '/galeria/' ); ?>">Buceo</a>
											</h5>
										</div>
									</div>
								</div>
								<?php $args3 = array(
									'post_type' => 'image',
									'posts_per_page' => 2, // Número de posts a mostrar, puedes cambiarlo según sea necesario
									'offset' => 2,
								);

								// Crear la consulta personalizada
								$img_3 = new WP_Query($args3);
								// Comprobar si hay posts
								if ($img_3->have_posts()) :
									// Iniciar el loop
									while ($img_3->have_posts()) : $img_3->the_post(); 
										
										$image3 = get_field('imagen'); 
									 	if( $image3 ) { ?>
													
											<div class="col-lg-6">
												<div class="vertical-item item-gallery content-absolute ds">
													<div class="item-media">
														<img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" />
													</div>
													<div class="item-content dark-bg">
														<h5>
															<a href="<?php echo home_url( '/galeria/' ); ?>">Experiencia para Buzos</a>
														</h5>
													</div>
												</div>
											</div>
													
										<?php }

									endwhile;
									// Restaurar la consulta global de post
									wp_reset_postdata();
								else :
								endif; ?>
							</div>
						</div>
					</div>
				</div>
			</section>

			
			<section id="shop" class="ls ms s-pt-90 s-pb-60 s-pt-xl-160 s-pb-xl-130">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-xl-4 text-center text-md-left">
							<div class="divider-0 divider-lg-200 divider-xl-50"></div>
							<p class="text-center text-md-left color-darkgrey mb-1">
								<span class="line-left">Nuestros Cursos</span>
							</p>
							<h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
								<span>Sumergite a esta<br> Aventura</span>
							</h3>
							<p class="text-center text-md-left color-darkgrey fs-20 fw-500">
								<span>Aprende el mundo del buceo, capacitate y especializate junto a Lobo Larsen.</span>
							</p>
							<div class="divider-30 divider-xl-40"></div>
							<a href="/dev/cursos/" class="btn btn-maincolor">Ver todos los cursos</a>
							<div class="divider-60 divider-lg-0"></div><br>

							<div class="owl-custom-nav hidden-below-lg">
								<a href="#" class="owl-prev"><i class="fa fa-chevron-left"></i></a>
								<a href="#" class="owl-next"><i class="fa fa-chevron-right"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-xl-8">
							<ul class="owl-carousel products" data-responsive-lg="2" data-responsive-md="1" data-responsive-sm="2" data-responsive-xs="1" data-nav="false" data-margin="0" data-loop="true" data-autoplay="true">
								
								<?php // Configurar los argumentos para WP_Query
									$category = get_category_by_slug('cursos');

									$args = array(
										'post_type' => 'post',
										'cat' => $category->term_id, // Filtrar por ID de la categoría "excursiones"
										'posts_per_page' => -1, // Número de posts a mostrar, puedes cambiarlo según sea necesario
									);

									// Crear la consulta personalizada
									$cursos_query = new WP_Query($args);

									// Comprobar si hay posts
									if ($cursos_query->have_posts()) :
										// Iniciar el loop
										while ($cursos_query->have_posts()) : $cursos_query->the_post(); ?>

											<li class="product">
												<div class="product-inner">
													<a href="<?php the_permalink(); ?>">
														<img src="<?php the_post_thumbnail_url(); ?>" alt="cursos de buceo">
													</a>

													<div class="product-wrap">
														<h2 class="woocommerce-loop-product__title">
															<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
														</h2>
														<br>
														<div class="price-wrap">
															
															<a rel="nofollow" href="<?php the_permalink(); ?>" class="button product_type_simple add_to_cart_button">+ Info</a>
														</div>
													</div>
												</div>
											</li>

										<?php endwhile;
										// Restaurar la consulta global de post
										wp_reset_postdata();
									else :
									endif; 
								?>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<!-- Section Testimonials -->
			


<?php get_footer(); ?>