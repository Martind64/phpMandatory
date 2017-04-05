<!DOCTYPE html>
<?php session_start() ?>

<?php if (isset($_SESSION['currentUser'])) {
	if ($_SESSION['currentUser']['role'] != 'ROLE_ADMIN'){
			echo "You have to be an admin to access this page";
			exit;
	}} ?>
<html>
<head>
	<title>Dashboard</title>
	<?php require_once('../../shared/bootstrap.php'); ?>
</head>
<body>
<?php require_once(__DIR__."/../../shared/views/navbar.php") ?>


<div class="row">
	<div class="col-lg-2">
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="#">items</a></li>
			<li>
				<a href="products/selectCategory.php">Create a product</a><br>
			</li>
			<li>
				<a href="../index.php">Index</a><br>
			</li>
			<li>
				<a href="categories/createSubCategory.php">Create a sub category</a><br>
			</li>
			<li>
				<a href="categories/createCategory.php">Create a category</a><br>
			</li>
		</ul>
	</div>
</div>


</body>
</html>		
