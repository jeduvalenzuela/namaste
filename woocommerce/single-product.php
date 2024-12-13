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
                            <div class="slider-area tour-slider1">
                                <div class="swiper th-slider mb-4 swiper-fade swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden" id="tourSlider4" data-slider-options="{&quot;effect&quot;:&quot;fade&quot;,&quot;loop&quot;:true,&quot;thumbs&quot;:{&quot;swiper&quot;:&quot;.tour-thumb-slider&quot;},&quot;autoplayDisableOnInteraction&quot;:&quot;true&quot;}">
                                    <div class="swiper-wrapper" id="swiper-wrapper-5f744b19fe31f5e6" aria-live="off" style="transition-duration: 0ms; transition-delay: 0ms;">

                                        <?php 
                                        $product = wc_get_product(get_the_ID());
                                        $gallery_image_ids = $product->get_gallery_image_ids();
                                        
                                        foreach($gallery_image_ids as $key => $imag_gallery){
                                            $indice = $key + 1; ?>

                                            <div class="swiper-slide" role="group" aria-label="<?php echo $indice; ?> / 8" data-swiper-slide-index="0" style="width: 872px; opacity: 1; transform: translate3d(-2616px, 0px, 0px); transition-duration: 0ms;">
                                                <div class="tour-slider-img">
                                                    <?php echo wp_get_attachment_image( $imag_gallery, 'large' ); ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        
                                        
                                    </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                <div class="swiper th-slider tour-thumb-slider swiper-initialized swiper-horizontal swiper-backface-hidden swiper-thumbs" data-slider-options="{&quot;effect&quot;:&quot;slide&quot;,&quot;loop&quot;:true,&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:2},&quot;576&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;768&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;},&quot;992&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;},&quot;1200&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;}},&quot;autoplayDisableOnInteraction&quot;:&quot;true&quot;}">
                                    <div class="swiper-wrapper" id="swiper-wrapper-a12b3591079192697" aria-live="off" style="transform: translate3d(-896px, 0px, 0px); transition-duration: 0ms; transition-delay: 0ms;">
                                        
                                        <?php  foreach($gallery_image_ids as $key => $thumb){
                                            $thumb_indice = $key + 1; ?>

                                            <div class="swiper-slide" role="group" aria-label="<?php echo $thumb_indice; ?> / 8" data-swiper-slide-index="1" style="width: 274.667px; margin-right: 24px;">
                                                <div class="tour-slider-img">
                                                    <?php echo wp_get_attachment_image( $thumb, 'medium' ); ?>
                                                </div>
                                            </div>
                                            
                                        <?php } ?>
                                        <!-- div class="swiper-slide" role="group" aria-label="2 / 8" data-swiper-slide-index="1" style="width: 274.667px; margin-right: 24px;">
                                            <div class="tour-slider-img">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/tour/tour_inner_2_2.jpg" alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="3 / 8" data-swiper-slide-index="2" style="width: 274.667px; margin-right: 24px;">
                                            <div class="tour-slider-img">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/tour/tour_inner_2_3.jpg" alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-prev" role="group" aria-label="4 / 8" data-swiper-slide-index="3" style="width: 274.667px; margin-right: 24px;">
                                            <div class="tour-slider-img">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/tour/tour_inner_2_4.jpg" alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-thumb-active swiper-slide-visible swiper-slide-active" role="group" aria-label="5 / 8" data-swiper-slide-index="4" style="width: 274.667px; margin-right: 24px;">
                                            <div class="tour-slider-img">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/tour/tour_inner_2_1.jpg" alt="Image">
                                            </div>
                                        </div-->
                                        <!--div class="swiper-slide swiper-slide-visible swiper-slide-next" role="group" aria-label="6 / 8" data-swiper-slide-index="5" style="width: 274.667px; margin-right: 24px;">
                                            <div class="tour-slider-img">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/tour/tour_inner_2_2.jpg" alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-visible" role="group" aria-label="7 / 8" data-swiper-slide-index="6" style="width: 274.667px; margin-right: 24px;">
                                            <div class="tour-slider-img">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/tour/tour_inner_2_3.jpg" alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="8 / 8" data-swiper-slide-index="7" style="width: 274.667px; margin-right: 24px;">
                                            <div class="tour-slider-img">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/tour/tour_inner_2_4.jpg" alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="1 / 8" data-swiper-slide-index="0" style="width: 274.667px; margin-right: 24px;">
                                            <div class="tour-slider-img">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/tour/tour_inner_2_1.jpg" alt="Image">
                                            </div>
                                        </div-->
                                    </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

                                <button data-slider-prev="#tourSlider4" class="slider-arrow style3 slider-prev"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/hero-arrow-left.svg" alt=""></button>
                                <button data-slider-next="#tourSlider4" class="slider-arrow style3 slider-next"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/hero-arrow-right.svg" alt=""></button>
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
                                
                                <?php $incluye_terms = get_the_terms(get_the_ID(), 'incluye');
                                if ($incluye_terms && !is_wp_error($incluye_terms)) { ?>

                                    <h2 class="box-title">¿Qué incluye la propuesta?</h2>
                                    <div class="checklist style2">
                                        <ul>
                                            <?php foreach ($incluye_terms as $term) {
                                                echo '<li>' . esc_html($term->name) . '</li>';
                                            } ?>
                                        </ul>
                                </div>
                                <?php } ?>

                                <br><br>

                                <?php $no_incluye_terms = get_the_terms(get_the_ID(), 'no-incluye');
                                if ($no_incluye_terms && !is_wp_error($no_incluye_terms)) { ?>
                                    <h2 class="box-title">¿Qué no incluye?</h2>
                                    <div class="checklist style2">
                                        <ul>
                                            <?php foreach ($no_incluye_terms as $term) {
                                                echo '<li>' . esc_html($term->name) . '</li>';
                                            } ?>
                                        </ul>
                                    </div>
                                <?php } ?>

                                <?php $en_cuenta = get_field('tener_en_cuenta');
                                if(!empty($en_cuenta)){
                                    echo '<blockquote><p>' . $en_cuenta . '</p><cite>A tener en cuenta / Importante</cite></blockquote>';
                                }
                                ?>
                                
                                
                                <?php $second_paragraph = get_field('segundo_parrafo');
                                if(!empty($second_paragraph)){
                                    echo $second_paragraph;
                                }
                                ?>
                                        

                                <div class="product-about">
                                
                                    <div class="actions">
                                        <form class="cart" method="post" enctype="multipart/form-data">
                                            <div class="quantity">
                                                <input type="number" id="quantity" class="qty-input" step="1" min="1" max="50" name="quantity" value="1" title="Qty">
                                                <button type="button" class="quantity-plus qty-btn"><i class="far fa-chevron-up"></i></button>
                                                <button type="button" class="quantity-minus qty-btn"><i class="far fa-chevron-down"></i></button>
                                            </div>
                                            <style>
                                                button.th-btn, input.wpcf7-form-control.wpcf7-submit.has-spinner.th-btn {
                                                    background-color: #1ca8cb;
                                                    color: #fff;
                                                    border: unset;
                                                    border-radius: 50px;
                                                }
                                            </style>
                                            <button type="submit" name="add-to-cart" value="<?php echo get_the_ID(); ?>" class="th-btn">
                                                <?php esc_html_e( 'Agregar al carrito', 'woocommerce' ); ?>
                                            </button>
                                        </form>
                                        <!--a href="#" class="icon-btn"><i class="far fa-heart"></i></a-->
                                    </div>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function () {
                                            const plusBtns = document.querySelectorAll('.quantity-plus');
                                            const minusBtns = document.querySelectorAll('.quantity-minus');

                                            plusBtns.forEach(btn => {
                                                btn.addEventListener('click', function (e) {
                                                    e.preventDefault();
                                                    const qtyInput = this.parentElement.querySelector('.qty-input');
                                                    if (qtyInput) {
                                                        qtyInput.stepUp();
                                                    }
                                                });
                                            });

                                            minusBtns.forEach(btn => {
                                                btn.addEventListener('click', function (e) {
                                                    e.preventDefault();
                                                    const qtyInput = this.parentElement.querySelector('.qty-input');
                                                    if (qtyInput && qtyInput.value > 1) {
                                                        qtyInput.stepDown();
                                                    }
                                                });
                                            });
                                        });

                                    </script>

                                </div>
                            </div>
                            
                            <!-- Comment end --> <!-- Comment Form -->
                            <?php echo do_shortcode( '[contact-form-7 id="1ce7f18" title="Formulario de contacto 1"]' ); ?>

                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-5">
                        <aside class="sidebar-area style2">
                            <div class="widget widget_search">
                                <form class="search-form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                                    <input type="text" placeholder="Buscar" name="s">
                                    <input type="hidden" name="post_type" value="product">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>

                            <div class="widget widget_categories">
                                <h3 class="widget_title">Categorías</h3>
                                <ul>
                                    <?php
                                    $categories = get_terms('product_cat');
                                    foreach ($categories as $category) {
                                        echo '<li><a href="' . get_term_link($category->term_id) . '"><img src="' . get_stylesheet_directory_uri() . '/assets/img/theme-img/map.svg" alt="">' . $category->name . '</a><span>(' . $category->count . ')</span></li>';
                                    }
                                    ?>
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
                                        <a href="<?php echo home_url( '/contacto/' ); ?>" class="th-btn style2 th-icon">Comunicarme</a>
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