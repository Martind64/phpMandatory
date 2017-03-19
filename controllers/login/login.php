<?php
session_start();
require_once('LoginController.php');

$login = new LoginController();

$login->login();





 ?>