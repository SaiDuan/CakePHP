<?php
App::uses('AppController', 'Controller');
/**
 * Suitabilities Controller
 *
 * @property Suitability $Suitability
 */
class SuitabilitiesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Suitability->recursive = 0;
		$this->set('suitabilities', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Suitability->id = $id;
		if (!$this->Suitability->exists()) {
			throw new NotFoundException(__('Invalid suitability'));
		}
		$this->set('suitability', $this->Suitability->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Suitability->create();
			if ($this->Suitability->save($this->request->data)) {
				$this->Session->setFlash(__('The suitability has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The suitability could not be saved. Please, try again.'));
			}
		}
		$halls = $this->Suitability->Hall->find('list');
		$this->set(compact('halls'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Suitability->id = $id;
		if (!$this->Suitability->exists()) {
			throw new NotFoundException(__('Invalid suitability'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Suitability->save($this->request->data)) {
				$this->Session->setFlash(__('The suitability has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The suitability could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Suitability->read(null, $id);
		}
		$halls = $this->Suitability->Hall->find('list');
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
		$this->Suitability->id = $id;
		if (!$this->Suitability->exists()) {
			throw new NotFoundException(__('Invalid suitability'));
		}
		if ($this->Suitability->delete()) {
			$this->Session->setFlash(__('Suitability deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Suitability was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
