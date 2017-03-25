<?php 
require_once('../../Dbhandler.php');
require_once('../../models/User.php');
class UserController
{

	function create(User $user){
		$conn = new Dbhandler();

		$query = "INSERT INTO users (first_name, last_name, username, email, address, phone_number, password, role) VALUES (?,?,?,?,?,?,?,?)";

		if ($stmt = $conn->dbc->prepare($query)) {

			$stmt->bind_param('ssssssss', $user->firstname, $user->lastname, $user->username, $user->email, $user->address, $user->phoneNo, $user->password, $user->role);
			$stmt->execute();
		}else{
			echo mysqli_error($conn->dbc);
		}

	}

}


?>