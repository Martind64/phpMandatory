<?php 
require_once(__DIR__.'/CategoryController.php');
require_once(__DIR__.'/../../models/Category.php');

$categoryController = new CategoryController();

if ($_POST['name']) {

	$category = new Category($_POST['name']);
	$categoryController->create($category);
}

 ?>