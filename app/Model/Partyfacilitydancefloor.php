<?php
App::uses('AppModel', 'Model');
/**
 * Partyfacilitydancefloor Model
 *
 * @property Hall $Hall
 */
class Partyfacilitydancefloor extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'dance_floor_description';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Hall' => array(
			'className' => 'Hall',
			'foreignKey' => 'partyfacilitydancefloors_id',
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
