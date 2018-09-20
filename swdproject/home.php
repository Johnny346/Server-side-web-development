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

	<title>Home</title>

	 <style>

    	.row .glyphicon {
    	font-size: 200px;
		}
  	</style>
</head>
<body>

	<!--navbar section-->
	<?php require('header.php');?>
	<!--this php script displays links for manager or staff through out the site only if they are logged in-->
	<?php require('session_manager_staff.php');?>


		<!-- Slideshow  -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="images/img1.jpg" alt="Ladies chatting">
			</div>

			<div class="item">
				<img src="images/img2.jpg" alt="Gym Classes">
			</div>

			<div class="item">
				<img src="images/img3.jpg" alt="Lady">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>


	<!-- Page body -->


		<div class="jumbotron text-center" style="background-color: #1d282ae6; color: white;">
			<h2> Welcome to Sintoni Sports </h2>
			<p> The Best Sport club </p>
		</div>

		<div class="row">

		<div class="container-fluid  text-center">

			<div class="col-sm-6 col-xs-12">
			<h2> Join Us Today! </h2>
				<a href="memberships.php"><img src="images/joinus.jpg" class="img-rounded" height="240" width="360" alt="Join Us"></a>
			</div>
			<div class="col-sm-6 col-xs-12">
				<h3> Learn more about our prices... </h3>

				<a href="memberships.php"><span class="glyphicon glyphicon glyphicon-euro logo"></span></a>
			</div>
			</div><br>

		</div>

		<hr>

		<div class="row">

		<div class="container-fluid text-center">

			<div class="col-sm-6 col-xs-12">
				<h3> Learn more about our Events </h3>

				 <a href="events.php"><span class="glyphicon glyphicon-calendar logo"></span></a>
			</div>
			<div class="col-sm-6 col-xs-12">
				<h2> Beautiful Events Every Day </h2>
				<a href="events.php"><img src="images/event.jpg" class="img-rounded" height="240" width="360" alt="Events"></a> <br>
			</div><br>
			</div> <br>
		</div>

		<hr>

		<div class="row">

		<div class="container-fluid text-center">

			<div class="col-sm-6 col-xs-12">
			<h2> Stay up to date</h2>
				 <a href="news.php"><img src="images/news.jpeg" class="img-rounded" height="240" width="360" alt="News"></a>
			</div>
			<div class="col-sm-6 col-xs-12">
				<h3> Check our latest news... </h3>
				<a href="news.php"><span class="glyphicon glyphicon-list-alt logo"></span></a>
			</div>
			</div><br>

		</div>

		<hr>

		<div class="row">

		<div class="container-fluid text-center">

			<div class="col-sm-6 col-xs-12">
			<h2> See more... </h2>
				<a href="services.php"><span class="glyphicon glyphicon-glass logo"></span></a>
			</div>
			<div class="col-sm-6 col-xs-12">
				<h3> Our Services </h3>
				 <a href="services.php"><img src="images/coffee.jpeg" class="img-rounded" height="240" width="360" alt="Services"></a> <br>
			</div>
			</div><br>

		</div>


<!--footer section-->
<?php require('footer.php');?>
</body>
</html>