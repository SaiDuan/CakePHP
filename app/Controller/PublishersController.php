<?php 
  class PublishersController extends AppController 
  { 
    public $name = "Publishers"; 
         
     public function index() 
     { 
       $this->set("publishers",  
        $this->Publisher->find("all", array('order' => 'company_name  
        ASC'))); 
     } 
  }  
 ?>  