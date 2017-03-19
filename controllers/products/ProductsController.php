<?php 

class ProductsController
{
	function __construct()
	{
		require_once('../../models/Product.php');
	}

	function create(Product $product){
		$product = new Product();

	}

}

?>