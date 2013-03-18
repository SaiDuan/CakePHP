<?php
App::uses('AppController', 'Controller');
/**
 * Restrictionevents Controller
 *
 * @property Restrictionevent $Restrictionevent
 */
class RestrictioneventsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Restrictionevent->recursive = 0;
		$this->set('restrictionevents', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Restrictionevent->id = $id;
		if (!$this->Restrictionevent->exists()) {
			throw new NotFoundException(__('Invalid restrictionevent'));
		}
		$this->set('restrictionevent', $this->Restrictionevent->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Restrictionevent->create();
			if ($this->Restrictionevent->save($this->request->data)) {
				$this->Session->setFlash(__('The restrictionevent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restrictionevent could not be saved. Please, try again.'));
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
		$this->Restrictionevent->id = $id;
		if (!$this->Restrictionevent->exists()) {
			throw new NotFoundException(__('Invalid restrictionevent'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Restrictionevent->save($this->request->data)) {
				$this->Session->setFlash(__('The restrictionevent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restrictionevent could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Restrictionevent->read(null, $id);
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
		$this->Restrictionevent->id = $id;
		if (!$this->Restrictionevent->exists()) {
			throw new NotFoundException(__('Invalid restrictionevent'));
		}
		if ($this->Restrictionevent->delete()) {
			$this->Session->setFlash(__('Restrictionevent deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Restrictionevent was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
