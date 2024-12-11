<?php 
get_header(); 
defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>



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
                                    <form action="#" method="post" id="shipping-form">
                                        <a href="#" class="shipping-calculator-button">Complete los datos</a>
                                        <div class="shipping-calculator-form">
                                            <p class="form-row">
                                                <input type="text" class="form-control" name="city" placeholder="Ciudad*" required>
                                            </p>
                                            <p class="form-row">
                                                <input type="email" class="form-control" name="email" placeholder="E-mail*" required>
                                            </p>
                                            <p class="form-row">
                                                <input type="text" class="form-control" name="cel" placeholder="Celular*" required>
                                            </p>   
                                        </div>
                                        <script>
                                            jQuery(document).ready(function($) {
                                                // Cargar países
                                                $.ajax({
                                                    url: ajaxurl, // URL de AJAX de WordPress
                                                    type: 'POST',
                                                    data: {
                                                        action: 'load_countries'
                                                    },
                                                    success: function(response) {
                                                        if (response.success) {
                                                            const countrySelect = $('#country');
                                                            response.data.forEach(country => {
                                                                countrySelect.append('<option value="' + country.code + '">' + country.name + '</option>');
                                                            });
                                                        } else {
                                                            console.error('Error al cargar los países');
                                                        }
                                                    },
                                                    error: function() {
                                                        console.error('Error en la solicitud AJAX');
                                                    }
                                                });
                                            });
                                        </script>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="wc-proceed-to-checkout mb-30">
                        <?php if (is_user_logged_in()) : ?>
                            <form method="post" action="<?php echo home_url( '/checkout/' ); ?>">
                                <button type="submit" name="generate_order" class="vs-btn enviar w-100 style4">Solicitar Presupuesto</button>
                            </form>

                            <!--a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="vs-btn enviar w-100 style4">Solicitar Presupuesto</a-->
                        <?php else : ?>
                            <a href="#login-form" class="th-btn popup-content">Inicia sesión para solicitar presupuesto</a>
                        <?php endif; ?>
                    </div>




                </div>
            </div>
        </div>
    </div>

<?php 
do_action( 'woocommerce_after_cart' );
get_footer(); 
?>