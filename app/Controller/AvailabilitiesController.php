<?php
App::uses('AppController', 'Controller');
/**
 * Availabilities Controller
 *
 * @property Availability $Availability
 */
class AvailabilitiesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Availability->recursive = 0;
		$this->set('availabilities', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Availability->id = $id;
		if (!$this->Availability->exists()) {
			throw new NotFoundException(__('Invalid availability'));
		}
		$this->set('availability', $this->Availability->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Availability->create();
			if ($this->Availability->save($this->request->data)) {
				$this->Session->setFlash(__('The availability has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The availability could not be saved. Please, try again.'));
			}
		}
		$halls = $this->Availability->Hall->find('list');
		$this->set(compact('halls'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Availability->id = $id;
		if (!$this->Availability->exists()) {
			throw new NotFoundException(__('Invalid availability'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Availability->save($this->request->data)) {
				$this->Session->setFlash(__('The availability has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The availability could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Availability->read(null, $id);
		}
		$halls = $this->Availability->Hall->find('list');
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
		$this->Availability->id = $id;
		if (!$this->Availability->exists()) {
			throw new NotFoundException(__('Invalid availability'));
		}
		if ($this->Availability->delete()) {
			$this->Session->setFlash(__('Availability deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Availability was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
