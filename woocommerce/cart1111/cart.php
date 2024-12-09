<?php get_header(); ?>

<!--==============================
Cart Area
==============================-->
<div class="th-cart-wrapper space-top space-extra-bottom">
    <div class="container">
        <!-- WooCommerce Notices -->
        <?php wc_print_notices(); ?>
        
        <!-- Cart Form -->
        <form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post" class="woocommerce-cart-form">
            <table class="cart_table">
                <thead>
                    <tr>
                        <th class="cart-col-image">Referencia</th>
                        <th class="cart-col-productname">Nombre del producto</th>
                        <th class="cart-col-price">Valor por unidad</th>
                        <th class="cart-col-quantity">Personas</th>
                        <th class="cart-col-total">Valor Total</th>
                        <th class="cart-col-remove">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
                        $product = $cart_item['data'];
                        $product_permalink = $product->is_visible() ? $product->get_permalink( $cart_item ) : '';
                        ?>
                        <tr class="cart_item">
                            <td data-title="Product">
                                <?php echo $product_permalink ? '<a href="' . esc_url( $product_permalink ) . '">' : ''; ?>
                                <?php echo $product->get_image( 'thumbnail' ); ?>
                                <?php echo $product_permalink ? '</a>' : ''; ?>
                            </td>
                            <td data-title="Name">
                                <?php echo $product_permalink ? '<a href="' . esc_url( $product_permalink ) . '">' : ''; ?>
                                <?php echo $product->get_name(); ?>
                                <?php echo $product_permalink ? '</a>' : ''; ?>
                            </td>
                            <td data-title="Price">
                                <span class="amount"><?php echo WC()->cart->get_product_price( $product ); ?></span>
                            </td>
                            <td data-title="Quantity">
                                <?php if ( $product->is_sold_individually() ) : ?>
                                    <span><?php echo esc_html( $cart_item['quantity'] ); ?></span>
                                <?php else : ?>
                                    <div class="quantity">
                                        <?php
                                        woocommerce_quantity_input( array(
                                            'input_name'  => "cart[{$cart_item_key}][qty]",
                                            'input_value' => $cart_item['quantity'],
                                            'max_value'   => $product->get_max_purchase_quantity(),
                                            'min_value'   => '1',
                                        ) );
                                        ?>
                                    </div>
                                <?php endif; ?>
                            </td>
                            <td data-title="Total">
                                <span class="amount"><?php echo WC()->cart->get_product_subtotal( $product, $cart_item['quantity'] ); ?></span>
                            </td>
                            <td data-title="Remove">
                                <?php echo sprintf(
                                    '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fal fa-trash-alt"></i></a>',
                                    esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                    esc_html__( 'Remove this item', 'woocommerce' ),
                                    esc_attr( $product->get_id() ),
                                    esc_attr( $product->get_sku() )
                                ); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="actions">
                <button type="submit" class="th-btn" name="update_cart"><?php esc_html_e( 'Actualizar', 'woocommerce' ); ?></button>
                <a href="<?php echo esc_url( wc_get_shop_url() ); ?>" class="th-btn"><?php esc_html_e( 'Continuar Comprando', 'woocommerce' ); ?></a>
            </div>
        </form>

        <!-- Totals Section -->
        <div class="row justify-content-end">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <h2 class="h4 summary-title"><?php esc_html_e( 'Solicitar Presupuesto', 'woocommerce' ); ?></h2>
                <table class="cart_totals">
                    <tbody>
                        <tr>
                            <td><?php esc_html_e( 'Total', 'woocommerce' ); ?></td>
                            <td data-title="Cart Subtotal">
                                <span class="amount"><?php wc_cart_totals_subtotal_html(); ?></span>
                            </td>
                        </tr>
                        <tr class="shipping">
                            <th><?php esc_html_e( 'Modalidad de solicitud', 'woocommerce' ); ?></th>
                            <td>
                                <!-- Custom Radio Buttons -->
                                <ul class="woocommerce-shipping-methods list-unstyled">
                                    <li>
                                        <input type="radio" id="free_shipping" name="shipping_method" class="shipping_method">
                                        <label for="free_shipping"><?php esc_html_e( 'Por Mail', 'woocommerce' ); ?></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="flat_rate" name="shipping_method" class="shipping_method" checked="checked">
                                        <label for="flat_rate"><?php esc_html_e( 'WhatsApp', 'woocommerce' ); ?></label>
                                    </li>
                                </ul>
                                <p class="woocommerce-shipping-destination">
                                    <?php esc_html_e( 'Nuestro personal se pondrá en contacto con usted a la brevedad.', 'woocommerce' ); ?>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="wc-proceed-to-checkout">
                    <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="th-btn"><?php esc_html_e( 'Solicitar Presupuesto', 'woocommerce' ); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>