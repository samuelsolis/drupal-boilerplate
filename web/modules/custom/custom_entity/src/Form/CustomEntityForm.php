<?php

namespace Drupal\custom_entity\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the custom entity entity edit forms.
 */
class CustomEntityForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {

    $entity = $this->getEntity();
    $result = $entity->save();
    $link = $entity->toLink($this->t('View'))->toRenderable();

    $message_arguments = ['%label' => $this->entity->label()];
    $logger_arguments = $message_arguments + ['link' => render($link)];

    if ($result == SAVED_NEW) {
      $this->messenger()->addStatus($this->t('New custom entity %label has been created.', $message_arguments));
      $this->logger('custom_entity')->notice('Created new custom entity %label', $logger_arguments);
    }
    else {
      $this->messenger()->addStatus($this->t('The custom entity %label has been updated.', $message_arguments));
      $this->logger('custom_entity')->notice('Updated new custom entity %label.', $logger_arguments);
    }

    $form_state->setRedirect('entity.custom_entity.canonical', ['custom_entity' => $entity->id()]);
  }

}
