<?php
App::uses('AppController', 'Controller');
/**
 * Hallsowners Controller
 *
 * @property Hallsowner $Hallsowner
 */
class HallsownersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Hallsowner->recursive = 0;
		$this->set('hallsowners', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Hallsowner->id = $id;
		if (!$this->Hallsowner->exists()) {
			throw new NotFoundException(__('Invalid hallsowner'));
		}
		$this->set('hallsowner', $this->Hallsowner->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hallsowner->create();
			if ($this->Hallsowner->save($this->request->data)) {
				$this->Session->setFlash(__('The hallsowner has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hallsowner could not be saved. Please, try again.'));
			}
		}
		$users = $this->Hallsowner->User->find('list');
		$subtypes = $this->Hallsowner->Subtype->find('list');
		$this->set(compact('users', 'subtypes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Hallsowner->id = $id;
		if (!$this->Hallsowner->exists()) {
			throw new NotFoundException(__('Invalid hallsowner'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hallsowner->save($this->request->data)) {
				$this->Session->setFlash(__('The hallsowner has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hallsowner could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Hallsowner->read(null, $id);
		}
		$users = $this->Hallsowner->User->find('list');
		$subtypes = $this->Hallsowner->Subtype->find('list');
		$this->set(compact('users', 'subtypes'));
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
		$this->Hallsowner->id = $id;
		if (!$this->Hallsowner->exists()) {
			throw new NotFoundException(__('Invalid hallsowner'));
		}
		if ($this->Hallsowner->delete()) {
			$this->Session->setFlash(__('Hallsowner deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Hallsowner was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
