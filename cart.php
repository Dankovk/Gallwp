<?php /* Template Name: Cart */ ?>

<?php get_header() ?>
<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

do_action( 'woocommerce_before_cart' ); ?>
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
                <form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
                    <?php do_action( 'woocommerce_before_cart_table' ); ?>
                    <div class="cart-list">
                        <table class="cart-table">
                            <thead>
                            <tr>
                                <th><span><?php _e( 'Product', 'woocommerce' ); ?></span></th>
                                <th><span><?php _e( 'Price', 'woocommerce' ); ?></span></th>
                                <th><span><?php _e( 'Quantity', 'woocommerce' ); ?></span></th>
                                <th><span><?php _e( 'Total', 'woocommerce' ); ?></span></th>
                            </tr>
                            </thead>
                            <?php do_action( 'woocommerce_before_cart_contents' ); ?>
                            <tbody>
                            <?php
                            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                                $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                                $product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                                if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                    ?>
                                    <tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">




                                        <td class="product-name art-name-cart" data-title="<?php _e( 'Product', 'woocommerce' ); ?>">
                                            <?php
                                            if ( ! $_product->is_visible() ) {
                                                echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
                                            } else {
                                                echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $_product->get_permalink( $cart_item ) ), $_product->get_title() ), $cart_item, $cart_item_key );
                                            }

                                            // Meta data
                                            echo WC()->cart->get_item_data( $cart_item );

                                            // Backorder notification
                                            if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                                echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>';
                                            }
                                            ?>
                                        </td>

                                        <td class="product-price" data-title="<?php _e( 'Price', 'woocommerce' ); ?>">
                                            <span>
                                                <?php
                                                echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                                                ?>
                                            </span>
                                        </td>

                                        <td class="product-quantity" data-title="<?php _e( 'Quantity', 'woocommerce' ); ?>">
                                            <?php
                                            $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                                            echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
                                            ?>
                                        </td>

                                        <td class="product-subtotal" data-title="<?php _e( 'Total', 'woocommerce' ); ?>">
                                            <span>
                                                 <?php
                                                 echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
                                                 ?>
                                            </span>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }

                            do_action( 'woocommerce_cart_contents' );
                            ?>
                            <!--                            <tr>-->
                            <!--                                <td class="art-name-cart"><span>Name of the art</span></td>-->
                            <!--                                <td><span>$800.00</span></td>-->
                            <!--                                <td class="quantity"><span>1</span></td>-->
                            <!--                                <td><span>$800.00</span></td>-->
                            <!--                            </tr>-->
                            <!--                            <tr>-->
                            <!--                                <td></td>-->
                            <!--                                <td>-->
                            <!--                                    <span>Subtotal</span>-->
                            <!--                                </td>-->
                            <!--                                <td></td>-->
                            <!--                                <td>-->
                            <!--                                    <span>$800.00</span>-->
                            <!--                                </td>-->
                            <!--                            </tr>-->
                            <?php do_action( 'woocommerce_after_cart_contents' ); ?>
                            </tbody>
                        </table>
                        <?php do_action( 'woocommerce_after_cart_table' ); ?>

                    </div>
                </form>
                <?php do_action( 'woocommerce_after_cart' ); ?>
                <div class="cart-footer">
                    <div class="info">
                        <ul>
                            <li><a href="#">Purchasing FAQ</a></li>
                            <li><a href="#">Shopping info</a></li>
                            <li><a href="#">Return Policy</a></li>
                        </ul>
                    </div>
                    <div class="button-cont">
                        <button class="btn btn-transparent">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

