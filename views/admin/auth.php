<?php if (isset($_SESSION['currentUser'])){
	if ($_SESSION['currentUser']['role'] != 'ROLE_ADMIN') {
		echo 'You have to be an admin to access this page';
		exit;
	}}elseif (!isset($_SESSION['currentUser'])) {
		echo 'You have to be an admin to access this page';
		exit;
	}?>