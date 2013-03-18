<?php
App::uses('AppController', 'Controller');
/**
 * Restrictionminors Controller
 *
 * @property Restrictionminor $Restrictionminor
 */
class RestrictionminorsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Restrictionminor->recursive = 0;
		$this->set('restrictionminors', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Restrictionminor->id = $id;
		if (!$this->Restrictionminor->exists()) {
			throw new NotFoundException(__('Invalid restrictionminor'));
		}
		$this->set('restrictionminor', $this->Restrictionminor->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Restrictionminor->create();
			if ($this->Restrictionminor->save($this->request->data)) {
				$this->Session->setFlash(__('The restrictionminor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restrictionminor could not be saved. Please, try again.'));
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
		$this->Restrictionminor->id = $id;
		if (!$this->Restrictionminor->exists()) {
			throw new NotFoundException(__('Invalid restrictionminor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Restrictionminor->save($this->request->data)) {
				$this->Session->setFlash(__('The restrictionminor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restrictionminor could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Restrictionminor->read(null, $id);
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
		$this->Restrictionminor->id = $id;
		if (!$this->Restrictionminor->exists()) {
			throw new NotFoundException(__('Invalid restrictionminor'));
		}
		if ($this->Restrictionminor->delete()) {
			$this->Session->setFlash(__('Restrictionminor deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Restrictionminor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
