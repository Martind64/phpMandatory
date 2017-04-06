<?php session_start(); ?>
<?php require_once(__DIR__.'/../auth.php'); ?>
<?php require_once('../../../controllers/category/CategoryController.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Product</title>
	<?php require_once('../../../shared/bootstrap.php'); ?>
</head>
<body>
<?php require_once(__DIR__.'/../shared/jumbotron.php') ?>
<div class="container-fluid">
<div class="row">
	<?php require_once(__DIR__.'/../shared/sidebar.php') ?>

	<div class="col-lg-5">
	<p>Select a category</p>
	<form action="views/admin/products/createProduct.php" method="POST">
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
	</body>
</div>

</html>


<?php 
$htmlCategories = <<<CATEGORIES
<button class="btn btn-primary">$name</button>
CATEGORIES;

 ?>