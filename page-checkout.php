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
?>

<div class="checkout-page-wrapper">
    <div class="container">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['generate_order'])): ?>
            <?php if ($order_created): ?>
                <div class="woocommerce-message">Tu pedido se ha creado con éxito.</div>
                <!-- Opcional: Mostrar un resumen del pedido si es necesario -->
            <?php else: ?>
                <div class="woocommerce-error">Hubo un problema al generar tu pedido. Por favor, intenta nuevamente.</div>
            <?php endif; ?>
        <?php else: ?>
            <h2>Detalle de tu solicitud</h2>
            <table class="cart_table">
                <thead>
                    <tr>
                        <th>Referencia</th>
                        <th>Nombre del producto</th>
                        <th>Valor por unidad</th>
                        <th>Cantidad</th>
                        <th>Valor Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (WC()->cart->get_cart() as $cart_item): ?>
                        <?php $product = $cart_item['data']; ?>
                        <tr>
                            <td><?php echo esc_html($product->get_sku()); ?></td>
                            <td><?php echo esc_html($product->get_name()); ?></td>
                            <td><?php echo wc_price($product->get_price()); ?></td>
                            <td><?php echo esc_html($cart_item['quantity']); ?></td>
                            <td><?php echo wc_price($cart_item['line_total']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <form method="post" action="">
                <button type="submit" name="generate_order" value="1" class="vs-btn enviar w-100 style4">
                    Confirmar Pedido
                </button>
            </form>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
