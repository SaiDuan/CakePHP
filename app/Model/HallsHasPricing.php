<?php
App::uses('AppModel', 'Model');
/**
 * HallsHasPricing Model
 *
 * @property Pricing $Pricing
 * @property Hall $Hall
 */
class HallsHasPricing extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Pricing' => array(
			'className' => 'Pricing',
			'foreignKey' => 'pricing_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Hall' => array(
			'className' => 'Hall',
			'foreignKey' => 'halls_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
