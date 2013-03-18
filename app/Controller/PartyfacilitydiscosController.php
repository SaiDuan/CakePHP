<?php
App::uses('AppController', 'Controller');
/**
 * Partyfacilitydiscos Controller
 *
 * @property Partyfacilitydisco $Partyfacilitydisco
 */
class PartyfacilitydiscosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Partyfacilitydisco->recursive = 0;
		$this->set('partyfacilitydiscos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Partyfacilitydisco->id = $id;
		if (!$this->Partyfacilitydisco->exists()) {
			throw new NotFoundException(__('Invalid partyfacilitydisco'));
		}
		$this->set('partyfacilitydisco', $this->Partyfacilitydisco->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Partyfacilitydisco->create();
			if ($this->Partyfacilitydisco->save($this->request->data)) {
				$this->Session->setFlash(__('The partyfacilitydisco has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partyfacilitydisco could not be saved. Please, try again.'));
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
		$this->Partyfacilitydisco->id = $id;
		if (!$this->Partyfacilitydisco->exists()) {
			throw new NotFoundException(__('Invalid partyfacilitydisco'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Partyfacilitydisco->save($this->request->data)) {
				$this->Session->setFlash(__('The partyfacilitydisco has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partyfacilitydisco could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Partyfacilitydisco->read(null, $id);
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
		$this->Partyfacilitydisco->id = $id;
		if (!$this->Partyfacilitydisco->exists()) {
			throw new NotFoundException(__('Invalid partyfacilitydisco'));
		}
		if ($this->Partyfacilitydisco->delete()) {
			$this->Session->setFlash(__('Partyfacilitydisco deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Partyfacilitydisco was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
