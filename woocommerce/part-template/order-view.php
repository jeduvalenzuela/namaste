<?php
/* Template Name: View Order */

// If parameter is present in URL, generate and send PDF
if (isset($_GET['ver_orden']) && !empty($_GET['ver_orden'])) {
    $order_id = $_GET['ver_orden']; // Call function that generates and sends PDF
}
if (isset($_GET['sent_method']) && !empty($_GET['sent_method'])) {
    $sent_method = ' by ' . $_GET['sent_method'] . ' to the operator'; // Call function that generates and sends PDF
}

$order = wc_get_order( $order_id ); // Get current order

if ( $order ) {
    $order_id = $order->get_id(); // Order ID
    $order_date = wc_format_datetime($order->get_date_created()); // Order creation date
    $order_status = wc_get_order_status_name($order->get_status()); // Order status
    $order_total = $order->get_total(); // Order total
    $order_currency = $order->get_currency(); // Order currency

    // Get order items
    $items = $order->get_items();
    ?>
    <div class="th-cart-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="woocommerce-notices-wrapper">
                <div class="woocommerce-message">Su solicitud fue enviada<?php echo isset($sent_method) ? $sent_method : ''; ?>. Por favor aguarde su respuesta. Muchas Gracias.</div>
            </div>

            <table class="cart_table">
                <thead>
                    <tr>
                        <th class="cart-col-image">Referencia</th>
                        <th class="cart-col-productname">Nombre del producto</th>
                        <th class="cart-col-price">Valor por unidad</th>
                        <th class="cart-col-quantity">Cantidad</th>
                        <th class="cart-col-total">Valor Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $items as $item_id => $item ) : 
                        $product = $item->get_product();
                        if ( $product ) :
                            $product_name = $product->get_name();
                            $permalink = $product->get_permalink();
                            $thumbnail = $product->get_image( 'thumbnail' );
                            $quantity = $item->get_quantity();
                            $line_total = $item->get_total();
                            $line_subtotal = $item->get_subtotal();
                            $price = $line_subtotal / $quantity;
                            ?>
                            <tr class="cart_item">
                                <td data-title="Referencia">
                                    <?php echo $permalink ? '<a href="' . esc_url( $permalink ) . '">' : ''; ?>
                                    <?php echo $thumbnail; ?>
                                    <?php echo $permalink ? '</a>' : ''; ?>
                                </td>
                                <td data-title="Nombre del producto">
                                    <?php echo $permalink ? '<a href="' . esc_url( $permalink ) . '">' : ''; ?>
                                    <?php echo esc_html( $product_name ); ?>
                                    <?php echo $permalink ? '</a>' : ''; ?>
                                </td>
                                <td data-title="Precio unitario">
                                    <span class="amount"><?php echo wc_price( $price, ['currency' => $order_currency] ); ?></span>
                                </td>
                                <td data-title="Cantidad">
                                    <span><?php echo esc_html( $quantity ); ?></span>
                                </td>
                                <td data-title="Total">
                                    <span class="amount"><?php echo wc_price( $line_total, ['currency' => $order_currency] ); ?></span>
                                </td>
                            </tr>
                        <?php endif;
                    endforeach; ?>
                </tbody>
            </table>

            <div class="row justify-content-end">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <h2 class="h4 summary-title">Total Presupuesto</h2>
                    <table class="cart_totals">
                        <tbody>
                            <tr>
                                <td>Total</td>
                                <td>
                                    <span class="amount"><?php echo wc_price( $order_total, ['currency' => $order_currency] ); ?></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
<?php } ?>
