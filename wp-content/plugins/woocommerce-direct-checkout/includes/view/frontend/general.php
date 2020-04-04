<?php

class QLWCDC_General {

  protected static $instance;

  public function __construct() {
    add_filter('woocommerce_get_script_data', array($this, 'add_to_cart_params'));
    add_filter('wc_add_to_cart_message_html', array($this, 'add_to_cart_message'));
    add_filter('woocommerce_add_to_cart_redirect', array($this, 'add_to_cart_redirect'));

    if ('redirect' === get_option('qlwcdc_add_to_cart')) {
      add_filter('option_woocommerce_enable_ajax_add_to_cart', '__return_false');
      add_filter('option_woocommerce_cart_redirect_after_add', '__return_false');
    }
  }

  public static function instance() {
    if (!isset(self::$instance)) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  function add_to_cart_params($params) {

    if ('yes' === get_option('qlwcdc_add_to_cart_link')) {
      $params['cart_url'] = wc_get_checkout_url();
      $params['i18n_view_cart'] = esc_html__('Checkout', 'woocommerce-direct-checkout');
    }

    return $params;
  }

  function add_to_cart_message($message) {

    if ('yes' === get_option('qlwcdc_add_to_cart_message')) {

      $message = str_replace(wc_get_page_permalink('cart'), wc_get_page_permalink('checkout'), $message);

      $message = str_replace(esc_html__('View cart', 'woocommerce'), esc_html__('Checkout', 'woocommerce'), $message);
    }

    return $message;
  }

  function add_to_cart_redirect($url) {

    if ('redirect' === get_option('qlwcdc_add_to_cart')) {
      if ('cart' === get_option('qlwcdc_add_to_cart_redirect_page')) {
        $url = wc_get_cart_url();
      } elseif ('url' === get_option('qlwcdc_add_to_cart_redirect_page')) {
        $url = get_option('qlwcdc_add_to_cart_redirect_url');
      } else {
        $url = wc_get_checkout_url();
      }
    }

    return $url;
  }

}

QLWCDC_General::instance();
