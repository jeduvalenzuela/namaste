<?php 
/*
Template Name: Nosotros
*/
get_header(); ?>

<section class="page_title ds s-parallax s-overlay s-pt-160 s-pb-80">
				<div class="container">
					<div class="row">

						<div class="col-md-12">
							<h1>Quiénes Somos</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="./">Inicio</a>
								</li>
								<li class="breadcrumb-item">
									<a href="#">Lobo Larsen</a>
								</li>
							</ol>
						</div>

					</div>
				</div>
			</section>

			<!-- Section Counter -->
			<section class="ls section-counter s-overlay mobile-overlay s-py-90 s-py-xl-45 c-gutter-40">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<p class="text-center text-md-left color-darkgrey mb-1">
								<span class="line-left"><?php the_title(); ?> </span>
							</p>
							<h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
								<span><?php the_field('titulo'); ?></span>
							</h3>
							<p class="text-center text-md-left color-darkgrey fs-20 fw-500">
								<span><?php the_field('subtitulo'); ?></span>
							</p>
							<div class="divider-60 divider-xl-30">
								<?php the_content(); ?>
							</div>
							
						</div>
					</div>
				</div>
			</section>

			<!-- Section Team -->
			<section class="ls ms s-py-90 s-py-xl-60">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<p class="text-center color-darkgrey mb-1">
								<span class="line-left">Nuestro Staff</span>
							</p>
							<h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
								<span>Nos presentamos</span>
							</h3>

							<div class="divider-40 divider-xl-60"></div>

							<div class="owl-carousel" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="1" data-responsive-xs="1" data-nav="false" data-margin="60" data-loop="true" data-autoplay="true">
								

									<?php $args = array(
										'post_type' => 'partner',
										'posts_per_page' => -1, // Número de posts a mostrar, puedes cambiarlo según sea necesario
									);

									// Crear la consulta personalizada
									$cursos_query = new WP_Query($args);

									// Comprobar si hay posts
									if ($cursos_query->have_posts()) :
										// Iniciar el loop
										while ($cursos_query->have_posts()) : $cursos_query->the_post(); 
											$image = get_field('foto'); ?>

											<div class="vertical-item hero-bg text-center team-layout">
												<div class="item-media">
													<?php if( $image ){
														echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
													} ?>
													<div class="media-links">
														<a class="abs-link" title=""></a>
													</div>
												</div>
												<div class="item-content">
													<h5 class="mb-0">
														<a><?php the_title(); ?></a>
													</h5>

													<p class="team-position pb-xl-3">
														<?php the_field('responsabilidad'); ?>
													</p>
													<p class="team-position pb-xl-3">
														<?php the_field('presentacion'); ?>
													</p>

												</div>
											</div>

										<?php endwhile;
										// Restaurar la consulta global de post
										wp_reset_postdata();
									else :
									endif; ?>
							</div>
						</div>
					</div>
				</div>
			</section>

<?php get_footer(); ?>