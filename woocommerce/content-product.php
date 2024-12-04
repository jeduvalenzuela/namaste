<?php
defined('ABSPATH') || exit;

global $product;

// Asegúrate de que el producto esté definido.
if (empty($product) || !$product->is_visible()) {
    return;
}
?>

<div class="col-md-6">
    <div class="tour-box th-ani">
        <div class="tour-box_img global-img">
            <a href="<?php the_permalink(); ?>" class="woocommerce-review-link">
                <?php if (has_post_thumbnail($product->get_id())) : ?>
                    <?php echo get_the_post_thumbnail($product->get_id(), 'large'); ?>
                <?php else : ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tour/tour_box_1.jpg" alt="default image">
                <?php endif; ?>
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
                <span class="currency">
                    <?php echo $product->get_price_html(); ?>
                </span>/x Persona
            </h4>
            <div class="tour-action">
                <span><i class="fa-light fa-clock"></i><?php the_field('dias'); ?> Días</span>
                <a href="<?php the_permalink(); ?>" class="th-btn style4 th-icon">Ver info</a>
            </div>
        </div>
    </div>
</div>

