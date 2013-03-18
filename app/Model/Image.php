<?php
App::uses('AppModel', 'Model');
/**
 * Image Model
 *
 * @property Hall $Hall
 */
class Image extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'image_location';

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
