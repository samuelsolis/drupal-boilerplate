<?php

namespace Drupal\drupal_example_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for drupal_example_module routes.
 */
class DrupalExampleModuleController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
