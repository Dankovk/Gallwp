<?php

    get_header();
?>

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

<?

    if ( have_posts() ) : the_post();
        ?>

        <div class="layout-content no-padding" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/cart-bg.png')">
            <div class="cart-container">
                <div class="layout-container art-container">
                    <div class="shopping-cart">
                        <div class="cart-header">
                            <h2>Shopping cart</h2>
                        </div>

                        <?
                        the_content();
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?
    endif;

    get_footer();
