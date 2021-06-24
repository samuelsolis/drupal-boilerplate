<?php

/**
 * @file
 * Theme settings form for theme_test theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function theme_test_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['theme_test'] = [
    '#type' => 'details',
    '#title' => t('theme_test'),
    '#open' => TRUE,
  ];

  $form['theme_test']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
