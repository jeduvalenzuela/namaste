<?php get_header(); ?>

<!--==============================
Cart Area
==============================-->
    <div class="th-cart-wrapper  space-top space-extra-bottom">
        <div class="container">
            <div class="woocommerce-notices-wrapper">
                <div class="woocommerce-message">Detalle de productos a presupuestar</div>
            </div>
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
                        <?php 
                        do_action( 'woocommerce_before_cart_contents' );
                        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
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
                        <?php 
                        endforeach; 
                        do_action( 'woocommerce_cart_contents' );
                        ?>

<tr>
                            <td colspan="6" class="actions">
                                <?php if ( wc_coupons_enabled() ) { ?>
                                    <div class="coupon">
                                        <label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label>
                                        <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" />
                                        <button type="submit" class="button" name="apply_coupon"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
                                    </div>
                                <?php } ?>
                                <button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>
                                <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>

            <div class="row justify-content-end">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <h2 class="h4 summary-title">Solicitar Presupuesto</h2>
                    <table class="cart_totals">
                        <tbody>
                            <tr>
                                <td>Total</td>
                                <td data-title="Cart Subtotal">
                                    <span class="amount"><bdi><span>u$d</span>4.500</bdi></span>
                                </td>
                            </tr>
                            <tr class="shipping">
                                <th>Modalidad de solicitud</th>
                                <td data-title="Shipping and Handling">
                                    <ul class="woocommerce-shipping-methods list-unstyled">
                                        <li>
                                            <input type="radio" id="free_shipping" name="shipping_method" class="shipping_method">
                                            <label for="free_shipping">Por Mail</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="flat_rate" name="shipping_method" class="shipping_method" checked="checked">
                                            <label for="flat_rate">WhatsApp</label>
                                        </li>
                                    </ul>
                                    <p class="woocommerce-shipping-destination">
                                        Pese a la modalidad que seleccione, Nuestro personal de atención se pondra en contacto con usted en nuestros horarios de atención procurando llegar a usted lo antes posible con una propuesta acorde a lo solicitado.
                                    </p>
                                    <form action="#" method="post">
                                        <a href="#" class="shipping-calculator-button">Complete los datos</a>
                                        <div class="shipping-calculator-form">
                                            <p class="form-row">
                                                <input type="text" class="form-control" placeholder="País">
                                            </p>
                                            <p>
                                                <select class="form-select">
                                                    <option value="">Localidad</option>
                                                    <option value="BD-05">Bagerhat</option>
                                                    <option value="BD-01">Bandarban</option>
                                                    <option value="BD-02">Barguna</option>
                                                    <option value="BD-06">Barishal</option>
                                                </select>
                                            </p>
                                            <p class="form-row">
                                                <input type="text" class="form-control" placeholder="Mail">
                                            </p>
                                            <p class="form-row">
                                                <input type="text" class="form-control" placeholder="Celular / WhatsApp">
                                            </p>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="wc-proceed-to-checkout mb-30">
                        <a href="#" class="th-btn">Solicitar Presupuesto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>