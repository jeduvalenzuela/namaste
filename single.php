<?php 
/*
Template Name: Single Post
*/

get_header();

// Verifica si el post pertenece a la categoría 'cursos'
if (in_category('cursos')) {
    // Si el post pertenece a la categoría 'cursos', carga la plantilla específica
    get_template_part('single', 'category-cursos');
} else { ?>
    
    <section class="page_title ds s-parallax s-overlay s-pt-160 s-pb-80">
				<div class="container">
					<div class="row">

						<div class="col-md-12">
							<?php 
								$title = get_the_title(); 
								if($title){
									echo '<h1>' . $title . '</h1>';
								} 
							?>
							
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="<?php echo home_url('/'); ?>">Home</a>
								</li>
								<li class="breadcrumb-item">
									<?php
										// Obtener las categorías del post actual
										$categories = get_the_category();

										if ( ! empty( $categories ) ) {
											$category = $categories[0];
											echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
										}
									?>
								</li>
							</ol>
						</div>

					</div>
				</div>
			</section>

			<section class="ls s-py-90 s-py-xl-60 c-gutter-60">
				<div class="container">
					<div class="row">

						<aside class="col-lg-4">
							<ul class="list-services">
								<?php // Configurar los argumentos para WP_Query
								$args = array(
									'post_type' => 'post',
									'cat' => $category->term_id, // Filtrar por ID de la categoría "excursiones"
									'posts_per_page' => -1, // Número de posts a mostrar, puedes cambiarlo según sea necesario
								);

								// Crear la consulta personalizada
								$excursiones_query = new WP_Query($args);

								// Comprobar si hay posts
								if ($excursiones_query->have_posts()) :
									// Iniciar el loop
									while ($excursiones_query->have_posts()) : $excursiones_query->the_post();
									$post_title = get_the_title(); 
									if( $title === $post_title ){
										$class_active = 'class="bg-danger"';
									}else{
										$class_active = '';
									}
									
								?>
								<li <?php echo $class_active; ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								<?php
									endwhile;
									// Restaurar la consulta global de post
									wp_reset_postdata();
								else :
								endif; ?>
							</ul>

						</aside>

						<div class="col-lg-8 ">
							<div class="divider-60 divider-lg-0"></div>
							<div class="vertical-item content-padding">
								<div class="item-media">
									<div class="owl-carousel" data-margin="0" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1" data-nav="true">
                    
                    <?php $images = get_field('galeria'); // Reemplaza 'nombre_del_campo_de_galeria' con el nombre de tu campo

                    if( $images ):
                      foreach( $images as $image ): ?>
                        <a href="<?php echo esc_url($image['url']); ?>" class="photoswipe-link" data-width="850" data-height="400" >
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </a>
                      <?php endforeach; 
                    endif; ?>

									</div>
								</div>
								<div class="item-content">
				                  	<?php the_content(); 
									$titulo_itinerario = get_field('titulo_itinerario');
									if(!empty($titulo_itinerario)){
										echo '<h5 class="excerpt">Recorreras estos escenarios únicos</h5>';
									}

									$counter = 1;
									if( have_rows('itinerarios') ): ?>

										<div id="accordion01" role="tablist">

										<?php while ( have_rows('itinerarios') ) : the_row();
											// Variables for subfields
											$subfield_1 = get_sub_field('titulo_item');
											$subfield_2 = get_sub_field('descripcion_item');
											$subfield_3 = get_sub_field('titulo_video');
											$subfield_4 = get_sub_field('video');
											++$counter;
											if($counter === 1){
												$colapsado = 'true';
											}else{
												$colapsado = 'false';
											} ?>
									
											<div class="card">
												<div class="card-header" role="tab" id="collapse0<?php echo $counter; ?>_header">
													<h5>
														<a data-toggle="collapse" href="#collapse0<?php echo $counter; ?>" aria-expanded="<?php echo $colapsado; ?>" aria-controls="collapse0<?php echo $counter; ?>">
															<?php echo esc_html($subfield_1); ?>
														</a>
													</h5>
												</div>

												<div id="collapse0<?php echo $counter; ?>" class="collapse show" role="tabpanel" aria-labelledby="collapse0<?php echo $counter; ?>_header" data-parent="#accordion0<?php echo $counter; ?>">
													<div class="card-body">
														<?php echo esc_html($subfield_2); 
														if(!empty($subfield_4)){ ?>
															<br><br>
															<span class="cat-links"><br>
																<a href="<?php echo $subfield_4; ?>" target="_blank" rel="category tag"><?php echo esc_html($subfield_3); ?></a>
															</span>
														<?php }?> 
												
													</div>
												</div>
											</div>
									
										<?php
										endwhile;
									else :
									endif;
									?>

								  	
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

<?php }	
get_footer(); ?>