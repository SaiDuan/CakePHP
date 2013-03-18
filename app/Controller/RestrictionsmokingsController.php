<?php
App::uses('AppController', 'Controller');
/**
 * Restrictionsmokings Controller
 *
 * @property Restrictionsmoking $Restrictionsmoking
 */
class RestrictionsmokingsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Restrictionsmoking->recursive = 0;
		$this->set('restrictionsmokings', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Restrictionsmoking->id = $id;
		if (!$this->Restrictionsmoking->exists()) {
			throw new NotFoundException(__('Invalid restrictionsmoking'));
		}
		$this->set('restrictionsmoking', $this->Restrictionsmoking->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Restrictionsmoking->create();
			if ($this->Restrictionsmoking->save($this->request->data)) {
				$this->Session->setFlash(__('The restrictionsmoking has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restrictionsmoking could not be saved. Please, try again.'));
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
		$this->Restrictionsmoking->id = $id;
		if (!$this->Restrictionsmoking->exists()) {
			throw new NotFoundException(__('Invalid restrictionsmoking'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Restrictionsmoking->save($this->request->data)) {
				$this->Session->setFlash(__('The restrictionsmoking has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restrictionsmoking could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Restrictionsmoking->read(null, $id);
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
		$this->Restrictionsmoking->id = $id;
		if (!$this->Restrictionsmoking->exists()) {
			throw new NotFoundException(__('Invalid restrictionsmoking'));
		}
		if ($this->Restrictionsmoking->delete()) {
			$this->Session->setFlash(__('Restrictionsmoking deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Restrictionsmoking was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
