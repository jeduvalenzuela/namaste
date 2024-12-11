<?php
/* Template Name: Ver Orden */

// Si el parámetro está presente en la URL, generar y enviar el PDF
if (isset($_GET['ver_orden']) && !empty($_GET['ver_orden'])) {
    $order_id = $_GET['ver_orden']; // Llamar a la función que genera y envía el PDF
}

$order = wc_get_order( $order_id ); // Obtén la orden actual

if ( $order ) {
    $order_id = $order->get_id(); // ID de la orden
    $order_date = wc_format_datetime($order->get_date_created()); // Fecha de creación de la orden
    $order_status = wc_get_order_status_name($order->get_status()); // Estado de la orden
    $order_total = $order->get_total(); // Total de la orden
    $order_currency = $order->get_currency(); // Moneda de la orden

    // Obtener los productos de la orden
    $items = $order->get_items();
    ?>
    <div class="th-cart-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="woocommerce-notices-wrapper">
                <div class="woocommerce-message">Detalle de productos a presupuestar</div>
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
                    <h2 class="h4 summary-title">Solicitar Presupuesto</h2>
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
                    <form action="#" method="post" id="shipping-form">
                        <p class="form-row">
                            <input type="text" class="form-control" name="city" placeholder="Ciudad*" required>
                        </p>
                        <p class="form-row">
                            <input type="email" class="form-control" name="email" placeholder="E-mail*" required>
                        </p>
                        <p class="form-row">
                            <input type="text" class="form-control" name="cel" placeholder="Celular*" required>
                        </p>
                        <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
