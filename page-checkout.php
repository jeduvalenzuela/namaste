<?php
/* Template Name: Custom Checkout */
get_header();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['generate_order'])) {
    // Lógica para crear el pedido
    $order_created = false; // Cambiar a true si la orden se genera correctamente

    // Ejemplo de lógica para crear el pedido
    $order = wc_create_order();
    if ($order) {
        $cart_items = WC()->cart->get_cart();
        foreach ($cart_items as $cart_item_key => $cart_item) {
            $order->add_product($cart_item['data'], $cart_item['quantity']); // Añade productos al pedido
        }
        $order->calculate_totals();
        $order_created = true;

        // Vaciar carrito después de crear el pedido
        WC()->cart->empty_cart();

        // Redirigir al detalle del pedido
        wp_redirect($order->get_checkout_order_received_url());
        exit;
    } else {
        $order_created = false;
    }
}

defined( 'ABSPATH' ) || exit;

// Verificar si estamos en una URL que contiene "order-received" y obtener el ID de la orden.
if ( isset( $_GET['key'] ) && isset( $_GET['order-received'] ) ) {
    $order_id = absint( $_GET['order-received'] );
    $order = wc_get_order( $order_id ); // Obtén la orden.

    if ( $order ) : 
        ?>
        <div class="woocommerce-order-details">
            <h2>Detalles de tu pedido</h2>
            <p>Número de pedido: <strong><?php echo $order->get_order_number(); ?></strong></p>
            <p>Fecha: <strong><?php echo wc_format_datetime( $order->get_date_created() ); ?></strong></p>
            <p>Total: <strong><?php echo $order->get_formatted_order_total(); ?></strong></p>

            <h3>Productos:</h3>
            <table class="shop_table order_details">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $order->get_items() as $item_id => $item ) : ?>
                        <tr>
                            <td><?php echo esc_html( $item->get_name() ); ?></td>
                            <td><?php echo esc_html( $item->get_quantity() ); ?></td>
                            <td><?php echo wp_kses_post( $order->get_formatted_line_subtotal( $item ) ); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php
    else : 
        // Si la orden no existe.
        ?>
        <p class="woocommerce-error">Lo sentimos, no se pudo encontrar el pedido.</p>
        <?php
    endif;
} else {
    // Aquí puedes cargar el contenido regular del checkout.
    ?>
    <h2>Formulario de Checkout</h2>
    <!-- Aquí va el contenido normal del checkout -->
    <?php
}

get_footer(); ?>
