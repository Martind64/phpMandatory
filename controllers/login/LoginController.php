<?php 
require_once(__DIR__.'/../../Dbhandler.php');

class LoginController{

	function login(){

		$this->validate();

		$indexPage = '../../views/index.php';

		$conn = new Dbhandler();

		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$_SESSION['notEmail'] = "You need to use an email to login";
			header('Location: ../../views/index.php');
			die();
		}
		if (!isset($_POST['email']) || !isset($_POST['password'])) {
			die();
		}

		if ($_POST['email'] == '' || $_POST['password'] == '') {
			header('Location: ../../views/index.php');
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
				if ($currentUser['role'] == 'ROLE_ADMIN') {
					header('Location: ../../views/admin/dashboard.php');
				}
				else{
					header('Location: ../../views/index.php');
				}
			}
		}
	}

	function validate(){
		if (isset($_SESSION['notEmail'])) {
		unset($_SESSION['notEmail']);
		}
		if (isset($_SESSION['login-message'])) {
			unset($_SESSION['login-message']);
		}

	}

	function logout()
	{
		session_destroy();
		header("Location: ../../views/index.php");
	}
	
}


 ?>