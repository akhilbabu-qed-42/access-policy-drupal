<?php

declare(strict_types=1);

namespace Drupal\test_access_policy\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Test access policy routes.
 */
final class TestAccessPolicyController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function __invoke(): array {
    $build['content'] = [
      '#markup' => $this->currentUser()->hasPermission('access promotional banners') ? 'Some promotional banner' : '',
      '#cache' => [
        'contexts' => ['languages'],
      ],
    ];

    return $build;
  }

}
