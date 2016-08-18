<?php
// WooCommerce functions
if ( ! function_exists( 'mariana_meneses_woocommerce_setup' ) ) :
  function mariana_meneses_woocommerce_setup() {
    add_theme_support( 'woocommerce' );
  }
endif;
add_action( 'after_setup_theme', 'mariana_meneses_woocommerce_setup' );
/*
Set Default Thumbnail Sizes for WooCommerce Product Pages, on Theme Activation
*/
global $pagenow;
if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ) add_action( 'init', 'mariana_meneses_woocommerce_image_dimensions', 1 );
/*
Define image sizes
*/
function mariana_meneses_woocommerce_image_dimensions() {
  $catalog = array(
		'width' 	=> '600',	// px
		'height'	=> '600',	// px
		'crop'		=> 0 		// true
	);
	$single = array(
		'width' 	=> '520',	// px
		'height'	=> '520',	// px
		'crop'		=> 0 		// true
	);
	$thumbnail = array(
		'width' 	=> '150',	// px
		'height'	=> '150',	// px
		'crop'		=> 0 		// false
	);
	// Image sizes
	update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
	update_option( 'shop_single_image_size', $single ); 		// Single product image
	update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
}
/*
 * Add basic WooCommerce template support
 *
 */
// Remove original WooCommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
// Add BST Plus wrappers
add_action('woocommerce_before_main_content', 'mariana_meneses_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'mariana_meneses_wrapper_end', 10);
function reinnervate_wrapper_start() {
  echo '<main id="main" class="site-main" role="main">';
}
function mariana_meneses_wrapper_end() {
  echo '</main>';
}


/*
Place a BSF currency.
*/
add_filter( 'woocommerce_currencies', 'add_my_currency' );

function add_my_currency( $currencies ) {
     $currencies['VEF'] = __( 'Bolivar', 'woocommerce' );
     return $currencies;
}
add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'VEF': $currency_symbol = 'Bs.'; break;
     }
     return $currency_symbol;
}
/*
Remover tablas
*/
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

   unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;}

//Remove Sales Flash
add_filter('woocommerce_sale_flash', 'woo_custom_hide_sales_flash');
function woo_custom_hide_sales_flash()
{
    return false;
}

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );//remove "Sort By"

/** Remove Showing results functionality site-wide */
function woocommerce_result_count() {
        return;
}

//add_action('woocommerce_after_shop_loop_item_title','woocommerce_template_single_excerpt', 5);descripcion de producto bajo imagen

// Removes tabs from their original loaction 
//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

// Inserts tabs under the main right product content 
//add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 60 );

function cambiar_productos_por_pagina() {
return 4;
}
add_filter( 'loop_shop_per_page', 'cambiar_productos_por_pagina' );


/*
Place a cart icon with number of items and total cost in the menu bar.
*/

function mariana_meneses_woomenucart($menu, $args) {
	// Check if WooCommerce is active and add a new item to a menu assigned to "Navbar Upper Right" (Primary Navigation Menu) location
	if ( !in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) || 'primary' !== $args->theme_location )
		return $menu;
	ob_start();
		global $woocommerce;
		$viewing_cart = __('View your shopping cart', 'mariana-meneses');
		$start_shopping = __('Start shopping', 'mariana-meneses');
		$cart_url = $woocommerce->cart->get_cart_url();
		$shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
		$cart_contents_count = $woocommerce->cart->cart_contents_count;
		$cart_contents = sprintf(_n('%d item', '%d items', $cart_contents_count, 'mariana-meneses'), $cart_contents_count);
		$cart_total = $woocommerce->cart->get_cart_total();
    if ($cart_contents_count == 0) {
      $menu_item = '<li class="dn"><a class="woo-menu-cart" href="'. $shop_page_url .'" title="'. $start_shopping .'">';
    } else {
      $menu_item = '<li><a class="woo-menu-cart" href="'. $cart_url .'" title="'. $viewing_cart .'">';
    }
    $menu_item .= '<i class="fa fa-shopping-cart"></i> ';
    $menu_item .= $cart_contents.' - '. $cart_total;
    $menu_item .= '</a></li>';
		echo $menu_item;
	$social = ob_get_clean();
	return $menu . $social;
}
add_filter('wp_nav_menu_items','mariana_meneses_woomenucart', 10, 2);
