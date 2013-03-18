<?php
App::uses('AppModel', 'Model');
/**
 * Subtype Model
 *
 * @property Hallsowner $Hallsowner
 * @property Annualsubcription $Annualsubcription
 */
class Subtype extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'hallsowner_type';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Hallsowner' => array(
			'className' => 'Hallsowner',
			'foreignKey' => 'subtypes_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Annualsubcription' => array(
			'className' => 'Annualsubcription',
			'foreignKey' => 'subtypes_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
