
<?php require_once('../shared/bootstrap.php'); ?><!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>

<div class="container">
	<div class="col-lg-5">
	Register page!
	<a href="index.php">go back</a>
	<form action="../controllers/user/create.php" method="POST">
	<div class="form-group">
		<div class="col-lg-6">
			<label>firstname</label>
			<input class="form-control" type="text" name="firstname">
			<label>username</label>
			<input class="form-control" type="text" name="username">
			<label>address</label>
			<input class="form-control" type="text" name="address">
			<label>password</label>
			<input class="form-control" type="text" name="password">
		</div>
		<div class="col-lg-6">
			<label>lastname</label>
			<input class="form-control" type="text" name="lastname">
			<label>email</label>
			<input class="form-control" type="text" name="email">
			<label>phone Number</label>
			<input class="form-control" type="text" name="phoneNo">
			<button style="margin-top: 13%;" type="submit" class="btn btn-primary">Register</button>
		</div>
	</form>
	</div>
	</div>
</div>

</body>
</html>