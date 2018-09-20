<!DOCTYPE=html>
<html lang="en">

<html>

<head>
	<title> viewLastMonth </title>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../../css/bootstrap.min.css" rel="stylesheet"/> 
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
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap">
	<link href="../../css/style.css" rel="stylesheet"/> 
	
</head>

<body>
	<?php
		require '../../../group7Connection/connection.php';
		require '../../headerManager.php';
		require '../../session_manager_staff.php';

		$startDate = mysqli_real_escape_string($connection,trim($_POST['startDate']));
		$endDate = mysqli_real_escape_string($connection,trim($_POST['endDate']));

		$selectFees = "SELECT membershipFeesPaid FROM group7.memberships WHERE membershipStart >= '$startDate' AND membershipEnd <= '$endDate'";
		$resultSelectFees = mysqli_query($connection, $selectFees);
	?>
	
	<div align=center style="padding: 200px">
		<?php
			$numOfRows = mysqli_num_rows($resultSelectFees);

			$totalFeesEarned = 0;

			if ($numOfRows > 0)
			{
				echo "Total number of payments: ".$numOfRows."<br>";

				while($numOfRows = mysqli_fetch_array($resultSelectFees) )
				{
					$totalFeesEarned = $totalFeesEarned + $numOfRows['membershipFeesPaid'];
				}

				mysqli_free_result ($resultSelectFees);
			}

			echo "Period Selected: ".$startDate." to ".$endDate.".<br>";
			echo "Total fees paid in period: €".$totalFeesEarned;

			echo   "<form action='/swdproject/manager.php'>
				<button type='submit'>Return</button><br>
			</form>";
				
			mysqli_close($connection);
		?>
	</div>
	
	<?php require '../../footerManager.php';?>
</body>

</html>