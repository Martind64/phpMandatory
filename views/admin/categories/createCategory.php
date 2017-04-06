<?php session_start(); ?>
<?php require_once(__DIR__.'/../auth.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Create category</title>
	<?php require_once('../../../shared/bootstrap.php'); ?>
</head>
<body>
<?php require_once(__DIR__.'/../shared/jumbotron.php') ?>
<div class="container-fluid">
<div class="row">
	<?php require_once(__DIR__.'/../shared/sidebar.php') ?>

	<div class="col-lg-4">
	<p>Create a category</p>
	<form action="../../../controllers/category/create.php" method="POST">
	<div class="form-group">
		<div class="col-lg-6">
			<label>name</label>
			<input class="form-control" type="text" name="name">
			<button style="margin-top: 13%;" type="submit" class="btn btn-primary">Create</button>
		</div>
		</div>
	</form>
	</div>
	</div>
</div>

</body>

</html>