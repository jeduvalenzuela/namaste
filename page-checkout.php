<?php
/* Template Name: Custom Checkout */
get_header();

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
