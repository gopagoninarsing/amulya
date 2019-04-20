<?php

/**
 * @file
 * Definition of Drupal\amulya_billing\Plugin\views\field\BillTotal
 */

namespace Drupal\amulya_billing\Plugin\views\field;

use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\NodeType;
use Drupal\views\Plugin\views\field\FieldPluginBase;
use Drupal\views\ResultRow;

/**
 * Field handler to flag the node type.
 *
 * @ingroup views_field_handlers
 *
 * @ViewsField("bill_total")
 */
class BillTotal extends FieldPluginBase {
    
    /**
     * @{inheritdoc}
     */
    public function query() {
        // Leave empty to avoid a query on this field.
    }
    
    /**
     * Define the available options
     * @return array
     */
    protected function defineOptions() {
        $options = parent::defineOptions();
        return $options;
    }
    
    /**
     * Provide the options form.
     */
    public function buildOptionsForm(&$form, FormStateInterface $form_state) {
        parent::buildOptionsForm($form, $form_state);
    }

    /**
     * @{inheritdoc}
     */
    public function render(ResultRow $value) {
        $services = $value->_entity->get('field_services')->getValue();
        $total_amount = 0;
        foreach($services as $service) {
            $service_info = \Drupal\paragraphs\Entity\Paragraph::load($service['target_id']);
            $total_amount = $total_amount + $service_info->get('field_total')->getValue()[0]['value'];
        }
        return $total_amount;
    }
}
