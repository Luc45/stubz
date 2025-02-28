<?php

/**
 * Filter to change the product quantity stepping in the order editor of the admin area.
 *
 * @since   5.8.0
 * @param   string      $step    The current step amount to be used in the quantity editor.
 * @param   WC_Product  $product The product that is being edited.
 * @param   string      $context The context in which the quantity editor is shown, 'edit' or 'refund'.
 */
$step_edit = \apply_filters('woocommerce_quantity_input_step_admin', $step, $product, 'edit');
/**
 * Filter to change the product quantity minimum in the order editor of the admin area.
 *
 * @since   5.8.0
 * @param   string      $step    The current minimum amount to be used in the quantity editor.
 * @param   WC_Product  $product The product that is being edited.
 * @param   string      $context The context in which the quantity editor is shown, 'edit' or 'refund'.
 */
$min_edit = \apply_filters('woocommerce_quantity_input_min_admin', '0', $product, 'edit');