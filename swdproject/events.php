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

	<title>Events</title>
</head>
<body>
	<!--navbar section-->
	<?php require('header.php');?>
	<?php require('session_manager_staff.php');?>
	
	
	<?php

		
		
		

		
	echo "<div class='page-body'>";
	echo "<div class='container-fluid text-center bg-grey'>";
		echo "<div class='jumbotron text-center' style='background-color: #00878D; color: white;'>";
		echo "<h2>Events @ Sintoni Sport Club</h2>";
		echo "</div>";
		echo "<hr>";
		echo "<div class='row text-center'>";
			
			// ---------- EVENT 1 ------------
			$event1 = "SELECT * FROM group7.events WHERE eventID=1";		
			$sqldata = mysqli_query($connection, $event1);
		
			while($row = mysqli_fetch_array($sqldata)){				
				
				echo "<div class='col-sm-4'>";
					echo "<div class='thumbnail'>";
						echo "<img src='images/event.jpg' alt='Event'>";
						echo"<br><p><strong>";
						echo $row['eventTitle'];
						echo "<br>";
						echo $row['eventDescription'];
						echo "<br>";
						echo $row['eventTime'];
						echo"</strong> </p>";
						echo"<p>";
						echo $row['eventDate'];
						echo "</p>";
						echo "<a href='reg_events.php'<button class='btn btn-lg'>Register</button></a>";
					echo "</div>";
				echo "</div>";
			}	

			// ---------- EVENT 2 ------------
			$event2 = "SELECT * FROM group7.events WHERE eventID=2";		
			$sqldata2 = mysqli_query($connection, $event2);
		
			while($row2 = mysqli_fetch_array($sqldata2)){
		
				echo"<div class='col-sm-4'>";
					echo"<div class='thumbnail'>";
						echo"<img src='images/cardio.jpg' alt='Event2'>";
						echo"<br><p><strong>";
						echo $row2['eventTitle'];
						echo "<br>";
						echo $row2['eventDescription'];
						echo "<br>";
						echo $row2['eventTime'];
						echo"</strong> </p>";
						echo"<p>";
						echo $row2['eventDate'];
						echo "</p>";
						echo "<a href='reg_events.php'<button class='btn btn-lg'>Register</button></a>";
								
					echo "</div>";
				echo "</div>";
			}

			// ---------- EVENT 3 ------------
			$event3 = "SELECT * FROM group7.events WHERE eventID=3";		
			$sqldata3 = mysqli_query($connection, $event3);
		
			while($row3 = mysqli_fetch_array($sqldata3)){
		
				echo"<div class='col-sm-4'>";
					echo"<div class='thumbnail'>";
						echo"<img src='images/weekend.jpg' alt='Event3'>";
						echo"<br><p><strong>";
						echo $row3['eventTitle'];
						echo "<br>";
						echo $row3['eventDescription'];
						echo "<br>";
						echo $row3['eventTime'];
						echo"</strong> </p>";
						echo"<p>";
						echo $row3['eventDate'];
						echo "</p>";
						echo "<a href='reg_events.php'<button class='btn btn-lg'>Register</button></a>";
					echo "</div>";
				echo "</div>";
			}
			
		echo "</div>";
		
		// -------- FILLER EVENTS ------------
		
			echo " <br>";
			echo " <h2> Coming up ... </h2>";
			echo "<hr>";
			echo "<div class='row text-center'>";
				echo "<div class='col-sm-4'>";
					echo "<div class='thumbnail'>";
						echo "<img src='images/soccer.jpg' alt='Upcoming event1'>";
						echo"<p><strong>Soccer Tournament</strong></p>";
						
							echo "<button class='btn btn-lg'>Not available yet</button>";
								
						
					echo "</div>";
				echo "</div>";
				
				echo"<div class='col-sm-4'>";
					echo"<div class='thumbnail'>";
						echo"<img src='images/tennis.jpg' alt='Upcoming Event2'>";
						echo "<p><strong>Individual Tennis Lessons</strong></p>";
						echo "<button class='btn btn-lg'>Not available yet</button>";
					echo "</div>";
				echo "</div>";
				
				echo"<div class='col-sm-4'>";
					echo"<div class='thumbnail'>";
						echo"<img src='images/rowing.jpg' alt='Upcoming Event3'>";
						echo "<p><strong>Rowing Class</strong></p>";
						echo "<button class='btn btn-lg'>Not available yet</button>";
					echo "</div>";
				echo "</div>";
	
			echo "</div>";
		echo "</div>";
		echo "</div>";
		

		mysqli_close($connection);

		?>
	
	<!--footer section-->
	<?php require('footer.php');?>
</body>
</html>