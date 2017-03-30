<?php 
require_once(__DIR__.'/SubCategoryController.php');
require_once(__DIR__.'/../category/CategoryController.php');
require_once(__DIR__.'/../../models/SubCategory.php');

$subCategoryController = new SubCategoryController();
$categoryController = new CategoryController();

if ($_POST['name'] && $_POST['categoryName']) {
	$categoryId = $categoryController->findCategoryByName($_POST['categoryName']);

	$subCategory = new SubCategory($_POST['name'], $categoryId['id']);

	$subCategoryController->create($subCategory);
}

 ?>