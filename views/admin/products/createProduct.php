<?php session_start();
require_once('../../../controllers/subCategory/SubCategoryController.php');
?>
<!DOCTYPE html>
<?php if (isset($_SESSION['currentUser'])){
	if ($_SESSION['currentUser']['role'] != 'ROLE_ADMIN') {
		echo 'You have to be an admin to access this page';
		exit;
	}}?>
	
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
	<form action="../../../controllers/products/create.php" method="POST">
	<div class="form-group">
		<div class="col-lg-6">
			<label>name</label>
			<input class="form-control" type="text" name="name">
			<label>description</label>
			<input class="form-control" type="text" name="description">
			<input hidden name="categoryId" value='<?php echo $_POST['id']?>'>
			<label>sub category</label>
			<select class="form-control" name="subCategory">
				<?php  
					$id = $_POST['id'];
					$subCategory = new SubCategoryController();
					$categories = $subCategory->findByCategoryId($id);
					foreach ($categories as $key => $cat) {
						echo "<option>$cat</option>";
					}
				?>
			</select>
		</div>
		<div class="col-lg-6">
			<label>price</label>
			<input class="form-control" type="text" name="price">
			<label>imgPath</label>
			<input class="form-control" type="text" name="imgPath">
			<button style="margin-top: 13%;" type="submit" class="btn btn-primary">Create</button>
		</div>
	</form>
	</div>
	</div>
</div>
</body>
</html>