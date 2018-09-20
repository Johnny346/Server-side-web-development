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
	<title>News</title>
</head>

<body>
	<?php require('header.php');?>
	
	<div class="page-body">
	<div class="container-fluid">
		<!--this php script displays links for manager or staff through out the site only if they are logged in-->
		<?php require('session_manager_staff.php');?>

		<div class="jumbotron text-center" style="background-color: #00878D; color: white;">
			<h2>News from Sintoni sports club</h2>
		</div>
		<?php
		//display club-news-item table: view
			$viewAllNews = "SELECT * FROM group7.news Limit 15";
			$resultViewAllNews = mysqli_query($connection, $viewAllNews);

			$numOfRows = mysqli_num_rows($resultViewAllNews);
			echo "<br/>";
			echo "<h5>Sintoni Sports Club / Recent News</h5>";
			if ($numOfRows > 0)
			{

				echo "<section>";
				echo "<div class='container'>";

				while($numOfRows = mysqli_fetch_array($resultViewAllNews) )
				{
					echo "<hr/>";
					echo "<div class='row'>";
						echo "<div class='col-md-12 newsItem'>";
							echo "<h3><i class='fa fa-file'></i> ".$numOfRows['newsDescription']."</h3>";
							echo "<p class='text-justify'>".$numOfRows['newsText']."</p>";
							echo "<small class='news-info'> ".$numOfRows['newsDate']." </small>";
							echo "<small class='news-info'> ".$numOfRows['newsTime']." </small>";
						echo "</div>";
					echo "</div>";
				}
				echo "</div>";
				echo"</section>";
				echo "<br/>";
				mysqli_free_result ($resultViewAllNews);
			}
			else
			{
				echo "The table is empty!";
			}
		?>
		</div>
		<div class="text-center">
			<h3>Have any news for us to add?</h3>
			<p>Then Contact Us with the details <a href="contact.php#formid">here!</a></p>
		</div>
	</div>
<?php require('footer.php');?>

</body>
</html>