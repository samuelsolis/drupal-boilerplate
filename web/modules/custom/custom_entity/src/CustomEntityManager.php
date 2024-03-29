<?php

namespace Drupal\custom_entity;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Class customEntityManager
 * @package Drupal\custom_entity
 */
class CustomEntityManager {

  protected $entityTypeManager;

  /**
   * customEntityManager constructor.
   * @param EntityTypeManagerInterface $entityTypeManager
   */
  public function __construct(EntityTypeManagerInterface $entityTypeManager) {
    $this->entityTypeManager = $entityTypeManager;
  }

  /**
   * Load an entity based on his title.
   *
   * @param string $title
   *   The title to search.
   *
   * @return EntityInterface|null
   *   The entity loaded if exists.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  public function loadCustomEntityByTitle(string $title) :? EntityInterface {

    $entities = $this->entityTypeManager
      ->getStorage('custom_entity')
      ->loadByProperties(['title' => $title]);

    return reset($entities);
  }
}
