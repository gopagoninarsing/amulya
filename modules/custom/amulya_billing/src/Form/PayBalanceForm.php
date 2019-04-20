<?php

/**
 * @file
 * Contains \Drupal\amulya_billing\Form\PayBalanceForm
 */

namespace Drupal\amulya_billing\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\paragraphs\Entity\Paragraph;

class PayBalanceForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'pay_balance_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, $id = NULL) {
    $form['balance'] = [
      '#type' => 'number',
      '#title' => $this->t('Balance'),
      '#default_value' => $this->getBalanceAmount($id),
    ];

    $form['bill_id'] = [
      '#type' => 'hidden',
      '#value' => $id,
    ];
    
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit')
    ]; 
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
      $bill_id = $form_state->getValues()["bill_id"];
      $balance = $form_state->getValues()["balance"];
      $this->saveBalance($bill_id, $balance);
      $url = \Drupal\Core\Url::fromRoute('view.bills_list.page_1');
      return $form_state->setRedirectUrl($url);
  }

  public function getBalanceAmount($nid) {
      $node = \Drupal\node\Entity\Node::load($nid);
      if ($node->getType() == 'bill') {
          return $node->get('field_balance_amount')->getValue()[0]['value'];
      }
      return 0;
  }

  public function saveBalance($nid, $balance) {
      $node = \Drupal\node\Entity\Node::load($nid);
      $old_balance = $node->get('field_balance_amount')->getValue()[0]['value'];
      
      if ($balance > 0) {
          $paragraph = Paragraph::create(['type' => 'payments']);
          $paragraph->set('field_paid_amount', $balance);
          $paragraph->isNew();
          $paragraph->save();
          
          $current = $node->get('field_payments')->getValue();
          
          $current[] = array(
              'target_id' => $paragraph->id(),
              'target_revision_id' => $paragraph->getRevisionId(),
          );

          $balance_new =  $old_balance-$balance;
          $node->set('field_balance_amount', $balance_new);
          if ($balance_new == 0) {
              $node->set('field_bill_status', 'Closed');
          }
          $node->set('field_payments', $current);
          $node->save();
      }
  }
  
}