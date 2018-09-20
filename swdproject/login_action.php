<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){
	#incorporate the MySQL connection script
	require ('../group7Connection/connection.php');
	require('login_tools.php');

	//list function() assigns variables as if there an array
	list($check, $data)=validate($connection, $_POST['id'], $_POST['pass']);

	if($check){

		session_start();

		$user_id = $_POST['id'];


		$q3 = "SELECT employeeRole FROM group7.employees WHERE employeeID = '$user_id'";

		$r3 = mysqli_query($connection,$q3);

		if($r3){
			echo " test1";
			$row = mysqli_fetch_array($r3, MYSQLI_ASSOC);
			echo $row['employeeRole'];

			//check if user is a manager, staff or none and redirect them to their pages
			if($row['employeeRole'] == 'manager')
			{echo " test1";
				//set manager session
				$_SESSION['manager_id'] = $_POST['id'];
				load('manager.php');

			}else if($row['employeeRole'] == 'staff')
			{
				//set staff session
				$_SESSION['staff_id'] = $_POST['id'];
				load('staff.php');

			}else{
				load('login.php');
			}
		}

	}else{
		$errors = $data;
	}
	mysqli_close($connection);
}

include('login.php');

?>