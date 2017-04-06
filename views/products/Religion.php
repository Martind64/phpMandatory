<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once(__DIR__.'/../../shared/bootstrap.php'); ?>
	<link rel="stylesheet" type="text/css" href="../../shared/style.css">

</head>
<body>
<?php require_once(__DIR__.'/../../controllers/products/ProductsController.php') ?>
<?php require_once(__DIR__.'/../../shared/views/navbar.php') ?>
<div class="container">
	<div class="row">

<div class="col-lg-12">
<?php $result = ProductsController::findBySubCategory('Religion'); ?>
		<table class="table">
		<tr>
			<th>Product</th>
			<th>Description</th>
			<th>Price</th>
			<th>Image</th>
		</tr>
			<?php foreach ($result as $key => $bookArray) {
			echo "<tr>";
			echo "<td>".$bookArray['name']."</td>";
			echo "<td>".$bookArray['description']."</td>";
			echo "<td>".$bookArray['price']."</td>";
			echo "<td><img src='shared/img/".$bookArray['imgPath']."' id='productImg'></td>";
			echo "</tr>";
		} ?>
		</table>

	</div>
	</div>
</div>
</body>
</html>