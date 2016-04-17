<?php
/**
 * Created by PhpStorm.
 * User: Off
 * Date: 4/17/16
 * Time: 21:54
 */?>

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

        <!--                            --><?php //do_action( 'woocommerce_pay_order_before_submit' ); ?>

        <!--                            --><?php //echo apply_filters( 'woocommerce_pay_order_button_html', '<input type="submit" class="button alt" id="place_order" value="' . esc_attr( 'Checkout' ) . '" data-value="' . esc_attr( 'Checkout' ) . '" />' ); ?>

        <!--                            --><?php //do_action( 'woocommerce_pay_order_after_submit' ); ?>

        <input type="submit"
               class="btn btn-transparent"
               name="woocommerce_checkout_place_order"
               id="place_order"
               value="Checkout"
               data-value="Checkout" />

        <input type="hidden" name="key" value="<? echo $order -> order_key ?>" />
        <input type="hidden" name="order-pay" value="<? echo $order -> id ?>" />

        <?php wp_nonce_field( 'woocommerce-pay' ); ?>
    </div>
</div>
