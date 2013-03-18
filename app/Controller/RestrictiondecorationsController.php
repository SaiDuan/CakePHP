<?php
App::uses('AppController', 'Controller');
/**
 * Restrictiondecorations Controller
 *
 * @property Restrictiondecoration $Restrictiondecoration
 */
class RestrictiondecorationsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Restrictiondecoration->recursive = 0;
		$this->set('restrictiondecorations', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Restrictiondecoration->id = $id;
		if (!$this->Restrictiondecoration->exists()) {
			throw new NotFoundException(__('Invalid restrictiondecoration'));
		}
		$this->set('restrictiondecoration', $this->Restrictiondecoration->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Restrictiondecoration->create();
			if ($this->Restrictiondecoration->save($this->request->data)) {
				$this->Session->setFlash(__('The restrictiondecoration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restrictiondecoration could not be saved. Please, try again.'));
			}
		}
		$halls = $this->Restrictiondecoration->Hall->find('list');
		$this->set(compact('halls'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Restrictiondecoration->id = $id;
		if (!$this->Restrictiondecoration->exists()) {
			throw new NotFoundException(__('Invalid restrictiondecoration'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Restrictiondecoration->save($this->request->data)) {
				$this->Session->setFlash(__('The restrictiondecoration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restrictiondecoration could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Restrictiondecoration->read(null, $id);
		}
		$halls = $this->Restrictiondecoration->Hall->find('list');
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
		$this->Restrictiondecoration->id = $id;
		if (!$this->Restrictiondecoration->exists()) {
			throw new NotFoundException(__('Invalid restrictiondecoration'));
		}
		if ($this->Restrictiondecoration->delete()) {
			$this->Session->setFlash(__('Restrictiondecoration deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Restrictiondecoration was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
