<?php
App::uses('AppController', 'Controller');
/**
 * Featureexternalcaterings Controller
 *
 * @property Featureexternalcatering $Featureexternalcatering
 */
class FeatureexternalcateringsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Featureexternalcatering->recursive = 0;
		$this->set('featureexternalcaterings', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Featureexternalcatering->id = $id;
		if (!$this->Featureexternalcatering->exists()) {
			throw new NotFoundException(__('Invalid featureexternalcatering'));
		}
		$this->set('featureexternalcatering', $this->Featureexternalcatering->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Featureexternalcatering->create();
			if ($this->Featureexternalcatering->save($this->request->data)) {
				$this->Session->setFlash(__('The featureexternalcatering has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The featureexternalcatering could not be saved. Please, try again.'));
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
		$this->Featureexternalcatering->id = $id;
		if (!$this->Featureexternalcatering->exists()) {
			throw new NotFoundException(__('Invalid featureexternalcatering'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Featureexternalcatering->save($this->request->data)) {
				$this->Session->setFlash(__('The featureexternalcatering has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The featureexternalcatering could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Featureexternalcatering->read(null, $id);
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
		$this->Featureexternalcatering->id = $id;
		if (!$this->Featureexternalcatering->exists()) {
			throw new NotFoundException(__('Invalid featureexternalcatering'));
		}
		if ($this->Featureexternalcatering->delete()) {
			$this->Session->setFlash(__('Featureexternalcatering deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Featureexternalcatering was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
