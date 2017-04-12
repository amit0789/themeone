

<?php
// 100000
$price = get_post_meta( $post_id, 'amit_theme_price', true );
?>
<section class="hmd-pricing">
		<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="hmd-offer">
				<span itemprop="priceCurrency" content="INR" class="hmd-currency">₹</span><span
						itemprop="price" content="100000.00" class="hmd-price"><?php number_format_i18n( $price, 2 ); ?></span>
		</div>
		<form class="hmd-cta-form">
				<input type="submit" name="hmd-submit" value="">
		</form>
</section>