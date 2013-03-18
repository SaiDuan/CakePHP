<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

//var $components=array("Email","Session");
//var $helpers=array("Html","Form","Session");

/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

public function beforeFilter(){
	parent::beforeFilter();
	$this->Auth->allow('add', 'logout');
	
}

public function RandomString($length = 8) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
    for ($i = 0; $i < $length; $i++) { 
        $randomString .= $characters[rand(0, strlen($characters) - 1)]; 
    } 
    return $randomString; 
}


public function isAuthorized($user){
	if($user['user_group'] == 'admin'){
	return true;
}
	if($user['user_group'] == 'active'){
		$this->Auth->deny('edit');
return false;
}
	if(in_array($this->action, array('edit', 'delete'))){
		if($user['id'] != $this->request->params['pass'][0]){
			return false;
		}
	}
	return true;
}

public function login(){
	if ($this->request->is('post')){
		if ($this->Auth->login()){
			$this->redirect($this->Auth->redirect());
		} else {
			$this->Session->setFlash('Your username/password combination was incorrect');
		}
	}
}

public function logout(){
	$this->redirect($this->Auth->logout());
}

public function changepassword()
        {
			
                $this->User->id = $this->Auth->user('id');

                $current_user = $this->User->findById($this->User->id);
			$current_user['username'] = $this->Auth->user('username');
                $this->set('current_user', $current_user);
			$oldpassword = $current_user['User']['password'];
                $this->User->set($this->data);
                if (!empty($this->data)) {
			$oldpasswordconfirm = AuthComponent::password($this->data['User']['oldpassword']);
			if ($oldpasswordconfirm == $oldpassword) {
				$password = $this->data['User']['password'];
				$newpasswordconfirm = $this->data['User']['password_confirmation'];

				if ($password == $newpasswordconfirm) {
                $this->User->saveField('password', $password);

                $this->Session->setFlash('Your password has been updated');
                $this->redirect(array('action' => 'index'));
			
				} else {
						$this->Session->setFlash('Please confirm your new password');
						
						}
			
			} else {
					$this->Session->setFlash('Your password do not match the old password');

				  }
                }
        }

public function account($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}		
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	public function useractivate() {
		
		$this->User->id = $this->Auth->user('id');

                $current_user = $this->User->findById($this->User->id);
                $current_user['username'] = $this->Auth->user('username');
                $this->set('current_user', $current_user);
			$activatecode = $current_user['User']['activate_code'];
                $this->User->set($this->data);
                if (!empty($this->data)) {
			$activatecodeconfirm = $this->data['User']['confirmActivateCode'];
			if ($activatecode == $activatecodeconfirm ) {
			$usergroup = 'active';
                $this->User->saveField('user_group', $usergroup);

                $this->Session->setFlash('Your have activate your account now!');
                $this->redirect(array('action' => 'index'));
			} else {
					$this->Session->setFlash('Your activate code is wrong.');

				  }
                }

		
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
           $activate = $this->RandomString();
           $this->set('activate', $activate);

		if ($this->request->is('post')) {
			$this->User->create();
			unset($this->User->Hallsowner->validate['users_id']);
			if ($this->User->saveAll($this->request->data)) {
				unset($this->User->Hallsowner->validate['users_id']);
				$this->Session->setFlash(__('The user has been saved'));
				$username = $this->data['User']['username'];
				$useremail = $this->data['User']['email'];
				$activatecode = $this->data['User']['activate_code'];
				$message = String::insert( 'Dear :user : Thank you for your registering with Halls for Hire, here is your account activate code: :code , please go to the follow link to activate your account by using this code, the link is : http://localhost/CakePHP/users/useractivate ' , array('user' => $username, 'code' => $activatecode));
				$email = new CakeEmail('gmail');
 				$email->to($useremail);
 				$email->from('zdua2@student.monash.edu');
 				$email->subject('Activation Email from Halls For Hire');
 				$email->send($message);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}


public function forgetpassword() {
        //$this->layout="signup";
        if(!empty($this->data))
        {
            if(empty($this->data['User']['email']))
            {
                $this->Session->setFlash('Please Provide Your Email Adress that You used to Register with Us');
            }
            else
            {
                $email=$this->data['User']['email'];
                $fu = $this->User->findByEmail($this->data['User']['email']);
                if($fu)
                {
                    //debug($fu);
                    if($fu['User']['user_group']!='inactive')
                    {
                        $key = Security::hash(String::uuid(),'sha512',true);
                        $hash=sha1($fu['User']['username'].rand(0,100));
                        $url = Router::url( array('controller'=>'users','action'=>'resetpassword'), true ).'/'.$key.'#'.$hash;
                        $ms=$url;
				   $username = $fu['User']['username'];
                        $ms=wordwrap($ms,1000);
                        //debug($url);
                        $fu['User']['tokenhash']=$key;
                        $this->User->id=$fu['User']['id'];
				   $useremail = $fu['User']['email'];
                        if($this->User->saveField('tokenhash',$fu['User']['tokenhash'])){                        
                             
                            //============Email================//
                            /* SMTP Options */ 

					 //$message = String::insert( 'Dear :user : Because you are such an idiot that lost your password, so now we have to set a new password for you, here is your new password: :newpassword, please login with your new password and set a new password for yourself. ' , array('user' => 'Whatever', 'newpassword' => $newpassword));
					 $email = new CakeEmail('gmail');
 					 $email->to($useremail);
 					 $email->from('zdua2@student.monash.edu');
 					 $email->subject('Reset Password for your Halls for Hire Account');
					 $email->template('resetpassword');
					 $email->emailFormat('both');
                            $email->viewVars(array('username' => $username,'ms' => $ms));
                            $email->send();
                            $this->Session->setFlash(__('Check Your Email To Reset your password', true));        
                             
                            //============EndEmail=============//    
                        }
                        else{
                            $this->Session->setFlash("Error Generating Reset link");                            
                        }                        
                    }
                    else
                    {
                        $this->Session->setFlash('This Account is not Active yet.Check Your mail to activate it');
                    }
                }
                else
                {
                    $this->Session->setFlash('Email does Not Exist');
                }
            }
        }
    }

public function resetpassword($token=null){
        $this->layout="Login";
        if(!empty($token)){
            $u=$this->User->findBytokenhash($token);
            if($u){
                     $this->User->id=$u['User']['id'];
				if(!empty($this->data)){
					$this->User->data=$this->data;
					$this->User->data['User']['username']=$u['User']['username'];
					$new_hash=sha1($u['User']['username'].rand(0,100));//created token
					$this->User->data['User']['tokenhash']=$new_hash;
                           if($this->User->validates(array('fieldList'=>array('password','password_confirmation')))){
                           	if($this->User->save($this->User->data)) {
							$this->Session->setFlash('Password Has been Updated');
							$this->redirect(array('controller'=>'users','action'=>'login'));
                        }
                                             } else {
							$this->set('errors',$this->User->invalidFields());
									}                }
            } else {
					$this->Session->setFlash('Token Corrupted,,Please Retry.the reset link work only for once.');
		}
        } else {
            $this->redirect('/');
            }
        }

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null, $cascade = true) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete($id, true)) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
