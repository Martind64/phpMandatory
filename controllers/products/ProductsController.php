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
			header('Location: ../../views/admin/dashboard.php');

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

	function findByCategory(string $category){

		$conn = new Dbhandler();
		$query = "SELECT name, category_name, sub_category_name, description, price, img_path FROM products 
		JOIN category ON category.id = products.category_id
		JOIN sub_category on sub_category.id = products.sub_category_id
		WHERE category_name =?";
		$resultArray = [];

		if ($stmt = $conn->dbc->prepare($query)) {
			$stmt->bind_param('s', $category);
			$stmt->execute();
			$result = $stmt->get_result();

			while ($row = $result->fetch_assoc()) {
				$resultArray[] = ['name' => $row['name'], 'description' => $row['description'], 'imgPath' => $row['img_path'], 'price' => $row['price'], 'category' => $row['category_name'], 'subCategory' => $row['sub_category_name'] ];
			}
			return $resultArray;
		}else{
			echo mysqli_error($conn->dbc);
		}
	}

	function findAll(){
		$conn = new Dbhandler();
		$query = "SELECT products.id, name, category_name, sub_category_name, description, price, img_path FROM products 
		JOIN category ON category.id = products.category_id
		JOIN sub_category on sub_category.id = products.sub_category_id";

		$resultArray = [];

	 		if ($stmt = $conn->dbc->prepare($query)) {
			$stmt->execute();
			$result = $stmt->get_result();

			while ($row = $result->fetch_assoc()) {
				$resultArray[] = ['name' => $row['name'], 'description' => $row['description'], 'imgPath' => $row['img_path'], 'price' => $row['price'], 'category' => $row['category_name'], 'subCategory' => $row['sub_category_name'] ];
			}

			return $resultArray;
		}else{
			echo mysqli_error($conn->dbc);
		}
	}

}
// For testing
// $product = new ProductsController();
// $r = $product->findByCategory('clothes');
// echo "<pre>";
// var_dump($r);

?>