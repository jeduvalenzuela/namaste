<?php
/* Template Name: Detalles del Pedido */

get_header();
if (!isset($_GET['order_id'])) {
    echo '<p>No se encontró un pedido para mostrar.</p>';
    get_footer();
    exit;
}

$order_id = intval($_GET['order_id']);
$order = wc_get_order($order_id);

if (!$order || $order->get_user_id() != get_current_user_id()) {
    echo '<p>No tienes permiso para ver este pedido.</p>';
    get_footer();
    exit;
}
?>

<div class="order-details">
    <h2>Detalles de tu solicitud</h2>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($order->get_items() as $item_id => $item): ?>
                <tr>
                    <td><?php echo esc_html($item->get_name()); ?></td>
                    <td><?php echo esc_html($item->get_quantity()); ?></td>
                    <td><?php echo wc_price($item->get_subtotal() / $item->get_quantity()); ?></td>
                    <td><?php echo wc_price($item->get_subtotal()); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Total</th>
                <th><?php echo wc_price($order->get_total()); ?></th>
            </tr>
        </tfoot>
    </table>
    <p>Estado del pedido: <?php echo esc_html(wc_get_order_status_name($order->get_status())); ?></p>
</div>

<?php get_footer(); ?>
