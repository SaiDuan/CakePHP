<?php
App::uses('AppController', 'Controller');
/**
 * Outdoorfacilities Controller
 *
 * @property Outdoorfacility $Outdoorfacility
 */
class OutdoorfacilitiesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Outdoorfacility->recursive = 0;
		$this->set('outdoorfacilities', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Outdoorfacility->id = $id;
		if (!$this->Outdoorfacility->exists()) {
			throw new NotFoundException(__('Invalid outdoorfacility'));
		}
		$this->set('outdoorfacility', $this->Outdoorfacility->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Outdoorfacility->create();
			if ($this->Outdoorfacility->save($this->request->data)) {
				$this->Session->setFlash(__('The outdoorfacility has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The outdoorfacility could not be saved. Please, try again.'));
			}
		}
		$halls = $this->Outdoorfacility->Hall->find('list');
		$this->set(compact('halls'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Outdoorfacility->id = $id;
		if (!$this->Outdoorfacility->exists()) {
			throw new NotFoundException(__('Invalid outdoorfacility'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Outdoorfacility->save($this->request->data)) {
				$this->Session->setFlash(__('The outdoorfacility has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The outdoorfacility could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Outdoorfacility->read(null, $id);
		}
		$halls = $this->Outdoorfacility->Hall->find('list');
		$this->set(compact('halls'));
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
		$this->Outdoorfacility->id = $id;
		if (!$this->Outdoorfacility->exists()) {
			throw new NotFoundException(__('Invalid outdoorfacility'));
		}
		if ($this->Outdoorfacility->delete()) {
			$this->Session->setFlash(__('Outdoorfacility deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Outdoorfacility was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
