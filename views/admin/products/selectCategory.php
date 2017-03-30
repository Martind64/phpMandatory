<?php session_start();
require_once('../../../controllers/category/CategoryController.php');
?>
<!DOCTYPE html>
<?php if (isset($_SESSION['currentUser'])){
	if ($_SESSION['currentUser']['role'] != 'ROLE_ADMIN') {
		echo 'You have to be an admin to access this page';
	}else
	{?>
	
<html>
<head>
	<title>Create Product</title>
	<?php require_once('../../../shared/bootstrap.php'); ?>
</head>
<body>

<div class="container">
<div class="row">
	<div class="col-lg-5">
	Register page!
	<a href="../dashboard.php">go back</a>
	<form action="createProduct.php" method="POST">
	<div class="form-group">
		<div class="col-lg-12">
			<?php  
				$category = new CategoryController();
				$categories = $category->getAll();
				foreach ($categories as $name => $id) {
					echo "<button class='btn btn-primary' name='id' value='$id'>$name</button>";
				}
			?>
			<button style="margin-top: 13%;" type="submit" class="btn btn-primary">Create</button>
		</div>
	</form>
	</div>
	</div>
</div>
</body>
<?php }} // Finishes authorization?>

</html>


<?php 
$htmlCategories = <<<CATEGORIES
<button class="btn btn-primary">$name</button>
CATEGORIES;

 ?>