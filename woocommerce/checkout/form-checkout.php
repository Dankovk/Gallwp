<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


?>

<div class="layout-content no-padding" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/cart-bg.png')">
    <div class="cart-container">
        <div class="layout-container art-container">
            <div class="shopping-cart">
                <div class="cart-header">
                    <h2>Shopping cart</h2>
                </div>

                <form id="order_review" method="post">
                    <?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

                        <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                        <div class="col2-set" id="customer_details">
                            <div class="col-1">
                                <?php do_action( 'woocommerce_checkout_billing' ); ?>
                            </div>

                            <div class="col-2">
                                <?php do_action( 'woocommerce_checkout_shipping' ); ?>
                            </div>
                        </div>

                        <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

                    <?php endif; ?>

                    <?php do_action( 'woocommerce_checkout_order_review' ); ?>

                    <h3 id="order_review_heading">Ваш заказ</h3>

                </form>
            </div>
        </div>
    </div>
</div>
