<?php
	
	require '../group7Connection/connection.php';
	

	if (isset($_POST['submit'])){
		
		$name  =  $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$eventID = $_POST['event'];		
		$numOfAttendees=1;
		
		
		$sql1 ="SELECT currentCapacity FROM group7.events WHERE eventID=$eventID";
		$currentCapacity=mysqli_query($connection, $sql1);
		
			while($numOfRows = mysqli_fetch_array($currentCapacity) )
			{
			$currentValue = (int)$numOfRows['currentCapacity'];
			}
		
		$sql2 ="SELECT maxCapacity FROM group7.events WHERE eventID=$eventID";
		$maxCapacity=mysqli_query($connection, $sql2);
	
				
			while($numOfRows = mysqli_fetch_array($maxCapacity) )
			{
			$maxValue = (int)$numOfRows['maxCapacity'];
			}
		
		
		if	($currentValue + $numOfAttendees <= $maxValue){
		
		$query = "INSERT INTO group7.eventparticipants (name, email, phone, eventID, numOfAttendees)
		VALUES ('$name', '$email', '$phone', '$eventID', '$numOfAttendees')";
		$result = mysqli_query($connection, $query);
		
		$currentValue = $currentValue + $numOfAttendees;
				
		$query = "UPDATE group7.events SET currentCapacity = $currentValue WHERE eventID = $eventID";
		$result = mysqli_query($connection, $query);
		
		header('Location: registered.php');
	}

	else
	{
		$places =$maxValue-$currentValue;
		echo "Sorry we can't take your registration<br>" ;
		echo "There are ".$places." places left <br>";
		echo "<a href='events.php'><button type='submit'>Back to Events Page</button></a>";
		
		
	}
		
		
		
		
		
		
		header('Location: registered.php');
		
		
	}
	
?>