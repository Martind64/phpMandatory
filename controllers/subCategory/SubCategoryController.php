<?php 
require_once(__DIR__.'/../../Dbhandler.php');
require_once(__DIR__.'/../../models/SubCategory.php');

class SubCategoryController
{
	function create(SubCategory $subCategory)
	{	
		$conn = new Dbhandler();

		$query = "INSERT INTO sub_category(category_id, sub_category_name) VALUES(?,?)";

		if($stmt = $conn->dbc->prepare($query)) {

			$stmt->bind_param('ss', $subCategory->categoryId, $subCategory->name);
			$stmt->execute();
			header('Location: ../../views/admin/dashboard.php');
		}else{
			echo mysqli_error($conn->dbc);
		}
	}

	function getAll(){
		$conn = new Dbhandler();
		$query = "SELECT sub_category_name FROM sub_category";

		$resultArray = [];

	 		if ($stmt = $conn->dbc->prepare($query)) {
			$stmt->execute();
			$result = $stmt->get_result();

			while ($row = $result->fetch_assoc()) {
				$resultArray[] = $row['sub_category_name'];
			}

			return $resultArray;
		}else{
			echo mysqli_error($conn->dbc);
		}
	}

	function findByCategoryId($id)
	{
		$conn = new Dbhandler();
		$query = "SELECT sub_category_name FROM sub_category WHERE category_id=?";

		$resultArray = [];
		if ($stmt = $conn->dbc->prepare($query)) {
			$stmt->bind_param('s', $id);
			$stmt->execute();
			$result = $stmt->get_result();
			while ($row = $result->fetch_assoc()) {
				$resultArray[] = $row['sub_category_name'];
			}
		}else{
			echo mysqli_error($conn->dbc);
		}
			return $resultArray;
	}

	function findByName($name){
		$conn = new Dbhandler();

		$query = "SELECT id FROM sub_category where sub_category_name=?";
		if ($stmt = $conn->dbc->prepare($query)) {
			$stmt->bind_param('s', $name);
			$stmt->execute();
			$result = $stmt->get_result()->fetch_assoc();
			$resultAsString = $result['id'];
			return $resultAsString;
		}
	}
}
// FOR TESTING
// $subCat = new SubCategoryController();
// $c = $subCat->findByName('hej');
// var_dump($c);
 ?>