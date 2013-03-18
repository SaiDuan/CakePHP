<?php
App::uses('AppModel', 'Model');
/**
 * Featurecateringrestriction Model
 *
 * @property Hall $Hall
 */
class Featurecateringrestriction extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'cateringrestriction_description';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Hall' => array(
			'className' => 'Hall',
			'joinTable' => 'halls_has_featurecateringrestrictions',
			'foreignKey' => 'featurecateringrestriction_id',
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
