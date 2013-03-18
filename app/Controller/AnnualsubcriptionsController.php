<?php
App::uses('AppController', 'Controller');
/**
 * Annualsubcriptions Controller
 *
 * @property Annualsubcription $Annualsubcription
 */
class AnnualsubcriptionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Annualsubcription->recursive = 0;
		$this->set('annualsubcriptions', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Annualsubcription->id = $id;
		if (!$this->Annualsubcription->exists()) {
			throw new NotFoundException(__('Invalid annualsubcription'));
		}
		$this->set('annualsubcription', $this->Annualsubcription->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Annualsubcription->create();
			if ($this->Annualsubcription->save($this->request->data)) {
				$this->Session->setFlash(__('The annualsubcription has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The annualsubcription could not be saved. Please, try again.'));
			}
		}
		$subtypes = $this->Annualsubcription->Subtype->find('list');
		$this->set(compact('subtypes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Annualsubcription->id = $id;
		if (!$this->Annualsubcription->exists()) {
			throw new NotFoundException(__('Invalid annualsubcription'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Annualsubcription->save($this->request->data)) {
				$this->Session->setFlash(__('The annualsubcription has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The annualsubcription could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Annualsubcription->read(null, $id);
		}
		$subtypes = $this->Annualsubcription->Subtype->find('list');
		$this->set(compact('subtypes'));
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
		$this->Annualsubcription->id = $id;
		if (!$this->Annualsubcription->exists()) {
			throw new NotFoundException(__('Invalid annualsubcription'));
		}
		if ($this->Annualsubcription->delete()) {
			$this->Session->setFlash(__('Annualsubcription deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Annualsubcription was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
