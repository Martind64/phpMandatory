<?php 
require_once(__DIR__.'/../../Dbhandler.php');
require_once(__DIR__.'/../../models/Product.php');

class ProductsController
{
	function create($product){
		$conn = new Dbhandler();
		echo $product->name."<br>";
		echo $product->category."<br>";
		echo $product->subCategory."<br>";
		echo $product->description."<br>";
		echo $product->imgPath."<br>";
		echo $product->price."<br>";

		$query = "INSERT INTO products (category_id, sub_category_id, name, description, price, img_path) VALUES(?,?,?,?,?,?)";
		if ($stmt = $conn->dbc->prepare($query)) {
			$stmt->bind_param('ssssss', $product->category, $product->subCategory, $product->name, $product->description, $product->price, $product->imgPath);
			$stmt->execute();
		}else{
			echo mysqli_error($conn->dbc);
		}
	}

	function findProductByName($productName)
	{
		$conn = new Dbhandler();

		$query = "SELECT id FROM products where name=?";
		if ($stmt = $conn->dbc->prepare($query)) {
			$stmt->bind_param('s', $productName);
			$stmt->execute();
			$result = $stmt->get_result()->fetch_assoc();
			return $result;
		}
	}

	function getAll(){
		$conn = new Dbhandler();
		$query = "SELECT * From products";
		if ($stmt = $conn->dbc->prepare($query)) {
			$stmt->execute();
			$stmt->bind_result($result);
			return $result;
		}else{
			echo mysqli_error($conn->dbc);
		}
	}
}

?>