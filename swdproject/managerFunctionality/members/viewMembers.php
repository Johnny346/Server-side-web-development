<!DOCTYPE=html>
<html lang="en">

<html>

<head>
	<title> viewMembers </title>
	
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

		$viewAllMembers = "SELECT * FROM group7.memberships";
		$resultViewAllMembers = mysqli_query($connection, $viewAllMembers);
	?>
			
	<div align=center style="padding: 200px">
		<?php	
			$numOfRows = mysqli_num_rows($resultViewAllMembers);

			if ($numOfRows > 0)
			{
				echo "Total number of memberships: ".$numOfRows."<br>";

				echo "<table border='1' cellspacing='0' cellpadding='10'>\n";

				echo "<tr>\n";
						echo "<td>memberID</td>";
						echo "<td>memberPhone</td>";
						echo "<td>memberName</td>";
						echo "<td>memberAddress</td>";
						echo "<td>membershipName</td>";
						echo "<td>membershipFeesPaid</td>";
						echo "<td>membershipStart</td>";
						echo "<td>membershipEnd</td>";
					echo "</tr>";

				while($numOfRows = mysqli_fetch_array($resultViewAllMembers) )
				{
					echo "<tr>\n";
						echo "<td>".$numOfRows['memberID']."</td>";
						echo "<td>".$numOfRows['memberPhone']."</td>";
						echo "<td>".$numOfRows['memberName']."</td>";
						echo "<td>".$numOfRows['memberAddress']."</td>";
						echo "<td>".$numOfRows['membershipName']."</td>";
						echo "<td>".$numOfRows['membershipFeesPaid']."</td>";
						echo "<td>".$numOfRows['membershipStart']."</td>";
						echo "<td>".$numOfRows['membershipEnd']."</td>";
					echo "</tr>";
				}
				echo "</table>";

				mysqli_free_result ($resultViewAllMembers);
			}
			else
			{
				echo "The table is empty!";
			}
			
			echo   "<form action='/swdproject/manager.php'>
						<button type='submit'>Return</button><br>
					</form>";
				
			mysqli_close($connection);
		?>
	</div>

	<?php require '../../footerManager.php';?>

</body>

</html>