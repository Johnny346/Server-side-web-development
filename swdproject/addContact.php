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

					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="comment_form">
						<div class="form-group">
							<label  class="col-md-1 control-label">Name</label>
							<div class="col-md-11">
								<input type="text"  name="name"  size="20" value="<?php if(isset($_POST['name']))?>"maxlength="40" 	required><br>
							</div>
						</div>
						<div class="form-group">
							<label  class="col-md-1 control-label">Email</label>
							<div class="col-md-11">
								<input type="email"  	name="email"   size="20" value="<?php if(isset($_POST['email']))?>"maxlength="40" 	required><br>
							</div>
						</div>
						<div class="form-group">
							<label  class="col-md-1 control-label">Phone</label>
							<div class="col-md-11">
								<input type="text"  	name="phone"  size="20" value="<?php if(isset($_POST['phone']))?>"maxlength="30"	required><br>
							</div>
						</div>
						<div class="form-group">
							<label  class="col-md-1 control-label">Subject</label>
							<div class="col-md-11">
								<input type="text"  	name="subject"  size="20" value="<?php if(isset($_POST['subject']))?>"maxlength="40" 	required><br>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<textarea cols="50" rows="5"  name="message" value="<?php if(isset($_POST['message']))?>" 	required></textarea>
							</div>
						</div>
						<br><button type="submit" name="send">Send</button>

					</form>

					<?php
					if($_SERVER['REQUEST_METHOD'] == 'POST'){

						$errors = array();

						if(empty($_POST['name'])){
							$errors[]='Enter your name';
						}else {
							$user_name = mysqli_real_escape_string($connection, trim($_POST['name']));
						}

						if(empty($_POST['email'])){
							$errors[]='Enter your email address';
						}else {
							$user_email = mysqli_real_escape_string($connection, trim($_POST['email']));
						}
						if(empty($_POST['phone'])){
							$errors[]='Enter your phone number';
						}else {
							$user_phone = mysqli_real_escape_string($connection, trim($_POST['phone']));
						}
						if(empty($_POST['subject'])){
							$errors[]='Enter your subject';
						}else {
							$user_subject = mysqli_real_escape_string($connection, trim($_POST['subject']));
						}
						if(empty($_POST['message'])){
							$errors[]='Enter your message';
						}else {
							$user_message = mysqli_real_escape_string($connection, trim($_POST['message']));
						}

						if(empty($errors)){
							$addContact = 	"INSERT INTO group7.contact (contactName, contactEmail, contactPhone, contactSubject, contactMessage, comment_status)
										VALUES ('$user_name', '$user_email', '$user_phone', '$user_subject', '$user_message', 0)";

							$resultAddContact = mysqli_query($connection, $addContact);
							if(!$resultAddContact) {
								echo "Failed to add message <br><br>";
							 }else {
							 	//send notification to managers dashboard
							 	echo "<h3>Your message has been sent, we will get back to you as soon as possible. Thank you.</h3>";

							 }

						}else{
								echo'<h1>Message send Error!</h1>
									<p id="err_msg">The following error(s) occured:<br>
									';
									foreach($errors as $msg){
										echo"- $msg<br>";
									}
									echo 'Please try again</p>';
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