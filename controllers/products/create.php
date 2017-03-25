<?php 
session_start();
require_once('ProductsController.php');
require_once('../../models/Product.php');

$productsController = new ProductsController();

if ($_POST['name'] && $_POST['description'] && $_POST['price'] && $_POST['imgPath']) {

	$product = new Product($_POST['name'], $_POST['description'], $_POST['price'], $_POST['imgPath']);
	$productsController->create($product);
}






 ?>