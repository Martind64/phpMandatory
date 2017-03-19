
<?php require_once('../shared/bootstrap.php'); ?><!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>

<div class="container">
<div class="col-lg-4">
Register page!
<a href="index.php">go back</a>
	
<form action="../controllers/user/create.php" method="POST">
<div class="form-group">
	<label>firstname</label>
	<input class="form-control" type="text" name="firstname">
	<label>lastname</label>
	<input class="form-control" type="text" name="lastname">
	<label>username</label>
	<input class="form-control" type="text" name="username">
	<label>email</label>
	<input class="form-control" type="text" name="email">
	<label>address</label>
	<input class="form-control" type="text" name="address">
	<label>phone Number</label>
	<input class="form-control" type="text" name="phoneNo">
	<label>password</label>
	<input class="form-control" type="text" name="password">
	<button type="submit" class="btn btn-primary">Register</button>
	</div>
</div>

</div>
	

</form>

</body>
</html>