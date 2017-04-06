<?php session_start(); ?>
<?php require_once(__DIR__.'/../../auth.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once(__DIR__.'/../../../../shared/bootstrap.php'); ?>
</head>
<body>
<?php require_once(__DIR__.'/../../shared/jumbotron.php') ?>
<?php require_once(__DIR__.'/../../../../controllers/products/ProductsController.php') ?>

<div class="container-fluid">
	<div class="row">
		<?php require_once(__DIR__.'/../../shared/sidebar.php') ?>

<div class="col-lg-10">
		<?php $result = ProductsController::findByCategory('Clothes');?>
		<table class="table">
		<tr>
			<th>Product</th>
			<th>Category</th>
			<th>Sub Category</th>
			<th>Description</th>
			<th>Price</th>
		</tr>

			<?php foreach ($result as $key => $bookArray) {
			echo "<tr>";
			echo "<td>".$bookArray['name']."</td>";
			echo "<td>".$bookArray['category']."</td>";
			echo "<td>".$bookArray['subCategory']."</td>";
			echo "<td>".$bookArray['description']."</td>";
			echo "<td>".$bookArray['price']."</td>";
			echo "</tr>";
		} ?>
		</table>

	</div>
	</div>
</div>
</body>
</html>