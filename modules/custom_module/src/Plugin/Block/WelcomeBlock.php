<?php
/**
 * @file
 * Contains \Drupal\custom_module\Plugin\Block\WelcomeBlock.
 */
namespace Drupal\custom_module\Plugin\Block;
use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'Welcome' Block
 *
 * @Block(
 *   id = "welcome_block",
 *   admin_label = @Translation("Welcome block"),
 * )
 */

class WelcomeBlock extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
        return array(
            '#markup' => $this->t('Hey, nice to see ya!'),
        );
    }
}
