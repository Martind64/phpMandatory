<?php session_start(); ?>
<?php require_once('../../../shared/bootstrap.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Product</title>
</head>
<body>

<div class="container">
<div class="row">
	<div class="col-lg-5">
	Register page!
	<a href="../index.php">go back</a>
	<form action="../../../controllers/products/create.php" method="POST">
	<div class="form-group">
		<div class="col-lg-6">
			<label>name</label>
			<input class="form-control" type="text" name="name">
			<label>desription</label>
			<input class="form-control" type="text" name="desription">
		</div>
		<div class="col-lg-6">
			<label>price</label>
			<input class="form-control" type="text" name="price">
			<label>imgPath</label>
			<input class="form-control" type="text" name="email">
			<button style="margin-top: 13%;" type="submit" class="btn btn-primary">Register</button>
		</div>
	</form>
	</div>
	</div>
</div>


</body>
</html>