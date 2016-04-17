<?php
/**
 * Created by PhpStorm.
 * User: Off
 * Date: 4/17/16
 * Time: 21:51
 */
?>




<table class="shop_table">
    <thead>
        <tr>
            <th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
            <th class="product-quantity"><?php _e( 'Qty', 'woocommerce' ); ?></th>
            <th class="product-total"><?php _e( 'Totals', 'woocommerce' ); ?></th>
        </tr>
    </thead>
    <tbody>
    <? foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) { ?>
        <? $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key ); ?>
        <tr>
            <td class="product-name">
                <?php echo esc_html( $_product -> get_title() ); ?>
            </td>
            <td class="product-quantity">
                <?php echo esc_html( $cart_item['quantity'] ); ?>
            </td>
            <td class="product-subtotal">
                <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
            </td>
        </tr>
    <? } ?>
    </tbody>
    <tfoot>
        <tr class="order-total">
            <th colspan="2"><?php _e( 'Total', 'woocommerce' ); ?></th>
            <td><?php wc_cart_totals_order_total_html(); ?></td>
        </tr>
    </tfoot>
</table>