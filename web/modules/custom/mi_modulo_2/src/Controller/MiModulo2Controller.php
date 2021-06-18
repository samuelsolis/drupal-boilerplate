<?php

namespace Drupal\mi_modulo_2\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for mi_modulo_2 routes.
 */
class MiModulo2Controller extends ControllerBase {

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
