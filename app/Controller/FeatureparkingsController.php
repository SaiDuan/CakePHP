<?php
App::uses('AppController', 'Controller');
/**
 * Featureparkings Controller
 *
 * @property Featureparking $Featureparking
 */
class FeatureparkingsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Featureparking->recursive = 0;
		$this->set('featureparkings', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Featureparking->id = $id;
		if (!$this->Featureparking->exists()) {
			throw new NotFoundException(__('Invalid featureparking'));
		}
		$this->set('featureparking', $this->Featureparking->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Featureparking->create();
			if ($this->Featureparking->save($this->request->data)) {
				$this->Session->setFlash(__('The featureparking has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The featureparking could not be saved. Please, try again.'));
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
		$this->Featureparking->id = $id;
		if (!$this->Featureparking->exists()) {
			throw new NotFoundException(__('Invalid featureparking'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Featureparking->save($this->request->data)) {
				$this->Session->setFlash(__('The featureparking has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The featureparking could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Featureparking->read(null, $id);
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
		$this->Featureparking->id = $id;
		if (!$this->Featureparking->exists()) {
			throw new NotFoundException(__('Invalid featureparking'));
		}
		if ($this->Featureparking->delete()) {
			$this->Session->setFlash(__('Featureparking deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Featureparking was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
