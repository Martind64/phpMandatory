<?php 
session_start();
require_once(__DIR__.'/LoginController.php');

$login = new LoginController();

$login->logout();


 ?>