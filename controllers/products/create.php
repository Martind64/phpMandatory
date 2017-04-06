<?php 
session_start();
require_once(__DIR__.'/ProductsController.php');
require_once(__DIR__.'/../../models/Product.php');
require_once(__DIR__.'/../subCategory/subCategoryController.php');

$productsController = new ProductsController();
$subCategoryController = new SubCategoryController();


if ($_POST['name'] && $_POST['description'] && $_POST['price'] && $_POST['imgPath'] && $_POST['categoryId'] && $_POST['subCategory']) {

	$id = $subCategoryController->findByName($_POST['subCategory']);

	$product = new Product($_POST['name'], $_POST['description'], $_POST['price'], $_POST['imgPath'], $_POST['categoryId'], $id);
	$productsController->create($product);
}




 ?>