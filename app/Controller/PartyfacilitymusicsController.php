<?php
App::uses('AppController', 'Controller');
/**
 * Partyfacilitymusics Controller
 *
 * @property Partyfacilitymusic $Partyfacilitymusic
 */
class PartyfacilitymusicsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Partyfacilitymusic->recursive = 0;
		$this->set('partyfacilitymusics', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Partyfacilitymusic->id = $id;
		if (!$this->Partyfacilitymusic->exists()) {
			throw new NotFoundException(__('Invalid partyfacilitymusic'));
		}
		$this->set('partyfacilitymusic', $this->Partyfacilitymusic->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Partyfacilitymusic->create();
			if ($this->Partyfacilitymusic->save($this->request->data)) {
				$this->Session->setFlash(__('The partyfacilitymusic has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partyfacilitymusic could not be saved. Please, try again.'));
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
		$this->Partyfacilitymusic->id = $id;
		if (!$this->Partyfacilitymusic->exists()) {
			throw new NotFoundException(__('Invalid partyfacilitymusic'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Partyfacilitymusic->save($this->request->data)) {
				$this->Session->setFlash(__('The partyfacilitymusic has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partyfacilitymusic could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Partyfacilitymusic->read(null, $id);
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
		$this->Partyfacilitymusic->id = $id;
		if (!$this->Partyfacilitymusic->exists()) {
			throw new NotFoundException(__('Invalid partyfacilitymusic'));
		}
		if ($this->Partyfacilitymusic->delete()) {
			$this->Session->setFlash(__('Partyfacilitymusic deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Partyfacilitymusic was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
