<?php
App::uses('AppController', 'Controller');
/**
 * Partyfacilitydancefloors Controller
 *
 * @property Partyfacilitydancefloor $Partyfacilitydancefloor
 */
class PartyfacilitydancefloorsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Partyfacilitydancefloor->recursive = 0;
		$this->set('partyfacilitydancefloors', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Partyfacilitydancefloor->id = $id;
		if (!$this->Partyfacilitydancefloor->exists()) {
			throw new NotFoundException(__('Invalid partyfacilitydancefloor'));
		}
		$this->set('partyfacilitydancefloor', $this->Partyfacilitydancefloor->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Partyfacilitydancefloor->create();
			if ($this->Partyfacilitydancefloor->save($this->request->data)) {
				$this->Session->setFlash(__('The partyfacilitydancefloor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partyfacilitydancefloor could not be saved. Please, try again.'));
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
		$this->Partyfacilitydancefloor->id = $id;
		if (!$this->Partyfacilitydancefloor->exists()) {
			throw new NotFoundException(__('Invalid partyfacilitydancefloor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Partyfacilitydancefloor->save($this->request->data)) {
				$this->Session->setFlash(__('The partyfacilitydancefloor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partyfacilitydancefloor could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Partyfacilitydancefloor->read(null, $id);
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
		$this->Partyfacilitydancefloor->id = $id;
		if (!$this->Partyfacilitydancefloor->exists()) {
			throw new NotFoundException(__('Invalid partyfacilitydancefloor'));
		}
		if ($this->Partyfacilitydancefloor->delete()) {
			$this->Session->setFlash(__('Partyfacilitydancefloor deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Partyfacilitydancefloor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
