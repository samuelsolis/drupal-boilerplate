<?php

namespace Drupal\mi_modulo_2\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

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

  /**
   * @return array
   */
  public function example() : array {

    $build['theme_element'] = [
      '#theme' => 'item_list',
      '#title' => $this->t('Example of using #theme'),
      '#items' => [
        $this->t('This is an item in the list'),
        $this->t('This is some more text that we need in the list'),
      ],
    ];

    $build['nested_example'] = [
      '#description' => $this->t('Example of nesting elements'),
      '#markup' => '<p>' . $this->t('Render arrays can contain any number of nested elements. During rendering, the innermost elements are rendered first, and their output is incorporated into the parent element.') . '</p>',
      'nested_child_element' => [
        // An un-ordered list of links.
        // See /core/modules/system/templates/item-list.html.twig.
        '#theme' => 'item_list',
        '#title' => $this->t('Links'),
        '#list_type' => 'ol',
        '#items' => [
          Link::fromTextAndUrl($this->t('Drupal'), Url::fromUri('https://www.drupal.org')),
          Link::fromTextAndUrl($this->t('Not Drupal'), Url::fromUri('https://wordpress.org/')),
        ],
      ],
    ];

    // Example of adding a link using the #link element type.
    $build['nested_example']['another_nested_child'] = [
      // See \Drupal\Core\Render\Element\Link.
      '#type' => 'link',
      '#title' => $this->t('A link to example.com'),
      '#url' => Url::fromUri('https://example.com'),
    ];

    return $build;
  }
}
