<?php
App::uses('AppController', 'Controller');


/**
 * Halls Controller
 *
 * @property Hall $Hall
 */
class HallsController extends AppController {
    
    var $blnImage; 

/**
 * index method
 *
 * @return void
 */
	
	
	public function index() {
		$this->Hall->recursive = 0;
		$this->set('halls', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Hall->id = $id;
		if (!$this->Hall->exists()) {
			throw new NotFoundException(__('Invalid hall'));
		}
		$this->set('hall', $this->Hall->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		$this->layout = 'default';

		if ($this->request->is('post')) {
			$this->Hall->create();
                        $fileOK = $this->uploadFiles('img/images', $this->data['Hall']['image']); //change for images start

if(array_key_exists('urls', $fileOK)) 
            { 
			$this->request->data['Hall']['image'] = $fileOK['urls'][0];
                         
            } 
            else 
            { 
                $this->request->data['Hall']['image'] = null; 
            }  //change for images (end)


$this->request->data['Availability']['Availability'] = array(); 
foreach($this->data['Availability']['checkbox'] as $k=>$v) 
{ 
if ($v) $this->request->data['Availability']['Availability'][] = $k; 
} 

$this->request->data['Restrictiondecoration']['Restrictiondecoration'] = array(); 
foreach($this->data['Restrictiondecoration']['checkbox'] as $k=>$v) 
{ 
if ($v) $this->request->data['Restrictiondecoration']['Restrictiondecoration'][] = $k; 
}

$this->request->data['Featurecateringrestriction']['Featurecateringrestriction'] = array(); 
foreach($this->data['Featurecateringrestriction']['checkbox'] as $k=>$v) 
{ 
if ($v) $this->request->data['Featurecateringrestriction']['Featurecateringrestriction'][] = $k; 
} 

$this->request->data['Suitability']['Suitability'] = array(); 
foreach($this->data['Suitability']['checkbox'] as $k=>$v) 
{ 
if ($v) $this->request->data['Suitability']['Suitability'][] = $k; 
} 


			if ($this->Hall->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The hall has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hall could not be saved. Please, try again.'));
			}
		}
		$hallsowners = $this->Hall->Hallsowner->find('list');
		$featureparkings = $this->Hall->Featureparking->find('list');
		$featureexternalcaterings = $this->Hall->Featureexternalcatering->find('list');
		$partyfacilitiesdjs = $this->Hall->Partyfacilitiesdj->find('list');
		$partyfacilitymusics = $this->Hall->Partyfacilitymusic->find('list');
		$partyfacilitybands = $this->Hall->Partyfacilityband->find('list');
		$partyfacilitydiscos = $this->Hall->Partyfacilitydisco->find('list');
		$partyfacilitydancefloors = $this->Hall->Partyfacilitydancefloor->find('list');
		$restrictionnoises = $this->Hall->Restrictionnoise->find('list');
		$restrictionevents = $this->Hall->Restrictionevent->find('list');
		$restrictionminors = $this->Hall->Restrictionminor->find('list');
		$restrictionanimals = $this->Hall->Restrictionanimal->find('list');
		$restrictionsmokings = $this->Hall->Restrictionsmoking->find('list');
		$restrictiondecorations = $this->Hall->Restrictiondecoration->find('list');
		$featurecateringrestrictions = $this->Hall->Featurecateringrestriction->find('list');
		$availabilities = $this->Hall->Availability->find('list');
		$suitabilities = $this->Hall->Suitability->find('list');
		$pricings = $this->Hall->Pricing->find('list');
		$technicalFacilities = $this->Hall->TechnicalFacility->find('list');
		$indoorfacilities = $this->Hall->Indoorfacility->find('list');
		$outdoorfacilities = $this->Hall->Outdoorfacility->find('list');
                

$availabilities = $this->Hall->Availability->find('list',array('order' => 'day ASC'),array('fields'=>array('id','day')));

$restrictiondecorations = $this->Hall->Restrictiondecoration->find('list',array('order' => 'decoration_description ASC'),array('fields'=>array('id','decoration_description')));

$featurecateringrestrictions = $this->Hall->Featurecateringrestriction->find('list',array('order' => 'cateringrestriction_description ASC'),array('fields'=>array('id','cateringrestriction_description')));
 
$suitabilities = $this->Hall->Suitability->find('list',array('order' => 'suitabilities_name ASC'),array('fields'=>array('id','suitabilities_name')));


$this->set(compact('halls','hallsowners', 'featureparkings', 'featureexternalcaterings', 'partyfacilitiesdjs', 'partyfacilitymusics', 'partyfacilitybands', 'partyfacilitydiscos', 'partyfacilitydancefloors', 'restrictionnoises', 'restrictionevents', 'restrictionminors', 'restrictionanimals', 'restrictionsmokings', 'restrictiondecorations', 'featurecateringrestrictions', 'availabilities', 'suitabilities', 'pricings', 'technicalFacilities', 'indoorfacilities', 'outdoorfacilities'));
}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Hall->id = $id;
		if (!$this->Hall->exists()) {
			throw new NotFoundException(__('Invalid hall'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                    $currentImage = $results['Hall']['image']; 

            //upload image 
            $fileOK = $this->uploadFiles('img/images', $this->data['Hall']['image']); 

            if(array_key_exists('urls', $fileOK)) 
            { 
                $this->request->data['Hall']['image'] = $fileOK['urls'][0]; 
            } 
            else 
            { 
                $this->request->data['Hall']['image'] = $currentImage; 
            } 


foreach($this->data['pricing']['textbox'] as $k=>$v) 
{ 
if ($v) 
{ 
$this->request->data['Pricing'][$k]['id'] = $k; 
$this->request->data['Pricing'][$k]['price_fee'] = $v; 
} 
else 
{ 
$this->Hall->query("DELETE FROM halls_has_pricings WHERE halls_id =$id"); 
} 
}
$this->request->data['Availability']['Availability'] = array(); 
foreach($this->data['Availability']['checkbox'] as $k=>$v) 
{ 
if ($v) $this->request->data['Availability']['Availability'][] = $k; 
} 

$this->request->data['Restrictiondecoration']['Restrictiondecoration'] = array(); 
foreach($this->data['Restrictiondecoration']['checkbox'] as $k=>$v) 
{ 
if ($v) $this->request->data['Restrictiondecoration']['Restrictiondecoration'][] = $k; 
}

			if ($this->Hall->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The hall has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hall could not be saved. Please, try again.'));
			}

		} 

else {
			$this->request->data = $this->Hall->read(null, $id); 
                        $currentImage = $this->Hall->data['Hall']['image'];
                        if($currentImage != null) 
            { 
                $blnImage = true; 
                $this->set(compact('blnImage')); 
            } 
            else 
            { 
                $blnImage = false; 
                $this->set(compact('blnImage')); 
            } 
		}
		$hallsowners = $this->Hall->Hallsowner->find('list');
		$featureparkings = $this->Hall->Featureparking->find('list');
		$featureexternalcaterings = $this->Hall->Featureexternalcatering->find('list');
		$partyfacilitiesdjs = $this->Hall->Partyfacilitiesdj->find('list');
		$partyfacilitymusics = $this->Hall->Partyfacilitymusic->find('list');
		$partyfacilitybands = $this->Hall->Partyfacilityband->find('list');
		$partyfacilitydiscos = $this->Hall->Partyfacilitydisco->find('list');
		$partyfacilitydancefloors = $this->Hall->Partyfacilitydancefloor->find('list');
		$restrictionnoises = $this->Hall->Restrictionnoise->find('list');
		$restrictionevents = $this->Hall->Restrictionevent->find('list');
		$restrictionminors = $this->Hall->Restrictionminor->find('list');
		$restrictionanimals = $this->Hall->Restrictionanimal->find('list');
		$restrictionsmokings = $this->Hall->Restrictionsmoking->find('list');
		$restrictiondecorations = $this->Hall->Restrictiondecoration->find('list');
		$featurecateringrestrictions = $this->Hall->Featurecateringrestriction->find('list');
		$availabilities = $this->Hall->Availability->find('list');
		$suitabilities = $this->Hall->Suitability->find('list');
		$pricings = $this->Hall->Pricing->find('list');
		$technicalFacilities = $this->Hall->TechnicalFacility->find('list');
		$indoorfacilities = $this->Hall->Indoorfacility->find('list');
		$outdoorfacilities = $this->Hall->Outdoorfacility->find('list');
                //$hall = $this->Hall->read(null, $id);
                $this->set('hall', $this->Hall->read(null, $id));  // change for image
                

$availabilities = $this->Hall->Availability->find('list',array('order' => 'day ASC'),array('fields'=>array('id','day')));

$restrictiondecorations = $this->Hall->Restrictiondecoration->find('list',array('order' => 'decoration_description ASC'),array('fields'=>array('id','decoration_description')));
 
$pricings  = $this->Hall->query("SELECT Pricing.id, Pricing.price_name, HallsHasPricing.id, HallsHasPricing.halls_id, HallsHasPricing.price_fee FROM pricings AS Pricing LEFT JOIN halls_has_pricings AS HallsHasPricing ON (HallsHasPricing.halls_id = $id AND HallsHasPricing.pricing_id = Pricing.id) ORDER BY price_name ASC");

$this->set(compact('halls', 'featureparkings', 'featureexternalcaterings', 'partyfacilitiesdjs', 'partyfacilitymusics', 'partyfacilitybands', 'partyfacilitydiscos', 'partyfacilitydancefloors', 'restrictionnoises', 'restrictionevents', 'restrictionminors', 'restrictionanimals', 'restrictionsmokings', 'restrictiondecorations', 'featurecateringrestrictions', 'availabilities', 'suitabilities', 'pricings', 'technicalFacilities', 'indoorfacilities', 'outdoorfacilities')); 
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
		$this->Hall->id = $id;
		if (!$this->Hall->exists()) {
			throw new NotFoundException(__('Invalid hall'));
		}
		if ($this->Hall->delete()) {
			$this->Session->setFlash(__('Hall deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Hall was not deleted'));
		$this->redirect(array('action' => 'index'));
	}



public function beforeFilter(){
	parent::beforeFilter();
	$this->Auth->deny('index');
}





public function search(){

		 $this->set('title_for_layout',"Search results");
 
		$query=(isset($this->data['Halls']['q']))?$this->data['Halls']['q']:'';

		 //Debugger::dump($query);
 
		if(!$query) $query=(isset($this->params['url']['q']))?$this->params['url']['q']:'';

		 if(empty($this->data['Halls']['q']) && $this->request->is('post')){
 
		$this->Session->setFlash("Invalid or empty search string",'flash_fail');

		 $this->redirect(array('action' => 'index'));
 
		}

		 else{

		 App::uses('Sanitize', 'Utility');
 
		$this->set('query',$query);
		
		
		 $query=Sanitize::paranoid($query);

 		$this->paginate = array(

		 'conditions' => array('OR'=> array('Hall.hall_name LIKE '=> '%'.$query.'%' , 'Hall.suburb LIKE '=>'%'.$query.'%' , 'Hall.street_address LIKE '=>'%'.$query.'%' , 'Hall.suburb LIKE '=>'%'.$query.'%' , 'Hall.state LIKE '=>'%'.$query.'%' , 'Hall.suburb LIKE '=>'%'.$query.'%' , 'Hall.postcode/zipcode LIKE '=>'%'.$query.'%' , 'Hall.email LIKE '=>'%'.$query.'%' , 'Hall.suburb LIKE '=>'%'.$query.'%' , 'Hall.capacity LIKE '=>'%'.$query.'%')
 
		),

		 'recursive'=>-1,

		 'limit'=>10,
 
		);

		 $halls = $this->paginate('Hall');




		 $this->set(compact('halls'));
 
		}




	 }
         
         
         public function deleteImage($id) 
    { 
        $conditions = array("Hall.id" => $id); 
        $results = $this->Hall->find('first', array('conditions' => $conditions)); 
        $currentImage = $results['Hall']['image']; 

        $imageFolder = WWW_ROOT."img/images"; 
        $imagePath = $imageFolder.'/'.$currentImage; 
        unlink($imagePath); 

        $this->Hall->query("update halls set image = null where id =".$id); 
        $this->Session->setFlash('Image deleted.'); 
        $this->redirect(array('action'=>'index')); 
    } 

    public function getHallByImage($image) 
    { 
        return $this->Hall->field('hall_name', array('image =' => $image)); 
    } 




/**
 * add method
 *
 * @return void
 */
	public function add2() {
		if ($this->request->is('post')) {
			$this->Hall->create();

$this->request->data['Availability']['Availability'] = array(); 
foreach($this->data['Availability']['checkbox'] as $k=>$v) 
{ 
if ($v) $this->request->data['Availability']['Availability'][] = $k; 
} 

$this->request->data['Restrictiondecoration']['Restrictiondecoration'] = array(); 
foreach($this->data['Restrictiondecoration']['checkbox'] as $k=>$v) 
{ 
if ($v) $this->request->data['Restrictiondecoration']['Restrictiondecoration'][] = $k; 
}

$this->request->data['Featurecateringrestriction']['Featurecateringrestriction'] = array(); 
foreach($this->data['Featurecateringrestriction']['checkbox'] as $k=>$v) 
{ 
if ($v) $this->request->data['Featurecateringrestriction']['Featurecateringrestriction'][] = $k; 
} 

$this->request->data['Suitability']['Suitability'] = array(); 
foreach($this->data['Suitability']['checkbox'] as $k=>$v) 
{ 
if ($v) $this->request->data['Suitability']['Suitability'][] = $k; 
} 


			if ($this->Hall->save($this->request->data)) {
				$this->Session->setFlash(__('The hall has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hall could not be saved. Please, try again.'));
			}
		}
		$hallsowners = $this->Hall->Hallsowner->find('list');
		$featureparkings = $this->Hall->Featureparking->find('list');
		$featureexternalcaterings = $this->Hall->Featureexternalcatering->find('list');
		$partyfacilitiesdjs = $this->Hall->Partyfacilitiesdj->find('list');
		$partyfacilitymusics = $this->Hall->Partyfacilitymusic->find('list');
		$partyfacilitybands = $this->Hall->Partyfacilityband->find('list');
		$partyfacilitydiscos = $this->Hall->Partyfacilitydisco->find('list');
		$partyfacilitydancefloors = $this->Hall->Partyfacilitydancefloor->find('list');
		$restrictionnoises = $this->Hall->Restrictionnoise->find('list');
		$restrictionevents = $this->Hall->Restrictionevent->find('list');
		$restrictionminors = $this->Hall->Restrictionminor->find('list');
		$restrictionanimals = $this->Hall->Restrictionanimal->find('list');
		$restrictionsmokings = $this->Hall->Restrictionsmoking->find('list');
		$restrictiondecorations = $this->Hall->Restrictiondecoration->find('list');
		$featurecateringrestrictions = $this->Hall->Featurecateringrestriction->find('list');
		$availabilities = $this->Hall->Availability->find('list');
		$suitabilities = $this->Hall->Suitability->find('list');
		$pricings = $this->Hall->Pricing->find('list');
		$technicalFacilities = $this->Hall->TechnicalFacility->find('list');
		$indoorfacilities = $this->Hall->Indoorfacility->find('list');
		$outdoorfacilities = $this->Hall->Outdoorfacility->find('list');

$availabilities = $this->Hall->Availability->find('list',array('order' => 'day ASC'),array('fields'=>array('id','day')));

$restrictiondecorations = $this->Hall->Restrictiondecoration->find('list',array('order' => 'decoration_description ASC'),array('fields'=>array('id','decoration_description')));

$featurecateringrestrictions = $this->Hall->Featurecateringrestriction->find('list',array('order' => 'cateringrestriction_description ASC'),array('fields'=>array('id','cateringrestriction_description')));
 
$suitabilities = $this->Hall->Suitability->find('list',array('order' => 'suitabilities_name ASC'),array('fields'=>array('id','suitabilities_name')));


$this->set(compact('halls','hallsowners', 'featureparkings', 'featureexternalcaterings', 'partyfacilitiesdjs', 'partyfacilitymusics', 'partyfacilitybands', 'partyfacilitydiscos', 'partyfacilitydancefloors', 'restrictionnoises', 'restrictionevents', 'restrictionminors', 'restrictionanimals', 'restrictionsmokings', 'restrictiondecorations', 'featurecateringrestrictions', 'availabilities', 'suitabilities', 'pricings', 'technicalFacilities', 'indoorfacilities', 'outdoorfacilities'));
}

}
