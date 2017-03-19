<?php session_start() ?>

<?php if (!isset($_SESSION['currentUser']) || !$_SESSION['currentUser']['role'] == 'ROLE_ADMIN') {
	echo 'You need to be an admin to access this page';
}else{ ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<?php require_once('../shared/bootstrap.php'); ?>
</head>
<body>

<div class="row">
	<div class="col-lg-2">
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="#">items</a></li>
		</ul>
	</div>

</div>



</body>
</html>
<?php } ?>