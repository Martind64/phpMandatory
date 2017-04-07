<?php session_start();?>
<?php require_once(__DIR__.'/../controllers/products/productsController.php') ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Shopping cart</title>
	<?php require_once(__DIR__.'/../shared/bootstrap.php'); ?>
 </head>
 <body>
<?php 
require_once(__DIR__."/../shared/views/navbar.php") ?>
<?php 
if (!isset($_SESSION['shoppingCart'])) {
	$_SESSION['shoppingCart'] = [];
}

	if (isset($_POST['buyItem'])) {
		$result = ProductsController::findById($_POST['buyItem']);

		if (isset($_SESSION['shoppingCart'])) {
			array_push($_SESSION['shoppingCart'], ['name' => $result['name'], 'description' => $result['description'], 
				'price' => $result['price']]);
		}else{
			$_SESSION['shoppingCart'] =  [];
			array_push($_SESSION['shoppingCart'], ['name' => $result['name'], 'description' => $result['description'], 
				'price' => $result['price']]);
		}
	}
 ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<table class="table">
				<tr>
					<th>Product</th>
					<th>Description</th>
					<th>Price</th>
				</tr>
					<?php foreach ($_SESSION['shoppingCart'] as $key => $value) {
					echo "<tr>";
					echo "<td>".$value['name']."</td>";
					echo "<td>".$value['description']."</td>";
					echo "<td>".$value['price']."</td>";
					echo "</tr>";
				} ?>
			</table>
			<div>
				<?php 
					$total = 0;
				foreach ($_SESSION['shoppingCart'] as $key => $value) {
					$total += $value['price'];
				} ?>
				<label class="pull-right">total</label><br>
			</div>
		</div>
	</div>
		<p class="pull-right"><?php echo $total."DKK"; ?></p>
</div>


 </body>
 </html>