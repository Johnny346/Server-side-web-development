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
	<title>Services</title>
</head>
<body>
	<?php require('header.php');?>
	
	<div class="page-body">
	<div class="container-fluid">
		<!--this php script displays links for manager or staff through out the site only if they are logged in-->
		<?php require('session_manager_staff.php');?>

		<div class="jumbotron text-center" style="background-color: #00878D; color: white;">
			<h2>Facilities at Sintoni sports club</h2>
		</div>
		<div class="container-fluid">
			<img src="https://www.queenslandunions.org/wp-content/uploads/2017/09/r0_59_1158_713_w1200_h678_fmax.jpg" class="img-responsive">
		</div>
		<hr/>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<h3>Tennis court</h3>
					<p>Sintoni has four competition standard tennis courts.The floodlit courts have an all-weather Tiger Turf surface, making them suitable for play all year round. Bookings can by made by members at Reception, and you can bring guests.</p>
					<ul>
						<li> Regular social tennis evenings, with coaching</li>
						<li>Internal leagues and competitions</li>
						<li>FREE court hire when playing with other tennis club members</li>
						<li>Discounts on pay as you go court hire if you play with another Sintoni member (not a Tennis club member) or guest (€5/€10)</li>
					</ul>
				</div>
				<div class="col-md-4">
				<br><br>
					<img src="http://www.bishopstownlawntennisclub.com/images/tenniscourts.jpg" class="img-responsive">
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-md-8">
					<h3>Event Hall</h3>
					<p>This multipurpose area is the larger of our function rooms. It has a full bar along with full catering facilities which allow for onsite preparation and cooking or simply preparation and serving. The room is 154 square meters and can seat between 100 – 120 for a meal. Equally the room is suitable to have less people seated and allow for an dance or presentation area. With our ceiling awning and our warm colour scheme the room is suitable for all events.
					</p>
				</div>
				<div class="col-md-4">
				<br><br>
					<img src="http://www.terenuresportsclub.ie/wp-content/uploads/2014/07/functions.jpg" class ="img-responsive">
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-md-8">
					<h3>Soccer Pitch</h3>
					<p>Sintoni soccer centre has 4 x 5-a-side all weather soccer pitches, with Profoot MXS Club surface. There are separate changing facilities with lockers for users of the soccer centre. A perfect venue for sports groups, corporate bookings or just a get-together with friends.</p>
				</div>
				<div class="col-md-4">
				<br><br>
					<img src="http://theliberal.ie/wp-content/uploads/2018/04/wp-1524760871166.jpg" class="img-responsive">
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-md-8">
					<h3>Table Tennis</h3>
					<p>Sports Hall is a multi-purpose area lined for basketball & badminton or table tennis. There is also an overhead viewing balcony. We have hosted some great fitness events here over the years such as Sintonis Super Saturday, Zumba Mashup, and “Cork’s Fittest Workplace” Challenge. It is also the venue for our Monday Bootcamp class on the fitness timetable.</p>
				</div>
				<div class="col-md-4">
				<br><br>
					<img src="http://www.gsc.in/gsc_picture/T.T.jpg" class="img-responsive">
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-md-8">
					<h3>Gym</h3>
					<p>In our gym we offer a very personalised service for fitness programmes – you meet with a member of the gym team, they discuss your medical history, goals, time you can allocate to exercise etc. From this they put together a personal programme in line with these goals, and recommend you review every 4-6 weeks. This service is FREE as part of your gym package.</p>
					<ul>
						<li>Life Fitness treadmills</li>
						<li>Concept 2 rowers</li>
						<li>Technogym bikes (upright and recumbant)</li>
						<li>Arc trainers</li>
					</ul>
					<p>... and much more!</p>
				</div>
				<div class="col-md-4">
				<br><br>
					<img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Spacious_Gym_Floor.JPG" class="img-responsive">
				</div>
			</div>
			<hr/>
		</div>
		</div>
		<br/><br/>
	</div>
	<?php require('footer.php');?>
</body>
</html>