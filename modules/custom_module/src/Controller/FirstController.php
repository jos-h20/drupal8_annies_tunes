<?php
/**
@file
Contains \Drupal\custom_module\Controller\FirstController.
 */

namespace Drupal\custom_module\Controller;

class FirstController {
  public function hello() {
  return array(
      '#type' => 'markup',
      '#markup' => 'Hello world',
    );
  }
}
