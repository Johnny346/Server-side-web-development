<?php
	
	require '../group7Connection/connection.php';


	if (isset($_POST['submit'])){
		
		$phone = $_POST['phone'];	
		$name  =  $_POST['name'];
		$address = $_POST['address'];					
		$membershipName = $_POST['type'];

		$query = "INSERT INTO group7.memberships (memberPhone, memberName, memberAddress, membershipName)
		VALUES ('$phone', $name, '$address', '$membershipName')";
		$result = mysqli_query($connection, $query);

	}





?>