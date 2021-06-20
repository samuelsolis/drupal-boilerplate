<?php

namespace Drupal\custom_entity\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Custom entity type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "custom_entity_type",
 *   label = @Translation("Custom entity type"),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\custom_entity\Form\CustomEntityTypeForm",
 *       "edit" = "Drupal\custom_entity\Form\CustomEntityTypeForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\custom_entity\CustomEntityTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   admin_permission = "administer custom entity types",
 *   bundle_of = "custom_entity",
 *   config_prefix = "custom_entity_type",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/custom_entity_types/add",
 *     "edit-form" = "/admin/structure/custom_entity_types/manage/{custom_entity_type}",
 *     "delete-form" = "/admin/structure/custom_entity_types/manage/{custom_entity_type}/delete",
 *     "collection" = "/admin/structure/custom_entity_types"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "uuid",
 *   }
 * )
 */
class CustomEntityType extends ConfigEntityBundleBase {

  /**
   * The machine name of this custom entity type.
   *
   * @var string
   */
  protected $id;

  /**
   * The human-readable name of the custom entity type.
   *
   * @var string
   */
  protected $label;

}
