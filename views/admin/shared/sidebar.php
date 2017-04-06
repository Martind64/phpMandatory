<base href="http://localhost/projects/phpMandatory/"/>
<?php require_once(__DIR__.'/../../../controllers/category/CategoryController.php'); ?>

<div class="col-lg-2">
	<ul class="nav nav-pills nav-stacked">
        <li class="active"> <a href="#productCollapse" data-toggle="collapse">Products</a> </li>
		 <ul class="navbar nav" id="productCollaps">
	        <ul class="nav collapse" id="productCollapse">
	        	<?php 
	        		$result = CategoryController::findAll();
	        		foreach ($result as $key => $categoryArray) {
	        			echo "<li><a value='".$categoryArray['id']."' href='views/admin/products/view/".$categoryArray['category'].".php'>".$categoryArray['category']."</a></li>";
	        		}
	        	 ?>
	            <hr>
	        </ul>
		<li>
			<a href="views/admin/products/selectCategory.php">Create a product</a><br>
		</li>
		<li>
			<a href="views/admin/categories/createCategory.php">Create a category</a><br>
		</li>
		<li>
			<a href="views/admin/categories/createSubCategory.php">Create a sub category</a><br>
		</li>	
		<li>
			<a href="views/index.php">Index</a><br>
		</li>
	</ul>
</div>
