<?php
App::uses('AppController', 'Controller');
/**
 * Featurecateringrestrictions Controller
 *
 * @property Featurecateringrestriction $Featurecateringrestriction
 */
class FeaturecateringrestrictionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Featurecateringrestriction->recursive = 0;
		$this->set('featurecateringrestrictions', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Featurecateringrestriction->id = $id;
		if (!$this->Featurecateringrestriction->exists()) {
			throw new NotFoundException(__('Invalid featurecateringrestriction'));
		}
		$this->set('featurecateringrestriction', $this->Featurecateringrestriction->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Featurecateringrestriction->create();
			if ($this->Featurecateringrestriction->save($this->request->data)) {
				$this->Session->setFlash(__('The featurecateringrestriction has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The featurecateringrestriction could not be saved. Please, try again.'));
			}
		}
		$halls = $this->Featurecateringrestriction->Hall->find('list');
		$this->set(compact('halls'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Featurecateringrestriction->id = $id;
		if (!$this->Featurecateringrestriction->exists()) {
			throw new NotFoundException(__('Invalid featurecateringrestriction'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Featurecateringrestriction->save($this->request->data)) {
				$this->Session->setFlash(__('The featurecateringrestriction has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The featurecateringrestriction could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Featurecateringrestriction->read(null, $id);
		}
		$halls = $this->Featurecateringrestriction->Hall->find('list');
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
		$this->Featurecateringrestriction->id = $id;
		if (!$this->Featurecateringrestriction->exists()) {
			throw new NotFoundException(__('Invalid featurecateringrestriction'));
		}
		if ($this->Featurecateringrestriction->delete()) {
			$this->Session->setFlash(__('Featurecateringrestriction deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Featurecateringrestriction was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
