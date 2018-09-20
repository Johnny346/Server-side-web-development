
	<!--footer section-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<p>Sports club</p>
					<ul class="">
						<li><a href="../../home.php">Home</a></li>
						<li><a href="../../memberships.php">Membership</a></li>
						<li><a href="../../events.php">Events</a></li>
						<li><a href="../../news.php">News</a></li>
						<li><a href="../../services.php">Services</a></li>
						<li><a href="../../contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<p>Recent news</p>
					<?php
						require('../../../group7Connection/connection.php');
						//club-news-item table: view
							$viewAllNews = "SELECT * FROM group7.news ORDER BY newsID DESC LIMIT 4";
							$resultViewAllNews = mysqli_query($connection, $viewAllNews);

						//Reference code to echo a table with php from my last assignment
							$numOfRows = mysqli_num_rows($resultViewAllNews);

							if ($numOfRows > 0)
							{
								while($numOfRows = mysqli_fetch_array($resultViewAllNews) )
								{
									$shortText = substr($numOfRows['newsDescription'],0,100);
									echo "<h5>".$shortText."<br/> ".$numOfRows['newsDate']."</h5>";

								}
								mysqli_free_result ($resultViewAllNews);
							}
							else
							{
								echo "The table is empty!";
							}

						?>
				</div>
				<div class="col-md-3">
					<p>Recent events</p>
						<?php

							//events table: view
							$viewAllEvents = "SELECT * FROM group7.events ORDER BY eventID DESC LIMIT 4";
							$resultViewAllEvents = mysqli_query($connection, $viewAllEvents);

								$numOfRows = mysqli_num_rows($resultViewAllEvents);

								if ($numOfRows > 0)
								{
									while($numOfRows = mysqli_fetch_array($resultViewAllEvents) )
									{

											echo "<h5>".$numOfRows['eventTitle']." @ ".$numOfRows['eventDate']."</h5>";


									}


									mysqli_free_result ($resultViewAllEvents);
								}
								else
								{
									echo "The table is empty!";
								}

								mysqli_close($connection);

							?>
				</div>
				<div class="col-md-3">
					<p>Find us on social media</p>
					<i class="fa fa-facebook-official text-white  hover-text-blue fa-3x"></i>
					<i class="fa fa-instagram text-white  hover-text-purple fa-3x"></i>
					<i class="fa fa-twitter text-white  hover-text-blue fa-3x"></i>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<br/>
				<p id="footer-note">Developed by J.J.T &copy 2018 <i class="fa fa-facebook-official text-white  hover-text-blue"></i></p>
			</div>
			<div class="col-sm-6">

			</div>
		</div>
	</footer>