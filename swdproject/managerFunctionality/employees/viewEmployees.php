<!DOCTYPE=html>
<html lang="en">

<html>

<head>
	<title> viewEmployees </title>
	
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
		
		$viewAllEmployees = "SELECT * FROM group7.employees";
		$resultViewAllEmployees = mysqli_query($connection, $viewAllEmployees);
	?>
	
	<div align=center style="padding: 200px">
		<?php
			$numOfRows = mysqli_num_rows($resultViewAllEmployees);

			if ($numOfRows > 0)
			{
				echo "Total number of employees: ".$numOfRows."<br>";

				echo "<table border='1'>\n";

				echo "<tr>\n";
						echo "<td>employeeID</td>";
						echo "<td>employeePassword</td>";
						echo "<td>employeeRole</td>";
						echo "<td>employeeName</td>";
						echo "<td>employeeEmail</td>";
					echo "</tr>";

				while($numOfRows = mysqli_fetch_array($resultViewAllEmployees) )
				{
					echo "<tr>\n";
						echo "<td>".$numOfRows['employeeID']."</td>";
						echo "<td>".$numOfRows['employeePassword']."</td>";
						echo "<td>".$numOfRows['employeeRole']."</td>";
						echo "<td>".$numOfRows['employeeName']."</td>";
						echo "<td>".$numOfRows['employeeEmail']."</td>";
					echo "</tr>";
				}
				echo "</table>";

				mysqli_free_result ($resultViewAllEmployees);
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