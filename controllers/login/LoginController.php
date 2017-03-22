<?php 
require_once('../../Dbhandler.php');

class LoginController{

	function login(){
		$indexPage = '../../views/index.php';

		$conn = new Dbhandler();
		if (!isset($_POST['email']) || !isset($_POST['password'])) {
			header('Location: index.php');
			die();
		}

		if ($_POST['email'] == '' || $_POST['password'] == '') {
			header('Location: index.php');
			die();
		}

		if (!$POST_['email'] = '' or !$_POST['password'] == '') {

			$email = $_POST['email'];
			$password = $_POST['password'];

			$query = "SELECT first_name, last_name, username, email, role FROM users where email=? AND password=?";
			if ($stmt = $conn->dbc->prepare($query)) {
				$stmt->bind_param("ss", $email, $password);
				$stmt->execute();
				$stmt->bind_result($firstname, $lastname, $username, $email, $role);
				$result = $stmt->fetch();
				$currentUser = ['firstname' => $firstname, 'lastname' => $lastname, 'username' => $username, 'email' => $email, 'role' =>$role];
			}

			if (!$result) {
				$_SESSION['login-message'] = 'Your email or password is incorrect';
				header('Location: ../../views/index.php');
			}else{
				$_SESSION['currentUser'] = $currentUser;
				$_SESSION['login-message'] = "you are logged in";

				if ($currentUser['role'] == 'ROLE_ADMIN') {
					header('Location: ../../views/admin/dashboard.php');
				}
				else{
					header('Location: ../../views/index.php');
				}
			}
		}
	}

	function logout()
	{
		session_destroy();
		header("Location: ../../views/index.php");
	}
	
}


 ?>