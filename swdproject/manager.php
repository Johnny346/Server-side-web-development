<?php
	require '../group7Connection/connection.php';
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
	<title>Manager Admin</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap">
  <link href="css/style.css" rel="stylesheet"/>
 </head>
<body>
	<?php
		session_start();

		//checking if manager session has been created if not display login page
		if(!isset($_SESSION['manager_id']))
		{
		require('login_tools.php');
		load();
		}
		else 
		{
			$user_id = $_SESSION['manager_id'];

			$user_name = "1";

			$q4 = "SELECT employeeName FROM group7.employees WHERE employeeID = $user_id";

			$r4 = mysqli_query($connection,$q4);
			if($r4)
			{
			$row = mysqli_fetch_array($r4, MYSQLI_ASSOC);
			$user_name = $row['employeeName'];
			}

			require('header.php');

			echo "<hr/>
				<div class='container-fluid' align='center'>
					<div class='row'>
						<div class='col-md-4'>
							<a href='logout.php'>Log Out</a>

							<br/>
							
							<a href='manager.php'> Manager admin</a>
						</div>
					
						<div class='col-md-4'>
							<h3>Manager Admin: ".$user_name."</h3>
						</div>

						<div class='col-md-4'>
							<h4>Most Recent Messages</h4>
								<ul>
									<li class='dropdown'>
										<a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='label label-pill label-danger count' style='border-radius:10px;''></span> <span class='glyphicon glyphicon-bell' style='font-size:18px;''></span></a>
										<ul class='dropdown-menu'><h5>From:</h5></ul>
									</li>
								</ul>
						</div>
					</div>
				
					<br/>
				</div>

				<hr/>

				<div class='container'>

					<h2>Membership Types and Membership Management</h2>

						<div class='row'>
							<div class='col-md-6'>
								<p>
									<a class='btn btn-primary' data-toggle='collapse' href='#bt1' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'>Add a new membership type</a>
								</p>
								<div class='row'>
									<div class='col'>
										<div class='collapse multi-collapse' id='bt1'>
											<div class='card card-body'>											
													<form action='managerFunctionality/membershipType/addMemberType.php' method='POST'>

														Enter duration/name (Monthy, 60 days, etc):	<br><input type='text'  name='typeName'  	maxLength='100'	required><br>
														Enter the benefits of this membership:	<br><input type='text'  	name='typeBenefits'	maxLength='500'	required><br>
														Enter the associated fees: 				<br><input type='number'  	name='typeFees'  	required><br>

														<button type='submit' name='addMemberType'>Add</button><br><br>
													</form>
											</div>
										</div>
									</div>
							</div>
						</div>

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
				</div>
			</div>

				<div class='container'>
					<div class='row'>
						<div class='col-md-6'>
							<p>
								<a class='btn btn-primary' data-toggle='collapse' href='#bt2' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'> Update an existing membership type</a>
							</p>
							<div class='row'>
								<div class='col'>
									<div class='collapse multi-collapse' id='bt2'>
										<div class='card card-body'>											
											<form action='managerFunctionality/membershipType/updateMemberType.php' method='POST'>

												Enter the ID of the membership type to update:	<br><input type='number'  	name='typeID'  		required><br>
												Enter updated duration/name (Monthy, 60 days, etc):	<br><input type='text'  	name='typeName'  	maxLength='100'	required><br>
												Enter the updated benefits:				<br><input type='text'  	name='typeBenefits'	maxLength='500'	required><br>
												Enter the updated fees: 				<br><input type='number'  	name='typeFees'  	required><br>

												<button type='submit' name='updateMemberType'>Update</button><br><br>
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

												Enter the ID of the member you wish to modify: <br><input type='number'  name='memberID'					required><br>
												Enter Members Phone Number:		<br><input type='text'  	name='memberPhone'			maxLength='30'		required><br>
												Enter Members Name:				<br><input type='text'  	name='memberName'			maxLength='50'		required><br>
												Enter Members Address:			<br><input type='text'  	name='memberAddress'		maxLength='100'		required><br>
												Enter Membership Type:			<br><input type='text'  	name='membershipName'		maxLength='20'		required><br>
												Enter Fees Paid:				<br><input type='number'  	name='membershipFeesPaid'						required><br>
												Enter Membership Start Date:	<br><input type='date'  	name='membershipStart'							required><br>
												Enter Membership End Date:		<br><input type='date'  	name='membershipEnd'								required><br>

												<button type='submit' name='updateMember'>Update</button><br><br>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class='container'>
					<div class='row'>
						<div class='col-md-6'>
							<p>
								<a class='btn btn-primary' data-toggle='collapse' href='#bt3' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'>Permanently delete a membership type</a>
							</p>
							<div class='row'>
								<div class='col'>
									<div class='collapse multi-collapse' id='bt3'>
										<div class='card card-body'>
											<form action='managerFunctionality/membershipType/deleteMemberType.php' method='POST'>
												Enter the ID of the membership type:<br><input type='number'  	name='typeID'  	required><br>

												<button type='submit' name='deleteMemberType'>Delete</button><br><br>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class='col-md-6'>
							<p>
								<a class='btn btn-primary' data-toggle='collapse' href='#bt18' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'>Permanently delete a member </a>
							</p>
								<div class='row'>
									<div class='col'>
										<div class='collapse multi-collapse' id='bt18'>
											<div class='card card-body'>											
												<form action='managerFunctionality/members/deleteMember.php' method='POST'>
													Enter the ID of the member you wish to delete: <br><input type='number'  	name='memberID'	required><br>

													<button type='submit' name='deleteMembers'>Delete</button><br><br>
												</form>
											</div>
										</div>
									</div>
								</div>
						</div>

						<div class='col-md-6'>
						</div>

						<div class='col-md-6'>
							<form action='managerFunctionality/members/viewMembers.php' method='POST'>
								<button type='submit' name='viewMembers'>View all members</button><br><br>
							</form>
						</div>
					</div>
				</div>
				
				<hr>
				
				<div class='container'>

					<h2>Events management</h2>

					<div class='row'>
						<div class='col-md-6'>
							<p>
								<a class='btn btn-primary' data-toggle='collapse' href='#bt4' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'>Add a new event</a>
							</p>
							<div class='row'>
								<div class='col'>
									<div class='collapse multi-collapse' id='bt4'>
										<div class='card card-body'>
											<form action='managerFunctionality/events/addEvent.php' method='POST'>

												Enter the new title:				<br><input type='text'  	name='eventTitle'  		maxLength='50'		required><br>
												Enter the event description:		<br><input type='text'  	name='eventDescription'	maxLength='500'		required><br>
												Select a date for the event: 		<br><input type='date'  	name='eventDate'  							required><br>
												Enter a time for the event:			<br><input type='text'  	name='eventTime'		maxLength='50'		required><br>
												Enter the maximum no of spaces: 	<br><input type='number'  	name='maxCapacity'							required><br>

												<button type='submit' name='addEvent'>Add</button><br><br>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class='row'>
						<div class='col-md-6'>
							<p>
								<a class='btn btn-primary' data-toggle='collapse' href='#bt5' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'>Update an existing event</a>
							</p>
							<div class='row'>
								<div class='col'>
									<div class='collapse multi-collapse' id='bt5'>
										<div class='card card-body'>
											<form action='managerFunctionality/events/updateEvent.php' method='POST'>

												Enter the ID of the event to update:	<br><input type='number'  	name='eventID'  							required><br>
												Enter the updated title:				<br><input type='text'  	name='eventTitle'  		maxLength='50'		required><br>
												Enter the updated description:			<br><input type='text'  	name='eventDescription'	maxLength='500'		required><br>
												Select a date for the event: 			<br><input type='date'  	name='eventDate'  							required><br>
												Enter the updated time for the event:	<br><input type='text'  	name='eventTime'		maxLength='50'		required><br>
												Enter the new no. of spaces:			<br><input type='number'  	name='maxCapacity'							required><br>

												<button type='submit' name='updateEvent'>Update</button><br><br>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class='row'>
						<div class='col-md-6'>
							<p>
								<a class='btn btn-primary' data-toggle='collapse' href='#bt6' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'>Permanently delete an event</a>
							</p>
							<div class='row'>
								<div class='col'>
									<div class='collapse multi-collapse' id='bt6'>
										<div class='card card-body'>
											<form action='managerFunctionality/events/deleteEvent.php' method='POST'>

												Enter the ID of the event to delete:<br><input type='number'  name='eventID'  required><br>

												<button type='submit' name='deleteMemberType'>Delete</button><br><br>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class='col-md-6'>
						</div>
						
					</div>
				</div>
				
				<hr>
				
				<div class='container'>
				
					<h2>News section</h2>
					
						<div class='row'>
							<div class='col-md-6'>
								<p>
									<a class='btn btn-primary' data-toggle='collapse' href='#bt7' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'>Add a new news item</a>
								</p>
								<div class='row'>
									<div class='col'>
										<div class='collapse multi-collapse' id='bt7'>
											<div class='card card-body'>
												<form action='managerFunctionality/news/addNews.php' method='POST' name='addNewsForm'>

													Enter the date:			<br><input type='date'  	name='newsDate'  								required><br>
													Enter the time:			<br><input type='text'  	name='newsTime'				maxLength='50'		required><br>
													Enter news headline:	<br><input type='text'  	name='newsDescription'		maxLength='500'		required><br>
													Enter the description:	<br><textarea cols='50' 	rows='5'  name='newsText' 	maxLength='2000'	required></textarea><br>

													<button type='submit' name='addNewsItem'>Add</button><br><br>
												</form>
											</div>
										</div>
									</div>
								</div>

								<p>
									<a class='btn btn-primary' data-toggle='collapse' href='#bt8' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'>Update an existing news item</a>
								</p>
									<div class='row'>
										<div class='collapse multi-collapse' id='bt8'>
											<div class='card card-body'>
												<form action='managerFunctionality/news/updateNews.php' method='POST'>

													Enter the ID of the news item to update:<br><input type='number'  	name='newsID'  									required><br>
													Enter the updated date:					<br><input type='date'  	name='newsDate'  								required><br>
													Enter the updated time:					<br><input type='text'  	name='newsTime'				maxLength='50'		required><br>
													Enter news headline:					<br><input type='text'  	name='newsDescription'		maxLength='500'		required><br>
													Enter the updated description: 		<br><textarea cols='50' 	rows='5'  name='newsText' 	maxLength='2000'	required></textarea><br>

													<button type='submit' name='updateNewsItem'>Update</button><br><br>
												</form>
											</div>
										</div>
									</div>

								<p>
									<a class='btn btn-primary' data-toggle='collapse' href='#bt9' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'>Permanently delete a news item</a>
								</p>
									<div class='row'>
										<div class='col'>
											<div class='collapse multi-collapse' id='bt9'>
												<div class='card card-body'>
												
													<h3> Permanently delete a news item: </h3>
														<form action='managerFunctionality/news/deleteNews.php' method='POST'>
															Enter the ID of the news item to delete:<br><input type='number'  name='newsID'  required><br>

															<button type='submit' name='deleteNewsItem'>Delete</button><br><br>
														</form>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
				</div>

				<hr>

				<div class='container'>

					<h2>Employee management section</h2>

						<div class='row'>
							<div class='col-md-6'>
								<p>
									<a class='btn btn-primary' data-toggle='collapse' href='#bt12' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'> Add a new employee </a>
								</p>
								<div class='row'>
									<div class='col'>
										<div class='collapse multi-collapse' id='bt12'>
											<div class='card card-body'>
												<form action='managerFunctionality/employees/addEmployee.php' method='POST'>

													Choose a password:		<br><input type='text'  	name='employeePassword'	maxLength='50'		required><br>
													Choose a role:			<br><input type='text'  	name='employeeRole'		maxLength='20'		required><br>
													Enter employees name:	<br><input type='text'  	name='employeeName'		maxLength='50'		required><br>
													Enter employees email:	<br><input type='email'  	name='employeeEmail'	maxLength='100'		required><br>

													<button type='submit' name='addEmployee'>Add</button><br><br>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class='col-md-6'>
								<p>
									<a class='btn btn-primary' data-toggle='collapse' href='#bt14' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'>Permanently delete an employee </a>
								</p>
								<div class='row'>
									<div class='col'>
										<div class='collapse multi-collapse' id='bt14'>
											<div class='card card-body'>
												<form action='managerFunctionality/employees/deleteEmployee.php' method='POST'>
													Enter the ID of the employee you wish to delete: <br><input type='number'  	name='employeeID'	required><br>

													<button type='submit' name='deleteEmployee'>Delete</button><br><br>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>

				<div class='container'>
					<div class='row'>
						<div class='col-md-6'>
							<p>
								<a class='btn btn-primary' data-toggle='collapse' href='#bt13' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'> Update an existing employee  </a>
							</p>
							<div class='row'>
								<div class='col'>
									<div class='collapse multi-collapse' id='bt13'>
										<div class='card card-body'>
										
											<h3> Update an existing employee </h3>
											
											<form action='managerFunctionality/employees/updateEmployee.php' method='POST'>

												Enter the ID of the employee you wish to modify: <br><input type='number'  	name='employeeID'	required><br>
												Enter a password:		<br><input type='text'  	name='employeePassword'	maxLength='50'		required><br>
												Enter a role:			<br><input type='text'  	name='employeeRole'		maxLength='20'		required><br>
												Enter employees name:	<br><input type='text'  	name='employeeName'		maxLength='50'		required><br>
												Enter employees email:	<br><input type='email'  	name='employeeEmail'	maxLength='100'		required><br>

												<button type='submit' name='updateEmployee'>Update</button><br><br>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class='col-md-6'>
							<form action='managerFunctionality/employees/viewEmployees.php' method='POST'>
								<button type='submit' name='viewEmployees'>View All Employees</button><br><br>
							</form>
						</div>
					</div>
				</div>

				<hr>

				<div class='container'>

					<h2>Reports</h2>

					<div class='row'>
						<div class='col-md-6'>
							<p>
								<a class='btn btn-primary' data-toggle='collapse' href='#bt11' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'>View fees for period:</a>
							</p>
							<div class='row'>
								<div class='col'>
									<div class='collapse multi-collapse' id='bt11'>
										<div class='card card-body'>
										
											<h3> Membership Fees </h3>
											
											<form action='managerFunctionality/reports/getFees.php' method='POST'>
												Period Start: 	<br><input type='date'  	name='startDate'	required><br>
												Period End: 	<br><input type='date'  	name='endDate'  	required><br>

												<button type='submit' name='getFees'>View</button><br><br>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<hr>
				
				<div class='container'>
					
					<h2>Messages</h2>
					
					<div class='row'>
						<div class='col-md-6'>
						<p>
							<a class='btn btn-primary' data-toggle='collapse' href='#bt20' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'>Permanently delete a message </a>
						</p>
							<div class='row'>
								<div class='col'>
									<div class='collapse multi-collapse' id='bt20'>
										<div class='card card-body'>
											<form action='managerFunctionality/messages/deleteMessage.php' method='POST'>
												Enter the ID of the message you wish to delete: <br><input type='number'  	name='contactID'	required><br>

												<button type='submit' name='deleteEmployee'>Delete</button><br><br>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class='row'>
						<div class='col-md-6'>
							<form action='managerFunctionality/messages/viewMessages.php' method='POST'>
								<button type='submit' name='viewAllMessages'>View all</button><br><br>
							</form>
						</div>
					</div>
					
				</div>
				<br/><br/>";


mysqli_close($connection);
require('footer.php');
	   }

	   ?>

	<script>
	//this script is to show the last four messages sent from the contact form
	// allows manager to quickly receive notifications of new messages
	$(document).ready(function(){

	 function load_unseen_notification(view = '')
	 {
	  $.ajax({
	   url:"fetch.php",
	   method:"POST",
	   data:{view:view},
	   dataType:"json",
	   success:function(data)
	   {
	    $('.dropdown-menu').html(data.notification);
	    if(data.unseen_notification > 0)
	    {
	     $('.count').html(data.unseen_notification);
	    }
	   }
	  });
	 }

	 load_unseen_notification();


	 $(document).on('click', '.dropdown-toggle', function(){
	  $('.count').html('');
	  load_unseen_notification('yes');
	 });

	 //self calling function
	 setInterval(function(){
	  load_unseen_notification();;
	 }, 5000);

	});
	</script>
</body>
</html>
