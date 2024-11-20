<?php 
/*
Template Name: Contacto
*/

get_header(); ?>

<section class="page_title ds s-parallax s-overlay s-pt-160 s-pb-80">
				<div class="container">
					<div class="row">

						<div class="col-md-12">
							<h1>Comunicate para más info</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="./">Inicio</a>
								</li>
								<li class="breadcrumb-item">
									<a href="#">Contacto</a>
								</li>
							</ol>
						</div>

					</div>
				</div>
			</section>

			<section class="ls ms page_map">

				<div class="marker">
					<div class="marker-address">Boulevard Almirante Brown 860, Puerto Madryn, Patagonia Argentina</div>
					<div class="marker-title">Sede Centro</div>
					<div class="marker-description">

						<ul class="list-unstyled">
							<li>
								<span class="icon-inline">
									<span class="icon-styled color-main">
										<i class="fa fa-map-marker"></i>
									</span>

									<span>
										Puerto Madryn, Boulevard Almirante Brown 860
									</span>
								</span>
							</li>

							<li>
								<span class="icon-inline">
									<span class="icon-styled color-main">
										<i class="fa fa-phone"></i>
									</span>

									<span>
										+ 549 280-4327476
									</span>
								</span>
							</li>
							<li>
								<span class="icon-inline">
									<span class="icon-styled color-main">
										<i class="fa fa-envelope"></i>
									</span>

									<span>
										lobolarsenbuceo@gmail.com
									</span>
								</span>
							</li>
						</ul>
					</div>

					<img class="marker-icon" src="<?php echo get_stylesheet_directory_uri();?>/images/map_marker_icon.png" alt="img">
				</div>
				<!-- .marker -->
			</section>

			<section class="ls s-py-90 s-py-xl-160">
				<div class="container">
					<div class="row">

						<div class="col-lg-8 animate" data-animation="scaleAppear">
							<div class="hero-bg p-60">

								<?php echo do_shortcode( '[contact-form-7 id="0a15edd" title="Formulario de contacto 1"]' ); ?>

							</div>
							<div class="divider-60 divider-lg-0"></div>
						</div>
						<!--.col-* -->

						<div class="col-lg-4 animate" data-animation="scaleAppear">
							<div class="hero-bg p-60">

								<h4>Comunicate</h4>

								<div class="media mb-20">
									<div class="icon-styled color-main fs-40">
										<i class="fa fa-map-marker"></i>
									</div>

									<div class="media-body">
										<h5 class="mt-0">
											Dirección:
										</h5>
										<p>
											<?php echo the_field('direccion'); ?>
										</p>
									</div>
								</div>

								<div class="media mb-20">
									<div class="icon-styled color-main fs-40">
										<i class="fa fa-phone-square"></i>
									</div>

									<div class="media-body">
										<h5 class="mt-0">
											Celular:
										</h5>
										<p>
										<?php echo the_field('telefono'); ?>
										</p>
									</div>
								</div>

								<div class="media mb-20">
									<div class="icon-styled color-main fs-40">
										<i class="fa fa-envelope"></i>
									</div>

									<div class="media-body">
										<h5 class="mt-0">
											Email:
										</h5>
										<p>
										<?php echo the_field('email'); ?>
										</p>
									</div>
								</div>

								<div class="divider-30 divider-xl-50"></div>

								<h4 class="mt-0">Social Links</h4>

								<p class="social-icons">
									<a href="<?php echo the_field('facebook'); ?>" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
									<a href="<?php echo the_field('instagram'); ?>" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
									<a href="<?php echo the_field('youtube'); ?>" class="fa bg-icon rounded-icon fa-youtube" title="YouTube"></a>
								</p>

							</div>
						</div>
						<!--.col-* -->


					</div>
				</div>
			</section>
	<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBh_V0Po-IkgYtuRNjLxmPBLs4GbXxeGKM&callback=initGoogleMap&libraries=&v=weekly"
      async
    ></script>

	<script src='https://www.google.com/recaptcha/api.js?render=6Lc9ltkaAAAAAO7D3x2X53gdmmuuovhZwSB8k6AW'></script>

<?php get_footer(); ?>