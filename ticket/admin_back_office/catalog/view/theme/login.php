<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="assets/boostrap_jquery/css/bootstrap.css" rel="stylesheet" >
		<link href="assets/css/sidebar.css" rel="stylesheet">
		<link href="assets/css/main.css" rel="stylesheet">
		<link href="assets/fontawesome/css/fontawesome.css" rel="stylesheet">
		<script src="assets/boostrap_jquery/js/jquery.js"></script>
		<script src="assets/boostrap_jquery/js/popper.js"></script>
		<script src="assets/boostrap_jquery/js/bootstrap.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/fontawesome/js/all.js"></script>
	</head>
	<body class="text-center">
		<div class="container">
			<div class="row">
				<div class="col">
					<form class="form-signin mt-4" style="max-width: 330px; margin:0px auto;" action="<?php echo $action;?>" method="POST">
						<label for="inputEmail" class="sr-only">Username</label>
						<input type="text" id="inputEmail" name="user" class="form-control mb-4" placeholder="Username" required autofocus>
						<label for="inputPassword" class="sr-only">Password</label>
						<input type="password" id="inputPassword" name="password" class="form-control mb-4" placeholder="Password" required>
						<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>