<?php session_start(); ?>
<?php require_once(__DIR__.'/../auth.php'); ?>
<?php require_once('../../../controllers/category/CategoryController.php');?>

<!DOCTYPE html>	
<html>
<head>
	<title>Create sub category</title>
	<?php require_once('../../../shared/bootstrap.php'); ?>
</head>
<body>
<?php require_once(__DIR__.'/../shared/jumbotron.php') ?>

<div class="container-fluid">
<div class="row">
	<?php require_once(__DIR__.'/../shared/sidebar.php') ?>

	<div class="col-lg-4">
	<form action="controllers/subCategory/create.php" method="POST">
	<p>Create a subcategory</p>
	<div class="form-group">
		<div class="col-lg-6">
			<label>name</label>
			<input class="form-control" type="text" name="name">
			<label>category</label>
			<select class="form-control" name="categoryName">
			<?php  
				$category = new CategoryController();
				$categories = $category->findAll();
				foreach ($categories as $key => $array) {
					echo "<option>".$array['category']."</option>";
				}
			?>
			</select>
			<button style="margin-top: 13%;" type="submit" class="btn btn-primary">Create</button>
		</div>
		</div>
	</form>
	</div>
	</div>
</div>

</body>
</html>