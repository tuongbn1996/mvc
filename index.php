<?php
// index.php file
include_once("controllers/Controller.php");

$controller = new Controller();
// $controller->addUser();
$controller->listUser();
$controller->delete();
$controller->setToUpdate();
$controller->update();
?>