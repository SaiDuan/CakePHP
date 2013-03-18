<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Hallsowner $Hallsowner
 */
class User extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Hallsowner' => array(
			'className' => 'Hallsowner',
			'foreignKey' => 'users_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
                        'dependent' => true
		)
	);
	
	public $validate = array(
		'username'=>array(
			'Please enter your username. '=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter your username.'
			),
			'The username must be between 5 and 15 						characters. '=>array(
				'rule'=>array('between',5,15),
				'message'=>'The username must be between 5 					and 15 characters. '
			),
			'That username has already been taken.'=>array(
				'rule'=>'isUnique',
				'message'=>'That username has already been 						taken.'
			)
		),
		
		'password'=>array(
			'Please enter your password. '=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter your password.'
			),
			'Match passwords'=>array(
				'rule'=>'matchPasswords',
				'message'=>'Your passwords do not match'
			)
		),
		
				'password_confirmation'=>array(
			'Please enter your password. '=>array(
				'rule'=>'notEmpty',
				'message'=>'Please confirm your password.'
			)
		)
	);

	public function matchOldPasswords($id=null){
		
	}


	public function matchPasswords($data){
		if($data['password'] == $this->data['User']					['password_confirmation']){
			return true;
		}
		$this->invalidate('password_confirmation', 'Your passwords do not match');
		return false;
	}

	public function beforeSave(){
		if(isset($this->data['User']['password'])){
			$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
		}
		return true;
	}
}
