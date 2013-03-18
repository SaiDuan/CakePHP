<?php
App::uses('AppController', 'Controller');
/**
 * Images Controller
 *
 * @property Image $Image
 */
class ImagesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Image->recursive = 0;
		$this->set('images', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Image->id = $id;
		if (!$this->Image->exists()) {
			throw new NotFoundException(__('Invalid image'));
		}
		$this->set('image', $this->Image->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Image->create();
			$fileOK = $this->uploadFiles('img/images', $this->data['Image']['image']); 

if(array_key_exists('urls', $fileOK)) 
            { 
			$this->request->data['Image']['image_name'] = $fileOK['urls'][0];
            } 
			if ($this->Image->save($this->request->data)) {
				$this->Session->setFlash(__('The image has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The image could not be saved. Please, try again.'));
			}
		}
		$halls = $this->Image->Hall->find('list');
		$this->set(compact('halls'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Image->id = $id;
		if (!$this->Image->exists()) {
			throw new NotFoundException(__('Invalid image'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$fileOK = $this->uploadFiles('img/images', $this->data['Image']['image']); 

            if(array_key_exists('urls', $fileOK)) 
            { 
                $this->request->data['Image']['image_name'] = $fileOK['urls'][0]; 
			//$this->request->data['Image']['id'] = $id;
            } 
		 
			if ($this->Image->save($this->request->data)) {
				$this->Session->setFlash(__('The image has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->request->data['Image']['image'] = null; 
				$this->Session->setFlash(__('The image could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Image->read(null, $id);
		}
		$halls = $this->Image->Hall->find('list');
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
		$this->Image->id = $id;
		if (!$this->Image->exists()) {
			throw new NotFoundException(__('Invalid image'));
		}
		if ($this->Image->delete()) {
        $results = $this->Image->findById($this->Image->id);  
        $currentImage = $results['Image']['image_name']; 

        $imageFolder = WWW_ROOT."img/images"; 
        $imagePath = $imageFolder.'/'.$currentImage; 
        unlink($imagePath); 

        $this->Image->query("update images set image_name = null where id =".$id); 
	   //$this->Upload->delete($currentImage); 
        $this->Session->setFlash('Image deleted.'); 
        $this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Image was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
