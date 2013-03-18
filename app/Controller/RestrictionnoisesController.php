<?php
App::uses('AppController', 'Controller');
/**
 * Restrictionnoises Controller
 *
 * @property Restrictionnoise $Restrictionnoise
 */
class RestrictionnoisesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Restrictionnoise->recursive = 0;
		$this->set('restrictionnoises', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Restrictionnoise->id = $id;
		if (!$this->Restrictionnoise->exists()) {
			throw new NotFoundException(__('Invalid restrictionnoise'));
		}
		$this->set('restrictionnoise', $this->Restrictionnoise->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Restrictionnoise->create();
			if ($this->Restrictionnoise->save($this->request->data)) {
				$this->Session->setFlash(__('The restrictionnoise has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restrictionnoise could not be saved. Please, try again.'));
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
		$this->Restrictionnoise->id = $id;
		if (!$this->Restrictionnoise->exists()) {
			throw new NotFoundException(__('Invalid restrictionnoise'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Restrictionnoise->save($this->request->data)) {
				$this->Session->setFlash(__('The restrictionnoise has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restrictionnoise could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Restrictionnoise->read(null, $id);
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
		$this->Restrictionnoise->id = $id;
		if (!$this->Restrictionnoise->exists()) {
			throw new NotFoundException(__('Invalid restrictionnoise'));
		}
		if ($this->Restrictionnoise->delete()) {
			$this->Session->setFlash(__('Restrictionnoise deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Restrictionnoise was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
