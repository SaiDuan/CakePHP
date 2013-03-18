<?php
App::uses('AppController', 'Controller');
/**
 * TechnicalFacilities Controller
 *
 * @property TechnicalFacility $TechnicalFacility
 */
class TechnicalFacilitiesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TechnicalFacility->recursive = 0;
		$this->set('technicalFacilities', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TechnicalFacility->id = $id;
		if (!$this->TechnicalFacility->exists()) {
			throw new NotFoundException(__('Invalid technical facility'));
		}
		$this->set('technicalFacility', $this->TechnicalFacility->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TechnicalFacility->create();
			if ($this->TechnicalFacility->save($this->request->data)) {
				$this->Session->setFlash(__('The technical facility has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The technical facility could not be saved. Please, try again.'));
			}
		}
		$halls = $this->TechnicalFacility->Hall->find('list');
		$this->set(compact('halls'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TechnicalFacility->id = $id;
		if (!$this->TechnicalFacility->exists()) {
			throw new NotFoundException(__('Invalid technical facility'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TechnicalFacility->save($this->request->data)) {
				$this->Session->setFlash(__('The technical facility has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The technical facility could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TechnicalFacility->read(null, $id);
		}
		$halls = $this->TechnicalFacility->Hall->find('list');
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
		$this->TechnicalFacility->id = $id;
		if (!$this->TechnicalFacility->exists()) {
			throw new NotFoundException(__('Invalid technical facility'));
		}
		if ($this->TechnicalFacility->delete()) {
			$this->Session->setFlash(__('Technical facility deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Technical facility was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
