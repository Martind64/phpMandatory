<?php 
require_once('../../Dbhandler.php');
require_once('../../models/User.php');
class UserController
{

	function create(User $user){
		$this->validate($user);

		$conn = new Dbhandler();

		$query = "INSERT INTO users (first_name, last_name, username, email, address, phone_number, password, role) VALUES (?,?,?,?,?,?,?,?)";

		if ($stmt = $conn->dbc->prepare($query)) {

			$stmt->bind_param('ssssssss', $user->firstname, $user->lastname, $user->username, $user->email, $user->address, $user->phoneNo, $user->password, $user->role);
			$stmt->execute();
			header('Location: ../../views/index.php');
		}else{
			echo mysqli_error($conn->dbc);
		}

	}

	function validate($user){
		$this->unsetValidation();
		$errors = 0;

		if (!preg_match('/^[a-zA-Z]+$/', $user->firstname)) {
			$_SESSION['registerNotFirstname'] = 'Your firstname can only be letters';
			header('Location: ../../views/register.php');
			$errors += 1;
		}
		if (!preg_match('/^[a-zA-Z]+$/', $user->lastname)) {
			$_SESSION['registerNotLastname'] = 'Your lastname can only be letters';
			header('Location: ../../views/register.php');
			$errors += 1;
		}
		if (!preg_match('/^[\w\s\,]+$/', $user->address)) {
			$_SESSION['registerNotAddress'] = "Can't enter that address";
			header('Location: ../../views/register.php');
			$errors += 1;
		}
		if (!filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
			$_SESSION['registerNotEmail'] = "You need to use a correct email to create an account";
			header('Location: ../../views/register.php');
			$errors += 1;
			}
		if (!preg_match('/^[0-9]{8,8}$/', $user->phoneNo)) {
			$_SESSION['registerNotPhone'] = 'You need to type an 8 digit phonenumber';
			header('Location: ../../views/register.php');
			$errors += 1;
		}	

		if ($errors > 0) {
			exit();
		}
	}

	function unsetValidation()
	{
		if (isset($_SESSION['registerNotEmail'])) {
			unset($_SESSION['registerNotEmail']);
		}
		if (isset($_SESSION['registerNotPhone'])) {
			unset($_SESSION['registerNotPhone']);
		}
		if (isset($_SESSION['registerNotFirstname'])) {
			unset($_SESSION['registerNotFirstname']);
		}
		if (isset($_SESSION['registerNotLastname'])) {
			unset($_SESSION['registerNotLastname']);
		}
		if (isset($_SESSION['registerNotAddress'])) {
			unset($_SESSION['registerNotAddress']);
		}
	}

}


?>