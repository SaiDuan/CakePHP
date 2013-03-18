<?php
App::uses('AppController', 'Controller');
/**
 * Partyfacilitybands Controller
 *
 * @property Partyfacilityband $Partyfacilityband
 */
class PartyfacilitybandsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Partyfacilityband->recursive = 0;
		$this->set('partyfacilitybands', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Partyfacilityband->id = $id;
		if (!$this->Partyfacilityband->exists()) {
			throw new NotFoundException(__('Invalid partyfacilityband'));
		}
		$this->set('partyfacilityband', $this->Partyfacilityband->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Partyfacilityband->create();
			if ($this->Partyfacilityband->save($this->request->data)) {
				$this->Session->setFlash(__('The partyfacilityband has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partyfacilityband could not be saved. Please, try again.'));
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
		$this->Partyfacilityband->id = $id;
		if (!$this->Partyfacilityband->exists()) {
			throw new NotFoundException(__('Invalid partyfacilityband'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Partyfacilityband->save($this->request->data)) {
				$this->Session->setFlash(__('The partyfacilityband has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partyfacilityband could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Partyfacilityband->read(null, $id);
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
		$this->Partyfacilityband->id = $id;
		if (!$this->Partyfacilityband->exists()) {
			throw new NotFoundException(__('Invalid partyfacilityband'));
		}
		if ($this->Partyfacilityband->delete()) {
			$this->Session->setFlash(__('Partyfacilityband deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Partyfacilityband was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
