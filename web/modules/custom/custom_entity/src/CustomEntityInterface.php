<?php

namespace Drupal\custom_entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a custom entity entity type.
 */
interface CustomEntityInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

  /**
   * Gets the custom entity title.
   *
   * @return string
   *   Title of the custom entity.
   */
  public function getTitle();

  /**
   * Sets the custom entity title.
   *
   * @param string $title
   *   The custom entity title.
   *
   * @return \Drupal\custom_entity\CustomEntityInterface
   *   The called custom entity entity.
   */
  public function setTitle($title);

  /**
   * Gets the custom entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the custom entity.
   */
  public function getCreatedTime();

  /**
   * Sets the custom entity creation timestamp.
   *
   * @param int $timestamp
   *   The custom entity creation timestamp.
   *
   * @return \Drupal\custom_entity\CustomEntityInterface
   *   The called custom entity entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the custom entity status.
   *
   * @return bool
   *   TRUE if the custom entity is enabled, FALSE otherwise.
   */
  public function isEnabled();

  /**
   * Sets the custom entity status.
   *
   * @param bool $status
   *   TRUE to enable this custom entity, FALSE to disable.
   *
   * @return \Drupal\custom_entity\CustomEntityInterface
   *   The called custom entity entity.
   */
  public function setStatus($status);

}
