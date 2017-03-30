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

	// echo $_POST['name']."<br>";
	// echo $_POST['description']."<br>";
	// echo $_POST['price']."<br>";
	// echo $_POST['imgPath']."<br>";
	// echo $_POST['categoryId']."<br>";
	// echo $_POST['subCategory']."<br>";





 ?>