<?php session_start();
require_once(__DIR__."/../controllers/products/ProductsController.php");
$productsController = new ProductsController();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<?php require_once('../shared/bootstrap.php'); ?>
	<link rel="stylesheet" type="text/css" href="../shared/style.css">
</head>
<body>
<?php require_once(__DIR__."/../shared/views/navbar.php") ?>

<div class="container-fluid">
	<div class="col-lg-10 col-lg-push-1">
	<table class="table table-hover">
		<tr>
			<th>Name</th>
			<th>description</th>
			<th>price</th>
			<th>Img</th>
		</tr>
		<?php 
			$products = $productsController->findAll();
			foreach ($products as $key => $productArray) {
				$productName = $productArray['name'];
				$description = $productArray['description'];
				$price = $productArray['price'];
				$path = $productArray['imgPath'];
				echo  <<<TABLE
					<tr>
						<td>$productName</td>
						 <td>$description</td>
						 <td>$price DKK</td>
						 <td><img src="../shared/img/$path" id="productImg"></td>
					</tr>
TABLE;
			}
	 ?>
</table>
	</div>

</div>


</body>
</html>