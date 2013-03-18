<?php
App::uses('AppModel', 'Model');
/**
 * Availability Model
 *
 * @property Hall $Hall
 */
class Availability extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'day';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Hall' => array(
			'className' => 'Hall',
			'joinTable' => 'halls_has_availabilities',
			'foreignKey' => 'availability_id',
			'associationForeignKey' => 'halls_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
