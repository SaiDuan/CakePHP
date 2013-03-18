<?php
App::uses('AppController', 'Controller');
/**
 * Subtypehistories Controller
 *
 * @property Subtypehistory $Subtypehistory
 */
class SubtypehistoriesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subtypehistory->recursive = 0;
		$this->set('subtypehistories', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Subtypehistory->id = $id;
		if (!$this->Subtypehistory->exists()) {
			throw new NotFoundException(__('Invalid subtypehistory'));
		}
		$this->set('subtypehistory', $this->Subtypehistory->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subtypehistory->create();
			if ($this->Subtypehistory->save($this->request->data)) {
				$this->Session->setFlash(__('The subtypehistory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subtypehistory could not be saved. Please, try again.'));
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
		$this->Subtypehistory->id = $id;
		if (!$this->Subtypehistory->exists()) {
			throw new NotFoundException(__('Invalid subtypehistory'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Subtypehistory->save($this->request->data)) {
				$this->Session->setFlash(__('The subtypehistory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subtypehistory could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Subtypehistory->read(null, $id);
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
		$this->Subtypehistory->id = $id;
		if (!$this->Subtypehistory->exists()) {
			throw new NotFoundException(__('Invalid subtypehistory'));
		}
		if ($this->Subtypehistory->delete()) {
			$this->Session->setFlash(__('Subtypehistory deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Subtypehistory was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
