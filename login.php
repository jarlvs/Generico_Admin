<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="img/logo1.png" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/datepicker3.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Admin | Login</div>
				<div class="panel-body">
					<form method="post" action="login.php">
						<?php include('errors.php'); ?>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
						</div>
						<div>
							<button type="submit" class="btn btn-primary" name="login_user">Login</button>
						</div>
						
					</form>
				</div>
			</div>
		</div><!-- /.col-->	
</body>
</html>