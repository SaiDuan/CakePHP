<?php
App::uses('AppModel', 'Model');
/**
 * Hallsowner Model
 *
 * @property User $User
 * @property Subtype $Subtype
 * @property Hall $Hall
 */
class Hallsowner extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'hallsowner_first_name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'users_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
                        'dependent'=> true

		),
		'Subtype' => array(
			'className' => 'Subtype',
			'foreignKey' => 'subtypes_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
                        'dependent' => true
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Hall' => array(
			'className' => 'Hall',
			'foreignKey' => 'hallsowners_id',
			'dependent' => true,
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
