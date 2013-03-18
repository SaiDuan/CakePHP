<?php
App::uses('AppModel', 'Model');
/**
 * Hall Model
 *
 * @property Hallsowner $Hallsowner
 * @property Featurepaking $Featurepaking 
 * @property Image $Image
 * @property Room $Room
 * @property Restrictiondecoration $Restrictiondecoration
 * @property Featurecateringrestriction $Featurecateringrestriction
 * @property Availability $Availability
 * @property Suitability $Suitability
 * @property Pricing $Pricing
 * @property TechnicalFacility $TechnicalFacility
 * @property Indoorfacility $Indoorfacility
 * @property Outdoorfacility $Outdoorfacility
 */
class Hall extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'hall_name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */

	public $belongsTo = array(
		'Hallsowner' => array(
			'className' => 'Hallsowner',
			'foreignKey' => 'hallsowners_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
           'Featureparking' => array(
			'className' => 'Featureparking',
			'foreignKey' => 'featureparkings_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
           'Featureexternalcatering' => array(
			'className' => 'Featureexternalcatering',
			'foreignKey' => 'featureexternalcaterings_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
           'Partyfacilitiesdj' => array(
			'className' => 'Partyfacilitiesdj',
			'foreignKey' => 'partyfacilitiesdjs_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
           'Partyfacilitymusic' => array(
			'className' => 'Partyfacilitymusic',
			'foreignKey' => 'partyfacilitymusics_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
           'Partyfacilityband' => array(
			'className' => 'Partyfacilityband',
			'foreignKey' => 'partyfacilitybands_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
           'Partyfacilitydisco' => array(
			'className' => 'Partyfacilitydisco',
			'foreignKey' => 'partyfacilitydiscos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
           'Partyfacilitydancefloor' => array(
			'className' => 'Partyfacilitydancefloor',
			'foreignKey' => 'partyfacilitydancefloors_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
           'Restrictionnoise' => array(
			'className' => 'Restrictionnoise',
			'foreignKey' => 'restrictionnoises_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
           'Restrictionevent' => array(
			'className' => 'Restrictionevent',
			'foreignKey' => 'restrictionevents_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
           'Restrictionminor' => array(
			'className' => 'Restrictionminor',
			'foreignKey' => 'restrictionminors_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
           'Restrictionanimal' => array(
			'className' => 'Restrictionanimal',
			'foreignKey' => 'restrictionanimals_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
           'Restrictionsmoking' => array(
			'className' => 'Restrictionsmoking',
			'foreignKey' => 'restrictionsmokings_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Image' => array(
			'className' => 'Image',
			'foreignKey' => 'halls_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Room' => array(
			'className' => 'Room',
			'foreignKey' => 'halls_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Restrictiondecoration' => array(
			'className' => 'Restrictiondecoration',
			'joinTable' => 'halls_has_restrictiondecorations',
			'foreignKey' => 'halls_id',
			'associationForeignKey' => 'restrictiondecoration_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Featurecateringrestriction' => array(
			'className' => 'Featurecateringrestriction',
			'joinTable' => 'halls_has_featurecateringrestrictions',
			'foreignKey' => 'halls_id',
			'associationForeignKey' => 'featurecateringrestriction_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Availability' => array(
			'className' => 'Availability',
			'joinTable' => 'halls_has_availabilities',
			'foreignKey' => 'halls_id',
			'associationForeignKey' => 'availability_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Suitability' => array(
			'className' => 'Suitability',
			'joinTable' => 'halls_has_suitabilities',
			'foreignKey' => 'halls_id',
			'associationForeignKey' => 'suitability_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Pricing' => array(
                'with' => 'HallsHasPricing',
			'className' => 'Pricing',
			'joinTable' => 'halls_has_pricings',
			'foreignKey' => 'halls_id',
			'associationForeignKey' => 'pricing_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => 'price_name ASC',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'TechnicalFacility' => array(
			'className' => 'TechnicalFacility',
			'joinTable' => 'halls_has_technical_facilities',
			'foreignKey' => 'halls_id',
			'associationForeignKey' => 'technicalfacility_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Indoorfacility' => array(
			'className' => 'Indoorfacility',
			'joinTable' => 'halls_has_indoorfacilities',
			'foreignKey' => 'halls_id',
			'associationForeignKey' => 'indoorfacility_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Outdoorfacility' => array(
			'className' => 'Outdoorfacility',
			'joinTable' => 'halls_has_outdoorfacilities',
			'foreignKey' => 'halls_id',
			'associationForeignKey' => 'outdoorfacility_id',
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
