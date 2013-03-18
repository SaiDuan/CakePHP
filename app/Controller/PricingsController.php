<?php
App::uses('AppController', 'Controller');
/**
 * Pricings Controller
 *
 * @property Pricing $Pricing
 */
class PricingsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Pricing->recursive = 0;
		$this->set('pricings', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Pricing->id = $id;
		if (!$this->Pricing->exists()) {
			throw new NotFoundException(__('Invalid pricing'));
		}
		$this->set('pricing', $this->Pricing->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pricing->create();
			if ($this->Pricing->save($this->request->data)) {
				$this->Session->setFlash(__('The pricing has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pricing could not be saved. Please, try again.'));
			}
		}
		$halls = $this->Pricing->Hall->find('list');
		$this->set(compact('halls'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Pricing->id = $id;
		if (!$this->Pricing->exists()) {
			throw new NotFoundException(__('Invalid pricing'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pricing->save($this->request->data)) {
				$this->Session->setFlash(__('The pricing has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pricing could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Pricing->read(null, $id);
		}
		$halls = $this->Pricing->Hall->find('list');
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
		$this->Pricing->id = $id;
		if (!$this->Pricing->exists()) {
			throw new NotFoundException(__('Invalid pricing'));
		}
		if ($this->Pricing->delete()) {
			$this->Session->setFlash(__('Pricing deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pricing was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
