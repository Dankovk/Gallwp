<?php
/**
 * Created by PhpStorm.
 * User: Off
 * Date: 4/17/16
 * Time: 02:33
 */

    global $product;
?>

<form method="post" enctype='multipart/form-data'>
    <div class="btn-cont">
        <button class="btn" type="submit">Add to Cart</button>
    </div>

    <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />
</form>
