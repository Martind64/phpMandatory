<?php 
require_once('../../Dbhandler.php');
require_once('../../models/Product.php');

class ProductsController
{
	function create($product){
		$conn = new Dbhandler();

		$query = "INSERT INTO products (name, description, price, img_path) VALUES(?, ?, ?, ?)";
		if ($stmt = $conn->dbc->prepare($query)) {
			$stmt->bind_param('ssss', $product->name, $product->description, $product->price, $product->imgPath);
			$stmt->execute();
		}else{
			echo mysqli_error($conn->dbc);
		}

	}

}

?>