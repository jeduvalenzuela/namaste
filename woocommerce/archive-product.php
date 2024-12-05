<?php
defined('ABSPATH') || exit;

get_header('shop');
?>

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg/breadcumb-bg2.jpg">
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

                            <?php if (have_posts()) : while (have_posts()) : the_post(); global $product; ?>
                                <div class="col-md-6">
                                    <div class="tour-box th-ani">
                                        <div class="tour-box_img global-img">
                                            <a href="<?php the_permalink(); ?>" class="woocommerce-review-link">
                                                <?php if (has_post_thumbnail()) {
                                                    the_post_thumbnail('medium');
                                                } else { ?>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tour/tour_box_1.jpg" alt="<?php the_title(); ?>">
                                                <?php } ?>
                                            </a>
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <div class="tour-rating">
                                                <i class="fa-light fa-calendar"></i>
                                                <a href="<?php the_permalink(); ?>" class="woocommerce-review-link">
                                                    Salida: <strong><?php the_field('salidas'); ?></strong>
                                                </a>
                                            </div>
                                            <h4 class="tour-box_price">
                                                <span class="currency"><?php echo wc_price($product->get_price()); ?></span>/x Persona
                                            </h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i> <?php the_field('dias'); ?> Días</span>
                                                <a href="<?php the_permalink(); ?>" class="th-btn style4 th-icon">Ver info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; else : ?>
                                <p><?php esc_html_e('No se encontraron productos.', 'woocommerce'); ?></p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <div class="th-pagination text-center mt-60 mb-0">
                    <?php
                    // Muestra la paginación de WooCommerce.
                    woocommerce_pagination();
                    ?>
                </div>
            </div>

            <!-- Sidebar -->
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

                    <div class="widget widget_offer" data-bg-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg/widget_bg_1.jpg">
                        <div class="offer-banner">
                            <div class="offer">
                                <h6 class="box-title">Espacio publicitario</h6>
                                <div class="banner-logo">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="Tourm">
                                </div>
                                <div class="offer">
                                    <h6 class="offer-title">Llamado a la acción</h6>
                                    <a class="offter-num" href="tel:+12345678912">+123 4567 8912</a>
                                </div>
                                <a href="<?php echo site_url('/contacto'); ?>" class="th-btn style2 th-icon">Comunicarme</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<?php get_footer('shop'); ?>
