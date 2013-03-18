<?php
App::uses('AppModel', 'Model');
/**
 * Partyfacilityband Model
 *
 * @property Hall $Hall
 */
class Partyfacilityband extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'band_description';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Hall' => array(
			'className' => 'Hall',
			'foreignKey' => 'partyfacilitybands_id',
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
