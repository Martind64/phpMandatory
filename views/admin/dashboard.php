<!DOCTYPE html>
<?php session_start() ?>

<?php if (isset($_SESSION['currentUser'])) {
	if ($_SESSION['currentUser']['role'] != 'ROLE_ADMIN'){
			echo "You have to be an admin to access this page";
	}else{ ?>
<html>
<head>
	<title>Dashboard</title>
	<?php require_once('../../shared/bootstrap.php'); ?>
</head>
<body>

<a href="products/createProduct.php">Create a product</a><br>
<a href="categories/createCategory.php">Create a category</a>

<div class="row">
	<div class="col-lg-2">
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="#">items</a></li>
		</ul>
	</div>
</div>
</body>
</html>		
<?php }} ?>