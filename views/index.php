<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<?php require_once('../shared/bootstrap.php'); ?>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	  
	          <?php if (!isset($_SESSION['currentUser'])) {
				echo <<<FORM
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
						<ul class="dropdown-menu">
					            <li>
					    	      <form action="../controllers/login/login.php" class="navbar-form" method="POST">
							        <div class="form-group">
							      	<a class="pull-right" href="register.php">register</a>
							        	<span class="label label-default">Email</span>
							       		<input type="text" class="form-control" placeholder="Email" name="email">
							        	<span class="label label-default">Password</span>
							          <input type="text" class="form-control" name="password" placeholder="Password">
							        </div>
							        <button type="submit" class="btn btn-default">Login</button>
							      </form>
					            </li>
					          </ul>
FORM;
			 }
			 else if($_SESSION['currentUser'])
			 {
			 		$email = $_SESSION['currentUser']['email'];
			 		echo "<li>$email</li>";
			 }
			  ?>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	</div>
</div>

<?php if (isset($_SESSION['login-message'])) {
	echo $_SESSION['login-message'];
} ?>

<form action="../controllers/login/logout.php" method="post">
	<button class="btn btn-default" type="submit">Log Out</button>
</form>


</body>
</html>