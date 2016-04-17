<?php /* Template Name: Checkout */ ?>

<?php get_header() ?>
<div class="layout-header header-static">
    <div class="nav">
        <div class="the-studio">
            <a href="#"> <span class="bold">THEO</span><span>STUDIO</span></a>
        </div>
        <div class="artists">
            <a href="#">
                <span>ARTISTS</span>
            </a>
        </div>
        <div class="contact">
            <a href="#">
                <span style="color: transparent">CONTACT</span>
            </a>
        </div>
        <div class="basket">
            <a href="#">
                <span class="ic-basket"></span>
            </a>
        </div>
    </div>
</div>
<div class="layout-content no-padding" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/cart-bg.png')">
    <div class="cart-container">
        <div class="layout-container art-container">
            <div class="shopping-cart">
                <div class="cart-header">
                    <h2>Shopping cart</h2>
                </div>
                <form id="order_review" method="post">

                    <table class="shop_table">
                        <thead>
                        <tr>
                            <th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
                            <th class="product-quantity"><?php _e( 'Qty', 'woocommerce' ); ?></th>
                            <th class="product-total"><?php _e( 'Totals', 'woocommerce' ); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if ( sizeof( $order->get_items() ) > 0 ) : ?>
                            <?php foreach ( $order->get_items() as $item ) : ?>
                                <tr>
                                    <td class="product-name">
                                        <?php echo esc_html( $item['name'] ); ?>
                                        <?php $order->display_item_meta( $item ); ?>
                                    </td>
                                    <td class="product-quantity"><?php echo esc_html( $item['qty'] ); ?></td>
                                    <td class="product-subtotal"><?php echo $order->get_formatted_line_subtotal( $item ); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                        <tfoot>
                        <?php if ( $totals = $order->get_order_item_totals() ) : ?>
                            <?php foreach ( $totals as $total ) : ?>
                                <tr>
                                    <th scope="row" colspan="2"><?php echo $total['label']; ?></th>
                                    <td class="product-total"><?php echo $total['value']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tfoot>
                    </table>

                    <div id="payment">
                        <?php if ( $order->needs_payment() ) : ?>
                            <ul class="wc_payment_methods payment_methods methods">
                                <?php
                                if ( ! empty( $available_gateways ) ) {
                                    foreach ( $available_gateways as $gateway ) {
                                        wc_get_template( 'checkout/payment-method.php', array( 'gateway' => $gateway ) );
                                    }
                                } else {
                                    echo '<li>' . apply_filters( 'woocommerce_no_available_payment_methods_message', __( 'Sorry, it seems that there are no available payment methods for your location. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce' ) ) . '</li>';
                                }
                                ?>
                            </ul>
                        <?php endif; ?>
                        <div class="form-row">
                            <input type="hidden" name="woocommerce_pay" value="1" />

                            <?php wc_get_template( 'checkout/terms.php' ); ?>

                            <?php do_action( 'woocommerce_pay_order_before_submit' ); ?>

                            <?php echo apply_filters( 'woocommerce_pay_order_button_html', '<input type="submit" class="button alt" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '" />' ); ?>

                            <?php do_action( 'woocommerce_pay_order_after_submit' ); ?>

                            <?php wp_nonce_field( 'woocommerce-pay' ); ?>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
