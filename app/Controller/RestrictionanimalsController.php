<?php
App::uses('AppController', 'Controller');
/**
 * Restrictionanimals Controller
 *
 * @property Restrictionanimal $Restrictionanimal
 */
class RestrictionanimalsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Restrictionanimal->recursive = 0;
		$this->set('restrictionanimals', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Restrictionanimal->id = $id;
		if (!$this->Restrictionanimal->exists()) {
			throw new NotFoundException(__('Invalid restrictionanimal'));
		}
		$this->set('restrictionanimal', $this->Restrictionanimal->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Restrictionanimal->create();
			if ($this->Restrictionanimal->save($this->request->data)) {
				$this->Session->setFlash(__('The restrictionanimal has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restrictionanimal could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Restrictionanimal->id = $id;
		if (!$this->Restrictionanimal->exists()) {
			throw new NotFoundException(__('Invalid restrictionanimal'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Restrictionanimal->save($this->request->data)) {
				$this->Session->setFlash(__('The restrictionanimal has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restrictionanimal could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Restrictionanimal->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Restrictionanimal->id = $id;
		if (!$this->Restrictionanimal->exists()) {
			throw new NotFoundException(__('Invalid restrictionanimal'));
		}
		if ($this->Restrictionanimal->delete()) {
			$this->Session->setFlash(__('Restrictionanimal deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Restrictionanimal was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
