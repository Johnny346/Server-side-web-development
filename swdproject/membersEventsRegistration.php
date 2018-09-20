<?php

	require '../group7Connection/connection.php';
	

	if (isset($_POST['memsubmit'])){

		$membershipNumber = $_POST['membershipNumber']; 
		$numOfAttendees = $_POST['numOfAttendees'];
		$eventID = $_POST['event2'];
		
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
	
	$checker = mysqli_query($connection, "SELECT * FROM group7.memberships WHERE memberID = $membershipNumber");
	$rows = mysqli_num_rows ($checker);
			
	
	if ($rows > 0){
	if	($currentValue + $numOfAttendees <= $maxValue){
		
		$query = 	"INSERT INTO group7.eventparticipants (membershipNumber, eventID, numOfAttendees) 
					VALUES ('$membershipNumber', '$eventID', '$numOfAttendees')";
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
		echo "<a href='reg_events.php'><button type='submit' class='btn btn-lg'>Back to Events Page</button></a>";
		
		
	}
	
	}
	else{
		echo "membership ID not recognized <br>";
		echo "<a href='reg_events.php'><button type='submit' class='btn btn-lg'>Back to Events Page</button></a>";
	}
	}
	
?>