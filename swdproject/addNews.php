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

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap">
	<link href="css/style.css" rel="stylesheet"/>

	<title>Contact</title>

</head>
<body>
	<?php require('header.php');?>
	<header>
		<br><br><br><br>
		<div class="page-body">
			<!--this php script displays links for manager or staff through out the site only if they are logged in-->
			<?php require('session_manager_staff.php');?>

			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div id="googleMap" style="height:400px;width:100%; margin-top:1.6em;"></div>
								<!-- Add Google Maps -->
						<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5onI0vArEDMwlT0prcJjV7_toBg26dZI&callback=initMap"
							type="text/javascript"></script>
					<script>
						//google map code
							var myCenter = new google.maps.LatLng(51.8969, -8.4863);
							var marker;

							function initialize() {
							var mapProp = {
								center:myCenter,
								zoom:14,
								scrollwheel:true,
								draggable:true,
								mapTypeId:google.maps.MapTypeId.ROADMAP
							};

							var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

							marker = new google.maps.Marker({
								map: map,
								title: 'Currently living here',
								draggable: false,
								animation: google.maps.Animation.DROP,
								position: {lat: 51.8969, lng: -8.48637}

							});

							marker.addListener('click', toggleBounce);


								marker.setMap(map);
								pinLocation.setMap(map);
								newpinLocation.setMap(map);
								newpinLocation2.setMap(map);
							}

							function toggleBounce() {
								if (marker.getAnimation() !== null) {
								marker.setAnimation(null);
								} else {
								marker.setAnimation(google.maps.Animation.BOUNCE);
								}
							}

							google.maps.event.addDomListener(window, 'load', initialize);
						</script>
					</div>
					<div class="col-md-4">
						<br/>
						<img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Spacious_Gym_Floor.JPG" class="img-rounded img-responsive" alt="Training room">
							<br/>
							<h3>Club Contact details</h3>
							<?php
								//clubContactInfo table: view
								$viewClubContact = "SELECT * FROM group7.clubContactInfo";
								$resultViewClubContact = mysqli_query($connection, $viewClubContact);

								$numOfRows = mysqli_num_rows($resultViewClubContact);

								if ($numOfRows > 0)
								{

									echo "<div class='club-info'>";
									while($numOfRows = mysqli_fetch_array($resultViewClubContact) )
									{

											echo "<p> Phone ".$numOfRows['clubPhoneNumber']."</p>";
											echo "<p> Address ".$numOfRows['clubAddress']."</p>";
											echo "<p> Club Email ".$numOfRows['clubEmailAddress']."</p>";
											echo "<p> Opening Times: ".$numOfRows['clubOpeningTimes']."</p>";
									}
									echo "</div>";
									mysqli_free_result ($resultViewClubContact);
								}
								else
								{
									echo "The table is empty!";
								}
							?>
					</div>
				</div>
			</div>
		</header>
		<div class="container" id="formid">
			<div class="row">
				<div class="col-md-8">
					<h2>Have a question or just want to get in touch?</h2>
					<h3> <br> Send a message </h3>
					   <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='POST' >

							Enter the date:			<input type='date'  	name='newsDate' 		required><br>
							Enter the time:			<input type='text'  	name='newsTime'			required><br>
							Enter news headline:			<input type='text'  	name='newsDescription'			required><br>
							Enter the description:<br><textarea cols='50' 	rows='5'  name='newsText' 	required></textarea><br>

							<button type='submit' name='addNewsItem'>Add</button><br>
						</form>
<?php

$newsDate ="";
$newsTime ="";
$newsDescription ="";
$newsText ="";
					if($_SERVER['REQUEST_METHOD'] == 'POST'){
						$newsDate = $_POST['newsDate'];
						$newsTime = $_POST['newsTime'];
						$newsDescription = $_POST['newsDescription'];
						$newsText = $_POST['newsText'];


							$addNews = 	"INSERT INTO group7.news (newsDate, newsTime, newsDescription, newsText)
					VALUES ('$newsDate', '$newsTime', '$newsDescription','$newsText')";
							$resultAddContact = mysqli_query($connection, $addNews);
							if(!$resultAddContact) {
								echo "Failed to add message <br><br>";
							 }else {
							 	//send notification to managers dashboard
							 	echo "<h3> Thank you.</h3>";

							 }



					}




	?>

					<br/>
				</div>
				<div class="col-md-4">
					<p>Find us on social media</p>
					<i class="fa fa-facebook-official text-white  hover-text-blue fa-3x"></i>
					<i class="fa fa-instagram text-white  hover-text-purple fa-3x"></i>
					<i class="fa fa-twitter text-white  hover-text-blue fa-3x"></i>
					<br/>
					<br/>
					<img src="https://www.claytonhotelgalway.ie/wp-content/uploads/galway-hotels-with-gym.jpg" class="img-rounded img-responsive" height="200px" alt="Training room 2">
					<br/>
				</div>
			</div>
		</div>
	</div>
	<?php require('footer.php');?>
</body>
</html>