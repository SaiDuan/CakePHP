<?php
App::uses('AppModel', 'Model');
/**
 * Partyfacilitiesdj Model
 *
 * @property Hall $Hall
 */
class Partyfacilitiesdj extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'dj_descriptions';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Hall' => array(
			'className' => 'Hall',
			'foreignKey' => 'partyfacilitiesdjs_id',
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
