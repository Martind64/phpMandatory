<?php 
require_once(__DIR__.'\..\..\controllers\products\ProductsController.php');
require_once(__DIR__.'\..\..\controllers\category\CategoryController.php');
require_once(__DIR__.'\..\..\controllers\subCategory\SubCategoryController.php');
$categories = CategoryController::findAll();
$subCategory = new SubCategoryController();
 ?>
<base href="http://localhost/projects/phpMandatory/"/>

<div class="container">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	  <ul class="nav navbar-nav">
	   <a class="navbar-brand" href="views/index.php">Webshop</a>

	  	<?php foreach ($categories as $key => $category) {
	  		echo "<li class='dropdown'>";
	  		echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>".$category['category']."<span class='caret'></a></span>";
	  		echo "<ul class='dropdown-menu'>";
	  		$subcat = $subCategory->findBelongsToParent($category['category']);
	  		foreach ($subcat as $key => $array) {
	  			echo "<li><a href='views/products/".$array['subCategory'].".php'>".$array['subCategory']."</a></li>";
	  		}
	  		echo "</ul>";
	  		echo "</li>";
	  	} ?>
	  </ul>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <?php if (!isset($_SESSION['currentUser'])) {
	          	// end php goes here
	          	?>
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
				<ul class="dropdown-menu">
			            <li>
			    	      <form action="controllers\login\login.php" class="navbar-form" method="POST">
					        <div class="form-group">
					      	<a class="pull-right" href="views/register.php">register</a>
					        	<span class="label label-default">Email</span>
					       		<input type="text" class="form-control" placeholder="Email" name="email">
					        	<span class="label label-default">Password</span>
					          <input type="password" class="form-control" name="password" placeholder="Password">
					        </div>
					        <button type="submit" class="btn btn-default">Login</button>
					      </form>
			            </li>
			          </ul>
<?php 
			 }
			 else if($_SESSION['currentUser'])
			 {
			 		$email = $_SESSION['currentUser']['email'];
			 		echo "<li>$email</li><br>";
					echo "<a href='controllers/login/logout.php'>logout</a>";
			 }
			  ?>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	</div>
</div>
