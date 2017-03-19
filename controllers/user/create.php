<?php
session_start();
require_once('UserController.php');
require_once('../../models/User.php');

$userController = new UserController();

if ($_POST['firstname'] && $_POST['lastname'] && $_POST['username'] && $_POST['email'] && $_POST['password']) {

	$user = new User($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['email'], $_POST['password']);

	$userController->create($user);
}


?>