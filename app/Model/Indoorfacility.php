<?php
App::uses('AppModel', 'Model');
/**
 * Indoorfacility Model
 *
 * @property Hall $Hall
 */
class Indoorfacility extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'indoor_facilities_name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Hall' => array(
			'className' => 'Hall',
			'joinTable' => 'halls_has_indoorfacilities',
			'foreignKey' => 'indoorfacility_id',
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
