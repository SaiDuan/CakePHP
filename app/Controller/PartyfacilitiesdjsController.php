<?php
App::uses('AppController', 'Controller');
/**
 * Partyfacilitiesdjs Controller
 *
 * @property Partyfacilitiesdj $Partyfacilitiesdj
 */
class PartyfacilitiesdjsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Partyfacilitiesdj->recursive = 0;
		$this->set('partyfacilitiesdjs', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Partyfacilitiesdj->id = $id;
		if (!$this->Partyfacilitiesdj->exists()) {
			throw new NotFoundException(__('Invalid partyfacilitiesdj'));
		}
		$this->set('partyfacilitiesdj', $this->Partyfacilitiesdj->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Partyfacilitiesdj->create();
			if ($this->Partyfacilitiesdj->save($this->request->data)) {
				$this->Session->setFlash(__('The partyfacilitiesdj has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partyfacilitiesdj could not be saved. Please, try again.'));
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
		$this->Partyfacilitiesdj->id = $id;
		if (!$this->Partyfacilitiesdj->exists()) {
			throw new NotFoundException(__('Invalid partyfacilitiesdj'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Partyfacilitiesdj->save($this->request->data)) {
				$this->Session->setFlash(__('The partyfacilitiesdj has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partyfacilitiesdj could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Partyfacilitiesdj->read(null, $id);
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
		$this->Partyfacilitiesdj->id = $id;
		if (!$this->Partyfacilitiesdj->exists()) {
			throw new NotFoundException(__('Invalid partyfacilitiesdj'));
		}
		if ($this->Partyfacilitiesdj->delete()) {
			$this->Session->setFlash(__('Partyfacilitiesdj deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Partyfacilitiesdj was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
