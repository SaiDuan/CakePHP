<?php
App::uses('AppModel', 'Model');
/**
 * Annualsubcription Model
 *
 * @property Payment $Payment
 * @property Subtype $Subtype
 */
class Annualsubcription extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Payment' => array(
			'className' => 'Payment',
			'foreignKey' => 'annualsubcriptions_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Subtype' => array(
			'className' => 'Subtype',
			'foreignKey' => 'subtypes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
