<?php session_start();
require_once('../../../controllers/category/CategoryController.php');
?>
<!DOCTYPE html>
<?php if (isset($_SESSION['currentUser'])){
		if ($_SESSION['currentUser']['role'] != 'ROLE_ADMIN') {
			echo 'You have to be an admin to access this page';
			exit;
	}}
	?>
	
<html>
<head>
	<title>Create Product</title>
	<?php require_once('../../../shared/bootstrap.php'); ?>
</head>
<body>
<?php require_once(dirname(__DIR__)."/../../shared/views/navbar.php") ?>
<div class="container">



<div class="row">
	<div class="col-lg-5">
	<a href="../dashboard.php">go back</a>
	<p>Select a category</p>
	<form action="createProduct.php" method="POST">
	<div class="form-group">
		<div class="col-lg-12">
			<?php  
				$category = new CategoryController();
				$categories = $category->findAll();
				foreach ($categories as $name => $category) {
					echo "<button class='btn btn-primary' name='id' value=".$category['id'].">".$category['category']."</button>".PHP_EOL;
				}
			?>
		</div>
		</form>
		</div>
		</div>
	</div>
	</body>
</div>

</html>


<?php 
$htmlCategories = <<<CATEGORIES
<button class="btn btn-primary">$name</button>
CATEGORIES;

 ?>