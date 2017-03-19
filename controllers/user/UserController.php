<?php 

class UserController
{

	function __construct()
	{
		require_once('../../Dbhandler.php');
		require_once('../../models/User.php');
	}




	function create(User $user){
		$conn = new Dbhandler();

		$query = "INSERT INTO users (first_name, last_name, username, email, password, role) VALUES (?, ?, ?, ?, ?, ?)";

		if ($stmt = $conn->dbc->prepare($query)) {

			$stmt->bind_param('ssssss', $user->firstname, $user->lastname, $user->username, $user->email, $user->password, $user->role);
			$stmt->execute();
		}else{
			echo mysqli_error($conn->dbc);
		}

	}

}


?>