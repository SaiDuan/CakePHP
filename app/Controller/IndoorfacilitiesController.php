<?php
App::uses('AppController', 'Controller');
/**
 * Indoorfacilities Controller
 *
 * @property Indoorfacility $Indoorfacility
 */
class IndoorfacilitiesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Indoorfacility->recursive = 0;
		$this->set('indoorfacilities', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Indoorfacility->id = $id;
		if (!$this->Indoorfacility->exists()) {
			throw new NotFoundException(__('Invalid indoorfacility'));
		}
		$this->set('indoorfacility', $this->Indoorfacility->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Indoorfacility->create();
			if ($this->Indoorfacility->save($this->request->data)) {
				$this->Session->setFlash(__('The indoorfacility has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The indoorfacility could not be saved. Please, try again.'));
			}
		}
		$halls = $this->Indoorfacility->Hall->find('list');
		$this->set(compact('halls'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Indoorfacility->id = $id;
		if (!$this->Indoorfacility->exists()) {
			throw new NotFoundException(__('Invalid indoorfacility'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Indoorfacility->save($this->request->data)) {
				$this->Session->setFlash(__('The indoorfacility has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The indoorfacility could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Indoorfacility->read(null, $id);
		}
		$halls = $this->Indoorfacility->Hall->find('list');
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
		$this->Indoorfacility->id = $id;
		if (!$this->Indoorfacility->exists()) {
			throw new NotFoundException(__('Invalid indoorfacility'));
		}
		if ($this->Indoorfacility->delete()) {
			$this->Session->setFlash(__('Indoorfacility deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Indoorfacility was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
