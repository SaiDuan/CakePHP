<?php
App::uses('AppController', 'Controller');
/**
 * Subtypes Controller
 *
 * @property Subtype $Subtype
 */
class SubtypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subtype->recursive = 0;
		$this->set('subtypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Subtype->id = $id;
		if (!$this->Subtype->exists()) {
			throw new NotFoundException(__('Invalid subtype'));
		}
		$this->set('subtype', $this->Subtype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subtype->create();
			if ($this->Subtype->save($this->request->data)) {
				$this->Session->setFlash(__('The subtype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subtype could not be saved. Please, try again.'));
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
		$this->Subtype->id = $id;
		if (!$this->Subtype->exists()) {
			throw new NotFoundException(__('Invalid subtype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Subtype->save($this->request->data)) {
				$this->Session->setFlash(__('The subtype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subtype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Subtype->read(null, $id);
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
		$this->Subtype->id = $id;
		if (!$this->Subtype->exists()) {
			throw new NotFoundException(__('Invalid subtype'));
		}
		if ($this->Subtype->delete()) {
			$this->Session->setFlash(__('Subtype deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Subtype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
