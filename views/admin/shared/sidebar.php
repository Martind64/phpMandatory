<div class="row">
	<div class="col-lg-2">
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="#">items</a></li>
			<li>
			<?php 
			$path = dirname(__FILE__)."\products\selectCategory.php";
			echo $path;
			echo "<a href='$path'>Create a product</a><br>" ?>
			</li>
			<li>
				<a href="../index.php">Index</a><br>
			</li>
			<li>
				<a href="categories/createSubCategory.php">Create a sub category</a><br>
			</li>
			<li>
				<a href="categories/createCategory.php">Create a category</a><br>
			</li>
		</ul>
	</div>
</div>