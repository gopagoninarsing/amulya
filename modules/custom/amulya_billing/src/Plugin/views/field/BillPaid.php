<?php

/**
 * @file
 * Definition of Drupal\amulya_billing\Plugin\views\field\BillPaid
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
 * @ViewsField("bill_paid")
 */
class BillPaid extends FieldPluginBase {
    
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
        $payments = $value->_entity->get('field_payments')->getValue();
        $total_payments = 0;
        foreach($payments as $payment) {
            $payments_info = \Drupal\paragraphs\Entity\Paragraph::load($payment['target_id']);
            $total_payments = $total_payments + $payments_info->get('field_paid_amount')->getValue()[0]['value'];
        }
        return $total_payments;
    }
}
