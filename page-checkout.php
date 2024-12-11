<?php
/* Template Name: Custom Checkout */
get_header();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['generate_order'])) {
    // Lógica para crear el pedido
    $order_created = false; // Cambiar a true si la orden se genera correctamente

    // Crear la orden de WooCommerce
    $order = wc_create_order();
    
    if ($order) {
        $cart_items = WC()->cart->get_cart();
        
        foreach ($cart_items as $cart_item_key => $cart_item) {
            $order->add_product($cart_item['data'], $cart_item['quantity']); // Añadir productos al pedido
        }

        // Calcular totales y finalizar el pedido
        $order->calculate_totals();

        // Marcar como creado el pedido
        $order_created = true;

        // Vaciar el carrito después de crear el pedido
        WC()->cart->empty_cart();

        // Redirigir al detalle del pedido
        wp_redirect($order->get_checkout_order_received_url());
        exit;
    } else {
        // Si la orden no se creó
        $order_created = false;
        echo '<p class="woocommerce-error">Hubo un problema al crear tu pedido. Intenta nuevamente.</p>';
    }
}

defined( 'ABSPATH' ) || exit;

// Verificar si estamos en la URL de "order-received"
if ( isset( $_GET['key'] ) ) {
    $order_key = sanitize_text_field( $_GET['key'] );
    $order = wc_get_order( $order_key ); // Obtener la orden usando la clave

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
        // Si la orden no existe o la clave es inválida.
        ?>
        <p class="woocommerce-error">Lo sentimos, no se pudo encontrar el pedido. Parámetros de la URL: <br> 
        key: <?php echo isset($_GET['key']) ? $_GET['key'] : 'No disponible'; ?></p>
        <?php
    endif;
} else {
    // Si no estamos en una URL de "order-received", mostrar el contenido regular del checkout.
    ?>
    <h2>Formulario de Checkout</h2>
    <!-- Aquí va el contenido normal del checkout -->
    <?php
}

get_footer();
