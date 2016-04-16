<?php /* Template Name: Single Product */ ?>

<? global $post, $product; ?>

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
    <div class="layout-content single-art-content">
        <div class="layout-container art-container">
            <div class="art-wrap">

                <div class="fotorama" data-maxheight="500px" data-allowfullscreen="true" data-nav="thumbs" data-width="100%">
                    <?php
                        $attachment_ids = $product->get_gallery_attachment_ids();
                        foreach ($attachment_ids as $id) {
                            echo '<img src="' . wp_get_attachment_url( $id ) . '">';
                        }
                    ?>
                </div>
            </div>
            <div class="art-descr-wrap">
                <div class="art-name">
                    <h2><? the_title() ?></h2>
                </div>
                <div class="art-descr">
                    <? if ( $product->has_dimensions() ) {?>
                        <p class="size"><? echo $product -> get_dimensions() ?></p>
                    <? } ?>
                    <? if ( $product -> has_attributes('material') ) {?>
                        <p class="material">
                            Material: <span><? echo $product -> get_attribute('material') ?></span>
                        </p>
                    <? } ?>
                    <? if ( $product -> has_attributes('creation_year') ) {?>
                        <p class="year">
                            Year <span><? echo $product -> get_attribute('creation_year') ?></span>
                        </p>
                    <? } ?>
                </div>

                <div class="price">
                    <span><? echo $product -> get_price_html() ?></span>
                </div>

                <? add_to_cart() ?>
            </div>
        </div>
    </div>

<!--<div style="position: absolute; background: #fff; top: 50px; white-space: pre; padding: 20px;">-->
<!--    --><?// var_dump($product) ?>
<!--</div>-->

<?php get_footer() ?>