<?php

class QLWCDC_Checkout {

  protected static $instance;

  public function __construct() {
    add_filter('woocommerce_checkout_fields', array($this, 'remove_checkout_fields'));
    add_filter('woocommerce_enable_order_notes_field', array($this, 'remove_checkout_order_commens'));
    add_filter('option_woocommerce_ship_to_destination', array($this, 'remove_checkout_shipping_address'), 10, 3);

    if ('yes' === get_option('qlwcdc_remove_checkout_privacy_policy_text')) {
      remove_action('woocommerce_checkout_terms_and_conditions', 'wc_checkout_privacy_policy_text', 20);
    }

    if ('yes' === get_option('qlwcdc_remove_checkout_terms_and_conditions')) {
      add_filter('woocommerce_checkout_show_terms', '__return_false');
      remove_action('woocommerce_checkout_terms_and_conditions', 'wc_terms_and_conditions_page_content', 30);
    }
  }

  public static function instance() {
    if (!isset(self::$instance)) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  function remove_checkout_fields($fields) {

    if ($remove = get_option('qlwcdc_remove_checkout_fields', array())) {
      foreach ($remove as $id => $key) {
        // We need to remove both fields otherwise will be required
        unset($fields['billing']['billing_' . $key]);
        unset($fields['shipping']['shipping_' . $key]);
      }
    }

    return $fields;
  }

  function remove_checkout_order_commens($return) {

    if ('yes' === get_option('qlwcdc_remove_checkout_order_comments')) {
      $return = false;
    }

    return $return;
  }

  function remove_checkout_shipping_address($val) {

    if ('yes' === get_option('qlwcdc_remove_checkout_shipping_address')) {
      $val = 'billing_only';
    }

    return $val;
  }

}

QLWCDC_Checkout::instance();
