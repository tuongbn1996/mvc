<?php
include("models/model.php");

class Controller {
	

     public function __construct()  
     {  
          $this->model = new Model();
     } 

    public function addUser($data = array())
    {	
      //neu mang rong ==> get all users
      //neu khong rong ==> id, users ......
    	 $users=$this->model->addUser($_POST);
       include 'views/insert.php';
       // include 'views/view.php';

    }
  
    public function listUser(){
      $rows=$this->model->listUser($_POST);
      include 'views/view.php';
    	
	 }
   function delete(){
    $rows = $this->model->deleteSql($_POST);
    include "views/view.php";
  }
	
	 function setToUpdate(){
    $arr = $this->model->setToUpdate($_POST);
    include "views/viewUpdate.php";
  }
  function update(){
    $arr = $this->model->update($_POST);
    include "views/viewUpdate.php";  
  }

}
?>