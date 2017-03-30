<?php 
require_once(__DIR__.'/../../Dbhandler.php');
require_once(__DIR__.'/../../models/Category.php');
class CategoryController
{
	function create(Category $category)
	{	
		$conn = new Dbhandler();

		$query = "INSERT INTO category (category_name) VALUES(?)";

		if($stmt = $conn->dbc->prepare($query)) {

			$stmt->bind_param('s', $category->name);
			$stmt->execute();
		}else{
			echo mysqli_error($conn->dbc);
		}
	}

	function getAll(){
		$conn = new Dbhandler();
		$query = "SELECT id, category_name FROM category";

		$resultArray = [];

	 		if ($stmt = $conn->dbc->prepare($query)) {
			$stmt->execute();
			$result = $stmt->get_result();

			while ($row = $result->fetch_assoc()) {
				$resultArray[$row['category_name']] = $row['id'];
			}

			return $resultArray;
		}else{
			echo mysqli_error($conn->dbc);
		}

	}

	function findCategoryByName($categoryName)
	{
		$conn = new Dbhandler();

		$query = "SELECT id FROM category where category_name=?";
		if ($stmt = $conn->dbc->prepare($query)) {
			$stmt->bind_param('s', $categoryName);
			$stmt->execute();
			$result = $stmt->get_result()->fetch_assoc();
			return $result;
		}
	}
}
 ?>

<!-- 		$result = $conn->dbc->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "id: " . $row["id"]. " - Name: " . $row["category_name"]. "<br>";
		    }
		} else {
		    echo "0 results";
		} -->