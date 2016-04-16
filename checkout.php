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

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

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

<h3 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3>

<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

<div id="order_review" class="woocommerce-checkout-review-order">
    <?php do_action( 'woocommerce_checkout_order_review' ); ?>
</div>

<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

                <?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
                <div class="cart-footer">
                    <div class="info">

                        <ul>
                            <li><a href="#">Purchasing FAQ</a></li>
                            <li><a href="#">Shopping info</a></li>
                            <li><a href="#">Return Policy</a></li>
                        </ul>
                    </div>
                    <div class="button-cont">
                        <a href="<?php echo esc_url( wc_get_checkout_url() ) ;?>" class="btn btn-transparent">
                            Checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
