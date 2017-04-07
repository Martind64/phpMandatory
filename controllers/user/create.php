<?php
session_start();
require_once('UserController.php');
require_once('../../models/User.php');

$userController = new UserController();

if ($_POST['firstname'] && $_POST['lastname'] && $_POST['username'] && $_POST['email'] && $_POST['address'] && $_POST['phoneNo'] && $_POST['password']) {

	$user = new User($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['email'], $_POST['address'], $_POST['phoneNo'], $_POST['password']);

	$userController->create($user);
}else{
	header('Location: ../../views/register.php');	
}



?>