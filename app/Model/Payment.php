<?php
App::uses('AppModel', 'Model');
/**
 * Payment Model
 *
 * @property Annualsubcription $Annualsubcription
 */
class Payment extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Annualsubcription' => array(
			'className' => 'Annualsubcription',
			'foreignKey' => 'annualsubcriptions_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
