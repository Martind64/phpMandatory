<?php 
require_once('../../Dbhandler.php');
require_once('../../models/Category.php');

class CategoryController
{
	function create(Category $category)
	{	
		$conn = new Dbhandler();

		$query = "INSERT INTO category (name) VALUES(?)";

		if($stmt = $conn->dbc->prepare($query)) {

			$stmt->bind_param('s', $category->name);
			$stmt->execute();
		}else{
			echo mysqli_error($conn->dbc);
		}
	}
}


 ?>