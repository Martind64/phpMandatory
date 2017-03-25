<?php 
require_once('CategoryController.php');
require_once('../../models/Category.php');

$categoryController = new CategoryController();

if ($_POST['name']) {

	$user = new Category($_POST['name']);
	$categoryController->create($user);
}

 ?>