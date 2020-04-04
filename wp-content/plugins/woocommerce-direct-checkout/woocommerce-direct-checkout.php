<?php

/**
 * Plugin Name: WooCommerce Direct Checkout
 * Description: Simplifies the checkout process to improve your sales rate.
 * Version:     2.3.2
 * Author:      QuadLayers
 * Author URI:  https://www.quadlayers.com
 * Copyright:   2019 QuadLayers (https://www.quadlayers.com)
 * Text Domain: woocommerce-direct-checkout
 */
if (!defined('ABSPATH')) {
  die('-1');
}
if (!defined('QLWCDC_PLUGIN_NAME')) {
  define('QLWCDC_PLUGIN_NAME', 'WooCommerce Direct Checkout');
}
if (!defined('QLWCDC_PLUGIN_VERSION')) {
  define('QLWCDC_PLUGIN_VERSION', '2.3.2');
}
if (!defined('QLWCDC_PLUGIN_FILE')) {
  define('QLWCDC_PLUGIN_FILE', __FILE__);
}
if (!defined('QLWCDC_PLUGIN_DIR')) {
  define('QLWCDC_PLUGIN_DIR', __DIR__ . DIRECTORY_SEPARATOR);
}
if (!defined('QLWCDC_PREFIX')) {
  define('QLWCDC_PREFIX', 'qlwcdc');
}
if (!defined('QLWCDC_DOMAIN')) {
  define('QLWCDC_DOMAIN', QLWCDC_PREFIX);
}
if (!defined('QLWCDC_WORDPRESS_URL')) {
  define('QLWCDC_WORDPRESS_URL', 'https://wordpress.org/plugins/woocommerce-direct-checkout/');
}
if (!defined('QLWCDC_REVIEW_URL')) {
  define('QLWCDC_REVIEW_URL', 'https://wordpress.org/support/plugin/woocommerce-checkout-manager/reviews/?filter=5#new-post');
}
if (!defined('QLWCDC_DEMO_URL')) {
  define('QLWCDC_DEMO_URL', 'https://quadlayers.com/woocommerce-direct?utm_source=qlwcdc_admin');
}
if (!defined('QLWCDC_DOCUMENTATION_URL')) {
  define('QLWCDC_DOCUMENTATION_URL', 'https://quadlayers.com/documentation/woocommerce-direct-checkout/?utm_source=qlwcdc_admin');
}
if (!defined('QLWCDC_PURCHASE_URL')) {
  define('QLWCDC_PURCHASE_URL', 'https://quadlayers.com/portfolio/woocommerce-direct-checkout/?utm_source=qlwcdc_admin');
}
if (!defined('QLWCDC_SUPPORT_URL')) {
  define('QLWCDC_SUPPORT_URL', 'https://quadlayers.com/account/support/?utm_source=qlwcdc_admin');
}
if (!defined('QLWCDC_GROUP_URL')) {
  define('QLWCDC_GROUP_URL', 'https://www.facebook.com/groups/quadlayers');
}

if (!class_exists('QLWCDC')) {
  include_once(QLWCDC_PLUGIN_DIR . 'includes/qlwcdc.php');
}


