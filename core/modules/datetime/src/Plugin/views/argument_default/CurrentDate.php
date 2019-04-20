<?php

/**
 * @file
 * Contains \Drupal\datetime\Plugin\views\argument_default\CurrentDate;
 */

namespace Drupal\datetime\Plugin\views\argument_default;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Cache\CacheableDependencyInterface;
use Drupal\views\Plugin\views\argument_default\ArgumentDefaultPluginBase;

/**
 * Default argument plugin to extract the current date
 *
 * This plugin actually has no options so it does not need to do a great deal.
 *
 * @ViewsArgumentDefault(
 *   id = "date",
 *   title = @Translation("Current date")
 * )
 */
class CurrentDate extends ArgumentDefaultPluginBase implements CacheableDependencyInterface {

  public function getArgument() {
    /** @var \Drupal\datetime\Plugin\views\Argument\Date $argument */
    $argument = $this->argument;
    $format = $argument->getFormula();
    /** @var \Drupal\Core\Datetime\DateFormatterInterface $date_formatter */
    $date_formatter = \Drupal::service('date.formatter');
    $request_time = \Drupal::requestStack()->getCurrentRequest()->server->get('REQUEST_TIME');

    return $date_formatter->format($request_time, 'custom', $format);
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheMaxAge() {
    return 0;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheContexts() {
    return [];
  }

}
