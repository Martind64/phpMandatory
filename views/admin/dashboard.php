<!DOCTYPE html>
<?php session_start() ?>
<?php require_once(__DIR__.'/auth.php') ?>
<html>
<head>
	<title>Dashboard</title>
	<?php require_once('../../shared/bootstrap.php'); ?>
</head>
<body>
<?php require_once(__DIR__.'/shared/jumbotron.php') ?>
<div class="container-fluid">
	<div class="row">
		<?php require_once(__DIR__.'/shared/sidebar.php') ?>
	</div>
</div>


</body>
</html>		
