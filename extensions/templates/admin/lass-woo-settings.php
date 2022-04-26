<?php
defined( 'ABSPATH' ) OR die( 'No script kiddies, please!' );

$lass_woo_position = $this->clean_value_esc_attr(get_option('lass_woo_position'));
$lass_woo_archive = $this->clean_value_esc_attr(get_option('lass_woo_archive'));
$lass_woo_archive_position = $this->clean_value_esc_attr(get_option('lass_woo_archive_position'));

$lass_selected_post_types = $this->clean_value_esc_attr((array)get_option('lass_selected_post_types')); // return array lists

if ( Lass_WoocommerceSettings::CheckWooCommerceExist() === false ) {
	echo '<h2>' . __("Sorry, we didn't find WooCommerce" ) . '</h2>';
	return;
}

if ( !in_array('product', $lass_selected_post_types) ) {
	echo '<h2>' . __('You must enable Products from settings page.') . '</h2>';
	echo '<a href="'.esc_url( get_admin_url(null, 'admin.php?page=lass-settings') ).'">'.__('Settings page', 'lass').'</a>';

	return;
}

?>
<div class="lass_options_wrapper">
	<h2 class="options-title"><?php _e('Likes and share options - WooCommerce','lass'); ?></h2>
	<form method="post" action="options.php">
		<?php settings_fields( 'lass-woo-options' ); ?>
	<table class="form-table-lass">
    <tr>
      <td><?php _e('Position on single product page:','lass'); ?></td>
      <td>
	     <span class="lass-span-wrapp-form">
		     <label for="lass_woo_position_1_1">
	        <input type="radio" name="lass_woo_position" value="<?php echo esc_attr('woocommerce_share'); ?>" id="lass_woo_position_1_1" <?php echo ($lass_woo_position === 'woocommerce_share')?'checked':''; ?>> <?php _e('Woocommerce standard share position', 'lass'); ?>
	        </label>
	     </span>

        <span class="lass-span-wrapp-form">
		     <label for="lass_woo_position_1">
	        <input type="radio" name="lass_woo_position" value="<?php echo esc_attr('woocommerce_single_product_summary'); ?>" id="lass_woo_position_1" <?php echo ($lass_woo_position === 'woocommerce_single_product_summary')?'checked':''; ?>> <?php _e('Single product summary - (before product title)', 'lass'); ?>
	        </label>
	     </span>

        <span class="lass-span-wrapp-form">
		     <label for="lass_woo_position_2">
	        <input type="radio" name="lass_woo_position" value="<?php echo esc_attr('woocommerce_before_add_to_cart_form'); ?>" id="lass_woo_position_2" <?php echo ($lass_woo_position === 'woocommerce_before_add_to_cart_form')?'checked':''; ?>> <?php _e('Before add to cart <strong>form</strong>', 'lass'); ?>
	        </label>
	     </span>

        <span class="lass-span-wrapp-form">
		     <label for="lass_woo_position_3">
	        <input type="radio" name="lass_woo_position" value="<?php echo esc_attr('woocommerce_before_add_to_cart_button'); ?>" id="lass_woo_position_3" <?php echo ($lass_woo_position === 'woocommerce_before_add_to_cart_button')?'checked':''; ?>> <?php _e('Before add to cart <strong>button</strong>', 'lass'); ?>
	        </label>
	     </span>

        <span class="lass-span-wrapp-form">
		     <label for="lass_woo_position_4">
	        <input type="radio" name="lass_woo_position" value="<?php echo esc_attr('woocommerce_after_add_to_cart_button'); ?>" id="lass_woo_position_4" <?php echo ($lass_woo_position === 'woocommerce_after_add_to_cart_button')?'checked':''; ?>> <?php _e('After add to cart <strong>button</strong>', 'lass'); ?>
	        </label>
	     </span>

        <span class="lass-span-wrapp-form">
		     <label for="lass_woo_position_5">
	        <input type="radio" name="lass_woo_position" value="<?php echo esc_attr('woocommerce_after_add_to_cart_form'); ?>" id="lass_woo_position_5" <?php echo ($lass_woo_position === 'woocommerce_after_add_to_cart_form')?'checked':''; ?>> <?php _e('After add to cart <strong>form</strong>', 'lass'); ?>
	        </label>
	     </span>

        <span class="lass-span-wrapp-form">
		     <label for="lass_woo_position_6">
	        <input type="radio" name="lass_woo_position" value="<?php echo esc_attr('woocommerce_before_single_product_summary'); ?>" id="lass_woo_position_6" <?php echo ($lass_woo_position === 'woocommerce_before_single_product_summary')?'checked':''; ?>> <?php _e('Before Single product summary', 'lass'); ?>
	        </label>
	     </span>

        <span class="lass-span-wrapp-form">
		     <label for="lass_woo_position_6_1">
	        <input type="radio" name="lass_woo_position" value="<?php echo esc_attr('woocommerce_after_single_product_summary'); ?>" id="lass_woo_position_6_1" <?php echo ($lass_woo_position === 'woocommerce_after_single_product_summary')?'checked':''; ?>> <?php _e('After Single product summary', 'lass'); ?>
	        </label>
	     </span>

        <span class="lass-span-wrapp-form">
		     <label for="lass_woo_position_7">
	        <input type="radio" name="lass_woo_position" value="<?php echo esc_attr('woocommerce_before_single_product'); ?>" id="lass_woo_position_7" <?php echo ($lass_woo_position === 'woocommerce_before_single_product')?'checked':''; ?>> <?php _e('Before Single product (high top)', 'lass'); ?>
	        </label>
	     </span>

        <span class="lass-span-wrapp-form">
		     <label for="lass_woo_position_8">
	        <input type="radio" name="lass_woo_position" value="<?php echo esc_attr('woocommerce_after_single_product'); ?>" id="lass_woo_position_8" <?php echo ($lass_woo_position === 'woocommerce_after_single_product')?'checked':''; ?>> <?php _e('After Single product (bottom)', 'lass'); ?>
	        </label>
	     </span>
      </td>

    </tr>

    <tr>
      <td><?php _e('Show on archive/category page:','lass'); ?></td>
      <td>
	     <span class="lass-span-wrapp-form">
		     <label for="lass_woo_archive">
	        <input type="radio" name="lass_woo_archive" value="<?php echo esc_attr('yes'); ?>" id="lass_woo_archive" <?php echo ($lass_woo_archive === 'yes')?'checked':''; ?>> <?php _e('Yes', 'lass'); ?>
	        </label>
	     </span>
        <span class="lass-span-wrapp-form">
		     <label for="lass_woo_archive_2">
	        <input type="radio" name="lass_woo_archive" value="<?php echo esc_attr('no'); ?>" id="lass_woo_archive_2" <?php echo ($lass_woo_archive === 'no')?'checked':''; ?>> <?php _e('No', 'lass'); ?>
	        </label>
	     </span>
      </td>

    </tr>

    <tr class="lass-woo-archive-position" style="display: <?php echo $lass_woo_archive === 'yes'?'table-row':'none'; ?>">
      <td><?php _e('Position on archive/category:','lass'); ?></td>
      <td>
	     <span class="lass-span-wrapp-form">
		     <label for="lass_woo_archive_position">
	        <input type="radio" name="lass_woo_archive_position" value="<?php echo esc_attr('woocommerce_after_shop_loop_item'); ?>" id="lass_woo_archive_position" <?php echo ($lass_woo_archive_position === 'woocommerce_after_shop_loop_item')?'checked':''; ?>> <?php _e('Standard position', 'lass'); ?>
	        </label>
	     </span>
        <span class="lass-span-wrapp-form">
		     <label for="lass_woo_archive_position_2">
	        <input type="radio" name="lass_woo_archive_position" value="<?php echo esc_attr('woocommerce_before_shop_loop_item'); ?>" id="lass_woo_archive_position_2" <?php echo ($lass_woo_archive_position === 'woocommerce_before_shop_loop_item')?'checked':''; ?>> <?php _e('Before product', 'lass'); ?>
	        </label>
	     </span>

        <span class="lass-span-wrapp-form">
		     <label for="lass_woo_archive_position_3">
	        <input type="radio" name="lass_woo_archive_position" value="<?php echo esc_attr('woocommerce_shop_loop_item_title'); ?>" id="lass_woo_archive_position_3" <?php echo ($lass_woo_archive_position === 'woocommerce_shop_loop_item_title')?'checked':''; ?>> <?php _e('Before product title', 'lass'); ?>
	        </label>
	     </span>
      </td>
    </tr>
</table>
<?php submit_button(); ?>
</form>
