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
<?php $result = ProductsController::findBySubCategory('Action'); ?>
		<table class="table">
		<tr>
			<th>Product</th>
			<th>Description</th>
			<th>Price</th>
			<th>Image</th>
			<th>Buy</th>
		</tr>
			<?php foreach ($result as $key => $array) {
			echo "<tr>";
			echo "<td>".$array['name']."</td>";
			echo "<td>".$array['description']."</td>";
			echo "<td>".$array['price']."</td>";
			echo "<td><img src='shared/img/".$array['imgPath']."' id='productImg'></td>";
			echo "<form action='views/cart.php' method='POST'>
			<td><button class='btn btn-primary' value='".$array['id']."' name='buyItem'>Buy</button></td>
				</form>";
			echo "</tr>";
		} ?>
		</table>

	</div>
	</div>
</div>


</script>
</body>
</html>