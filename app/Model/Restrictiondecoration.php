<?php
App::uses('AppModel', 'Model');
/**
 * Restrictiondecoration Model
 *
 * @property Hall $Hall
 */
class Restrictiondecoration extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'decoration_description';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Hall' => array(
			'className' => 'Hall',
			'joinTable' => 'halls_has_restrictiondecorations',
			'foreignKey' => 'restrictiondecoration_id',
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
