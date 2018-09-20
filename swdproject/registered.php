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

	<title>Registered!</title>
</head>
<body>
	<?php require('header.php');?>
	
	<div class="page-body">
	 	<!--this php script displays links for manager or staff through out the site only if they are logged in-->
		<?php require('session_manager_staff.php');?>
		
<!-- Container (Pricing Section) -->
	
<div class="container-fluid">
  <div class="text-center">
    
		<div class="jumbotron text-center" style="background-color: #00878D; color: white;">
			<h1> Registered! </h1>
		</div>
		
		<h2> We'll see you soon! </h2> <br>
		
		<a href="home.php"><img src="images/LOGOORANGE.png" alt="logo"></a> <br>
		<a href="reg_events.php"><button class='btn btn-lg'> Back to Events </button> </a> <br> <br>
	</div>
</div>
</div>
<!--footer section-->
<?php require('footer.php');?>
</body>

</html>