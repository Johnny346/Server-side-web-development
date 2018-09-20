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

	<title>Event registration</title>
</head>
<body>
<!--this php script displays links for manager or staff through out the site only if they are logged in-->
		<?php require('session_manager_staff.php');?>
<?php require('header.php');?>
<div class="container-fluid">
<div class="container text-center"> 
<br>
 <div class="row">
	<div class="col-sm-6 col-xs-12">
		<div class="panel panel-default text-center">
			<div class="panel-heading">
				<h3> Not a member? </h3>
			
			</div>
			<div class="panel-body">
	<form action="eventsRegistration.php" method="POST">
				
					<label> Name </label> <br>
					<input type="text" name ="name" size="50" placeholder="Name" required> <br>
				
				
					<label> Email </label> <br>
					<input type="email" name ="email"  size="50" placeholder="Email" required> <br>
				
				
					<label> Phone </label> <br>
					<input type="text" name ="phone" size="50"placeholder="Phone number"required> <br>
				
			</div>
			<div class="panel-footer">
				<label> Choose an event </label> <br>
					<select name="event" > <br>
						<option value="1" >awesome event that you should come to </option>
						<option value="2"> evening class cardio focus  </option>
						<option value="3"> weekend work out  </option>
					</select> 
				<br> <br>

					<button class="btn btn-lg" type = "submit" name="submit">Register</button>
			</div>
		</div>
		
	</form>
	</div>


	<div class="col-sm-6 col-xs-12">
		<div class="panel panel-default text-center">
			<div class="panel-heading">
				<h3> Already a member? </h3>
			</div>
			<div class="panel-body">
			<form action="membersEventsRegistration.php" method="post">
				<label> Membership Number </label> <br>
					<input type="text" name ="membershipNumber" size="30" placeholder="exampe: 1" required> <br>
			
			</div>
			<div class="panel-footer">
				<label> Number of Attendees </label> <br>
					<select name="numOfAttendees" > <br>
						<option value="1" selected="selected">1 </option>
						<option value="2"> 2  </option>
						<option value="3"> 3  </option>
						<option value="4"> 4  </option>
					</select>  <br>
				<label> Choose an event </label> <br>
					<select name="event2" > <br>
						<option value="1" >awesome event that you should come to </option>
						<option value="2"> evening class cardio focus  </option>
						<option value="3"> weekend work out  </option>
					</select> 
				<br> <br>

					<button class="btn btn-lg" type = "submit" name="memsubmit"> Register </button>
			</div>
		</form>
		</div>
	</div>

</div>
</div>
	

	
	 	
		


  </div>
</div>
<!--footer section-->
<?php require('footer.php');?>
</body>

</html>