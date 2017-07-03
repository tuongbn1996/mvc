<?php
include_once("models/model.php");

class Controller {
	

     public function __construct()  
     {  
          $this->model = new Model();
     } 

    public function listUser($data = array())
    {	
      //neu mang rong ==> get all users
      //neu khong rong ==> id, users ......
    	 $users=$this->model->listUser($_POST);
       include 'views/insert.php';

    }
  
  //   public function addUser(){
  //     $users=$this->model->add($_POST);
  //     include 'view/insert.php';
    	
	 // }
	
	 // public function editUser(){
		// $users=$this->model->edit($_POST);
  //   include 'view/update.php';

	 // }

	 // public function deleteUser(){
  //     $users=$this->model->delete($_POST);
  //     include 'view/viewbook.php';
	 // }

}