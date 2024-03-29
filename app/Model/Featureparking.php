<?php
App::uses('AppModel', 'Model');
/**
 * Featureparking Model
 *
 * @property Hall $Hall
 */
class Featureparking extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'featureparkings_desciption';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Hall' => array(
			'className' => 'Hall',
			'foreignKey' => 'featureparkings_id',
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
