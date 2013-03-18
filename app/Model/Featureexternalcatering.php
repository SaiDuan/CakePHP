<?php
App::uses('AppModel', 'Model');
/**
 * Featureexternalcatering Model
 *
 * @property Halls $Halls
 */
class Featureexternalcatering extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'caterings_description';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Halls' => array(
			'className' => 'Halls',
			'foreignKey' => 'featureexternalcaterings_id',
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
