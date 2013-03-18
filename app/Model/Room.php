<?php
App::uses('AppModel', 'Model');
/**
 * Room Model
 *
 * @property Hall $Hall
 */
class Room extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'room_name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Hall' => array(
			'className' => 'Hall',
			'foreignKey' => 'halls_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
