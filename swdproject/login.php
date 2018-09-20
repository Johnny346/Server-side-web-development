
<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="css/style.css" rel="stylesheet"/>

	<title>Login</title>
</head>
<body>

	<?php require('header.php'); ?>
	
	<br/><br/><br/>
	<div align="center">
		<div class='row'>
			<div class='col-md-4' >
			</div>
			<div class='col-md-4'>
				<img src='images\admin-login-logo3.PNG' class='img-responsive img-circle' style='width: 70%;'>
			</div>
			<div class='col-md-4'>
			</div>
		</div>
		<div class='row' >
			<div class='col-md-4'>
			</div>
			<div class='col-md-4'>
				<form action='login_action.php' method='POST' id='login_form' autocomplete="on">
					<div class='form-group'>

						<div class='col-md-12'>
							ID:<br><input type='text'  name='id'  size='20' maxlength='40' required><br>
						</div>
					</div>
					<div class='form-group'>
						<div class='col-md-12'>
							Password:<br><input type='password'  name='pass'   size='20' maxlength='40' required><br>
							<br/>
						</div>
					</div>
					<div class='form-group'>
						<div class='col-md-12'>
							<button type='submit' name='login'>Login</button>
						</div>
					</div>
				</form>
			</div>
			<div class='col-md-4'>
			</div>
		</div>
	</div><br><br>
	
	<?php require('footer.php'); ?>
</body>
</html>