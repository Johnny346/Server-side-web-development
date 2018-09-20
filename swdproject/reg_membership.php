<?php
	require ('../group7Connection/connection.php');
?>
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
		<link rel="stylesheet" type="text/css" href="css/bootstrap">
		<link href="css/style.css" rel="stylesheet"/>

		<title>Membership Registration</title>
	</head>
<body>
<!--this php script displays links for manager or staff through out the site only if they are logged in-->
	<?php require('session_manager_staff.php');?>
	<?php require('header.php');?>

<div class="container-fluid">
<div class="container text-center"> 
<br>
 <div class="row">
	<div class="col-sm-12 col-xs-12">
		<div class="panel panel-default text-center">
			<div class="panel-heading">
				<h3> Register membership </h3>			
			</div>
			<div class="panel-body">

				<form action="membersRegistration.php" method="POST">
				
					<label> Name </label> <br>
					<input type="text" name ="name" size="50" placeholder="Name" required> <br>
				
					<label> Address </label> <br>
					<input type="text" name ="address" size="50" placeholder="Address" required> <br>
				
					<label> Phone </label> <br>
					<input type="text" name ="phone" size="50"placeholder="Phone number"required> <br>
				
			</div>
				<div class="panel-footer">
					<label> Choose a membership type </label> <br>
						<select name="type" > <br>
							<option value="Monthly" > Monthly </option>
							<option value="Annual"> Annual  </option>
						</select> 
					<br> <br>

						<button class="btn btn-lg" type = "submit" name="submit">Register</button>
				</div>
			</div>
		
				</form>
	

		</div>
	</div>
</div>
</div>


<!--footer section-->
<?php require('footer.php');?>
</body>

</html>