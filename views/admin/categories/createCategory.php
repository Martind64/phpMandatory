<?php session_start(); ?>
<!DOCTYPE html>
<?php if (isset($_SESSION['currentUser'])){
	if ($_SESSION['currentUser']['role'] != 'ROLE_ADMIN') {
		echo 'You have to be an admin to access this page';
	}else
	{?>
	
<html>
<head>
	<title>Create category</title>
	<?php require_once('../../../shared/bootstrap.php'); ?>
</head>
<body>

<div class="container">
<div class="row">
	<div class="col-lg-5">
	Register page!
	<a href="../dashboard.php">go back</a>
	<form action="../../../controllers/category/create.php" method="POST">
	<div class="form-group">
		<div class="col-lg-6">
			<label>name</label>
			<input class="form-control" type="text" name="name">
		</div>
			<button style="margin-top: 13%;" type="submit" class="btn btn-primary">Create</button>
		</div>
	</form>
	</div>
	</div>
</div>

</body>
<?php }} // Finishes authorization ?>

</html>