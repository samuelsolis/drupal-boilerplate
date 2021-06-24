/**
 * @file
 * theme_test behaviors.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Behavior description.
   */
  Drupal.behaviors.themeTest = {
    attach: function (context, settings) {

      console.log('It works!');

    }
  };

} (jQuery, Drupal));
