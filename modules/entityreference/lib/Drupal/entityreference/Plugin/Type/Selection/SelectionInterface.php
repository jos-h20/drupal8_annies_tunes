<?php

/**
 * @file
 * Definition of Drupal\entityreference\Plugin\Type\Selection\SelectionInterface.
 */

namespace Drupal\entityreference\Plugin\Type\Selection;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Database\Query\AlterableInterface;

/**
 * Interface definition for entityre-ference selection plugins.
 */
interface SelectionInterface  {

  /**
   * Return a list of referencable entities.
   *
   * @return
   *   An array of referencable entities, which keys are entity ids and
   *   values (safe HTML) labels to be displayed to the user.
   */
  public function getReferencableEntities($match = NULL, $match_operator = 'CONTAINS', $limit = 0);

  /**
   * Count entities that are referencable by a given field.
   */
  public function countReferencableEntities($match = NULL, $match_operator = 'CONTAINS');

  /**
   * Validate that entities can be referenced by this field.
   *
   * @return
   *   An array of entity ids that are valid.
   */
  public function validateReferencableEntities(array $ids);

  /**
   * Validate Input from autocomplete widget that has no Id.
   *
   * @see _entityreference_autocomplete_validate()
   *
   * @param $input
   *   Single string from autocomplete widget.
   * @param $element
   *   The form element to set a form error.
   * @return
   *   Value of a matching entity id, or NULL if none.
   */
  public function validateAutocompleteInput($input, &$element, &$form_state, $form);

  /**
   * Give the handler a chance to alter the SelectQuery generated by EntityFieldQuery.
   */
  public function entityFieldQueryAlter(AlterableInterface $query);

  /**
   * Generate a settings form for this handler.
   */
  public static function settingsForm($field, $instance);
}
