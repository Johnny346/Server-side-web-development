<!DOCTYPE=html>
<html lang="en">

<html>

<head>
	<title> addMemberType </title>
	
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

		$typeName = mysqli_real_escape_string($connection,trim($_POST['typeName']));
		$typeBenefits = mysqli_real_escape_string($connection,trim($_POST['typeBenefits']));
		$typeFees = mysqli_real_escape_string($connection,trim($_POST['typeFees']));

		$addType = 	"INSERT INTO group7.membershipType (typeName, typeBenefits, typeFees)
					VALUES ('$typeName', '$typeBenefits', '$typeFees')";
		$resultAddType = mysqli_query($connection, $addType);
	?>
	
	<div align=center style="padding: 300px">
		<?php
			if(!$resultAddType) {echo "<h3>Failed to add new membership type</h3>"; }
			else {echo "<h3>Successfully added new membership type</h3>";}
			
			echo   "<form action='/swdproject/manager.php'>
						<button type='submit'>Return</button><br>
					</form>";			
			
			mysqli_close($connection);
		?>
	</div>
		
	<?php require '../../footerManager.php';?>
</body>

</html>