<?php

/**
 * Implements hook_views_data_alter().
 */
function amulya_billing_views_data_alter(array &$data) {
    $data['node']['bill_total'] = array(
        'title' => t('Bill Total'),
	    'field' => array(
            'title' => t('Bill Total'),
            'help' => t('Bill Total'),
            'id' => 'bill_total',
        ),
    );

    $data['node']['bill_paid'] = array(
        'title' => t('Paid Amount'),
	    'field' => array(
            'title' => t('Paid Amount'),
            'help' => t('Paid Amount'),
            'id' => 'bill_paid',
        ),
    );

    $data['node']['bill_pending'] = array(
        'title' => t('Balance'),
	    'field' => array(
            'title' => t('Balance'),
            'help' => t('Balance'),
            'id' => 'bill_pending',
        ),
    );
}
