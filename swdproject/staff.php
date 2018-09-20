<?php
	require ('../group7Connection/connection.php');
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
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


	<title>Staff Admin</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap">
  <link href="css/style.css" rel="stylesheet"/>
 </head>
 <body>



   <?php
   session_start();

   //checking if staff session has been created if not display login page
   if(!isset($_SESSION['staff_id']))
   {
    require('login_tools.php');
    load();


   }else {
   		//load staff page
   	$user_id = $_SESSION['staff_id'];

	require('header.php');
	  echo "<hr/>
     		<div class='container-fluid' align='center'>
                <div class='row'>
					<div class='col-md-4'>
						<a href='logout.php'>Log Out</a>
						<br/>
						<a href='staff.php'> Staff Admin</a>
					</div>
                  
					<div class='col-md-4' align='center'>
						<h3>Staff member </h3>
					</div>
					<div class='col-md-4'>
					</div>
				</div>
				
				<br />
				
			</div>
         
			<hr/>

			<div class='container' align='center'>
			
					<h2>Membership Management</h2>
					
					<div class='col-md-6'>
							<p>
								<a class='btn btn-primary' data-toggle='collapse' href='#bt16' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'>Add a new member</a>
							</p>
								<div class='row'>
									<div class='col'>
										<div class='collapse multi-collapse' id='bt16'>
											<div class='card card-body'>												
													<form action='managerFunctionality/members/addMember.php' method='POST'>

														Enter Members Phone Number:		<br><input type='text'  	name='memberPhone'			maxLength='30'		required><br>
														Enter Members Name:				<br><input type='text'  	name='memberName'			maxLength='50'		required><br>
														Enter Members Address:			<br><input type='text'  	name='memberAddress'		maxLength='100'		required><br>
														Enter Membership Type:			<br><input type='text'  	name='membershipName'		maxLength='20'		required><br>
														Enter Fees Paid:				<br><input type='number'  	name='membershipFeesPaid'	required><br>
														Enter Membership Start Date:	<br><input type='date'  	name='membershipStart'		required><br>
														Enter Membership End Date:		<br><input type='date'  	name='membershipEnd'		required><br>

													<button type='submit' name='addMember'>Add</button><br><br>
												</form>
											</div>
										</div>
									</div>
								</div>
						</div>
					
					<div class='col-md-6'>
							<p>
								<a class='btn btn-primary' data-toggle='collapse' href='#bt17' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'>Update an existing member </a>
							</p>
							<div class='row'>
								<div class='col'>
									<div class='collapse multi-collapse' id='bt17'>
										<div class='card card-body'>											
											<form action='managerFunctionality/members/updateMember.php' method='POST'>

												Enter the ID of the member you wish to modify: <br><input type='number'  name='memberID'	required><br>
												Enter Members Phone Number:		<br><input type='text'  	name='memberPhone'			maxLength='30'		required><br>
												Enter Members Name:				<br><input type='text'  	name='memberName'			maxLength='50'		required><br>
												Enter Members Address:			<br><input type='text'  	name='memberAddress'		maxLength='100'		required><br>
												Enter Membership Type:			<br><input type='text'  	name='membershipName'		maxLength='20'		required><br>
												Enter Fees Paid:				<br><input type='number'  	name='membershipFeesPaid'	required><br>
												Enter Membership Start Date:	<br><input type='date'  	name='membershipStart'		required><br>
												Enter Membership End Date:		<br><input type='date'  	name='membershipEnd'		required><br>

												<button type='submit' name='updateMember'>Update</button><br><br>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						
			</div>
			<br/><br/>";


	require('footer.php');
   } ?>
 </body>
</html>
