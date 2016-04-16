<?php /* Template Name: Shop */ ?>

<?php get_header() ?>

<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

 ?>
<div class="bg-img"></div>

<div class="layout-header">
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









<div class="layout-content">
	<div class="layout-container">
		<div class="artist-list-border"></div>
		<div class="artists-list">
			<div class="artists-list-wrap">
				<div class="menu-categs-box">
					<?php
					$args = array(
						'number'     => $number,
						'orderby'    => $orderby,
						'order'      => $order,
						'hide_empty' => $hide_empty,
						'include'    => $ids,
						'parent'     => 0
					);

					$product_categories = get_terms( 'product_cat', $args );
					?>

					<?php
					foreach( $product_categories as $cat ) {
					?>
						<div class="artist-name">
							<a href="<?php echo get_term_link( $cat )?>" data-slug="<?php echo $cat -> slug ?>">
								<span><?php echo $cat -> name; ?></span>
							</a>
						</div>

					<?php } ?>




				</div>



				<div class="artist-name ">
					<a href="#">
						<span>TARAS TOLSTIKOV</span>
					</a>
				</div>
<!--				<div class="artist-name ">-->
<!--					<a href="#">-->
<!--						<span>JACK FARRELL</span>-->
<!--					</a>-->
<!--				</div>-->
<!--				<div class="artist-name ">-->
<!--					<a href="#">-->
<!--						<span>JACK FARRELL</span>-->
<!--					</a>-->
<!--				</div>-->
<!--				<div class="artist-name ">-->
<!--					<a href="#">-->
<!--						<span>JACK FARRELL</span>-->
<!--					</a>-->
<!--				</div>-->
<!--				<div class="artist-name ">-->
<!--					<a href="#">-->
<!--						<span>JACK FARRELL</span>-->
<!--					</a>-->
<!--				</div>-->
<!--				<div class="artist-name ">-->
<!--					<a href="#">-->
<!--						<span>JACK FARRELL</span>-->
<!--					</a>-->
<!--				</div>-->
<!--				<div class="artist-name ">-->
<!--					<a href="#">-->
<!--						<span>JACK FARRELL</span>-->
<!--					</a>-->
<!--				</div>-->
<!--				<div class="artist-name ">-->
<!--					<a href="#">-->
<!--						<span>JACK FARRELL</span>-->
<!--					</a>-->
<!--				</div>-->
<!--				<div class="artist-name ">-->
<!--					<a href="#">-->
<!--						<span>JACK FARRELL</span>-->
<!--					</a>-->
<!--				</div>-->
<!--				<div class="artist-name ">-->
<!--					<a href="#">-->
<!--						<span>JACK FARRELL</span>-->
<!--					</a>-->
<!--				</div>-->
<!--				<div class="artist-name ">-->
<!--					<a href="#">-->
<!--						<span>JACK FARRELL</span>-->
<!--					</a>-->
<!--				</div>-->
<!--				<div class="artist-name ">-->
<!--					<a href="#">-->
<!--						<span>JACK FARRELL</span>-->
<!--					</a>-->
<!--				</div>-->


			</div>

			<div class="blured"></div>

		</div>
		<div class="white-background">
			<div class="type-of-art">
				<?
					$subcategories = get_subcats();

					foreach ($subcategories as $sc) {?>
						<div class="<? echo $sc -> slug; ?>">
							<span><? echo $sc -> name; ?></span>
						</div>
					<?}
				?>

<!--				<div class="paintings"><span>PAINTINGS</span></div>-->
<!--				<div class="drawings active"><span>DRAWINGS</span></div>-->
<!--				<div class="prints"><span>PRINTS</span></div>-->
			</div>
		</div>
	</div>


	<?php

	?>


	<div class="paintings-list">
		<div class="pics-wrap">
			<div class="preloader-wrap">
				<div class="preloader-elem"></div>
			</div>
			<?php woocommerce_product_loop_start(); ?>

			<?php woocommerce_product_subcategories(); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php wc_get_template_part( 'content', 'product' ); ?>

			<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>
<!--			<figure class="imghvr-blur pic">-->
<!--				<img src="images/bill.jpg">-->
<!--				<figcaption>-->
<!--					<div class="caption-block">-->
<!--						<span class="image-caption name">name of the art</span>-->
<!--						<span class="image-caption price">800$</span>-->
<!--						<a href="#" class="buy-btn">buy</a>-->
<!--					</div>-->
<!--				</figcaption>-->
<!--			</figure>-->
		</div>
	</div>
</div>
<?php get_footer(); ?>
