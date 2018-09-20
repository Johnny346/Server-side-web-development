<?php

	echo "The rest of this page should be blank; error messages will only be printed if something fails.<br><br>";

	//this page creates the database, and populates the tables with default values.
	require ('../group7Connection/connection.php');

	//Create the database
	$createDatabase = "CREATE DATABASE group7";
	$resultCreate = mysqli_query($connection, $createDatabase);
	if(!$resultCreate) {echo "Failed to create database<br><br>"; }

//=======================================================================================================================
	//employee table: create.
		$createEmployeeTable = "CREATE TABLE group7.employees
								(
									employeeID INT(6) 	NOT NULL 		AUTO_INCREMENT,
									employeePassword 	VARCHAR(50)		NOT NULL,
									employeeRole 		VARCHAR(20) 	NOT NULL,
									employeeName 		VARCHAR(50) 	NOT NULL,
									employeeEmail 		VARCHAR(100) 	NOT NULL,

									PRIMARY KEY(employeeID)
								)";

		$resultCreateTable = mysqli_query($connection, $createEmployeeTable);
		if(!$resultCreateTable) {echo "Failed to create employees table<br><br>"; }

	//employee table: add
		$empPassword = "1";
		$empPassword = SHA1($empPassword);
		$empRole = "manager";
		$empName = "Joe Bloggs";
		$empEmail = "joebloggs@email.com";

		$addEmployee = "INSERT INTO group7.employees (employeePassword, employeeRole, employeeName, employeeEmail)
						VALUES ('$empPassword', '$empRole', '$empName', '$empEmail')";
		$resultAddEmployee = mysqli_query($connection, $addEmployee);
		if(!$resultAddEmployee) {echo "Failed to add employee 1 - manager <br><br>"; }

		//default employees
			$empPassword = "2";
			$empPassword = SHA1($empPassword);
			$empRole = "staff";
			$empName = "staff";
			$empEmail = "johnsmith@email.com";

			$addEmployee = "INSERT INTO group7.employees (employeePassword, employeeRole, employeeName, employeeEmail)
						VALUES ('$empPassword', '$empRole', '$empName', '$empEmail')";
			$resultAddEmployee = mysqli_query($connection, $addEmployee);
			if(!$resultAddEmployee) {echo "Failed to add employee 2 - staff <br><br>"; }

			$empPassword = "1";
			$empPassword = SHA1($empPassword);
			$empRole = "staff";
			$empName = "Mary Sullivan";
			$empEmail = "maryosullivan@email.com";

			$addEmployee = "INSERT INTO group7.employees (employeePassword, employeeRole, employeeName, employeeEmail)
						VALUES ('$empPassword', '$empRole', '$empName', '$empEmail')";
			$resultAddEmployee = mysqli_query($connection, $addEmployee);
			if(!$resultAddEmployee) {echo "Failed to add employee 3 <br><br>"; }

			$empPassword = "1";
			$empPassword = SHA1($empPassword);
			$empRole = "staff";
			$empName = "Jessica Reynolds";
			$empEmail = "jessicalreynolds@email.com";

			$addEmployee = "INSERT INTO group7.employees (employeePassword, employeeRole, employeeName, employeeEmail)
						VALUES ('$empPassword', '$empRole', '$empName', '$empEmail')";
			$resultAddEmployee = mysqli_query($connection, $addEmployee);
			if(!$resultAddEmployee) {echo "Failed to add employee 4 <br><br>"; }

	//end employee table create + add
//=======================================================================================================================
	//membership-type table
		$createMemberTypeTable = 	"CREATE TABLE group7.membershipType
									(
										typeID			INT(6)			NOT NULL	AUTO_INCREMENT,
										typeName		VARCHAR(100)	NOT NULL,
										typeBenefits 	VARCHAR(500)	NOT NULL,
										typeFees		DECIMAL(7,2)	NOT NULL,

										PRIMARY KEY(typeID)
									)";

		$resultCreateMemberTypeTable = mysqli_query($connection, $createMemberTypeTable);
		if(!$resultCreateMemberTypeTable) {echo "Failed to create membership-type table<br><br>"; }

	//membership-type: add
		$typeName = "Monthly";
		$typeBenefits = "Free use of the pool, discounted parking, 1 free class a week";
		$typeFees = 100.00;

		$addType = 	"INSERT INTO group7.membershipType (typeName, typeBenefits, typeFees)
						VALUES ('$typeName', '$typeBenefits', '$typeFees')";
		$resultAddType = mysqli_query($connection, $addType);
		if(!$resultAddType) {echo "Failed to add new membership type <br><br>"; }

		$typeName = "Annual";
		$typeBenefits = "Free use of the pool, free parking, 4 free classes a week";
		$typeFees = 1000.00;

		$addType = 	"INSERT INTO group7.membershipType (typeName, typeBenefits, typeFees)
						VALUES ('$typeName', '$typeBenefits', '$typeFees')";
		$resultAddType = mysqli_query($connection, $addType);
		if(!$resultAddType) {echo "Failed to add new membership type <br><br>"; }

	//end membership-type table	create + add
//=======================================================================================================================
	//club-contact table
		$createClubContactTable = 	"CREATE TABLE group7.clubContactInfo
									(
										clubPhoneNumber		VARCHAR(30),
										clubAddress			VARCHAR(100),
										clubEmailAddress	VARCHAR(100),
										clubOpeningTimes	VARCHAR(50),

										PRIMARY KEY(clubPhoneNumber)
									)";

		$resultCreateClubContactTable = mysqli_query($connection, $createClubContactTable);
		if(!$resultCreateClubContactTable) {echo "Failed to create club contact table<br><br>"; }

		//Default value (There should never be more than one entry in this table):
		$clubPhone = "(+353) 021 123 45 67";
		$clubAdd = "110 Club Street, Sports Road, Fitville, Earth.";
		$clubEmail = "EmailAddress";
		$clubTimes = "9:00am - 11:00pm";

		$addClubContactInfo = 	"INSERT INTO group7.clubContactInfo (clubPhoneNumber, clubAddress, clubEmailAddress, clubOpeningTimes)
								VALUES ('$clubPhone', '$clubAdd', '$clubEmail', '$clubTimes')";
			$resultAddClubContactInfo = mysqli_query($connection, $addClubContactInfo);
			if(!$resultAddClubContactInfo) {echo "Failed to add club contact info <br><br>"; }

	//end club-contact table create + add
//=======================================================================================================================
	//memberships table

		$createMembershipTable = "CREATE TABLE group7.memberships
								(
									memberID 			INT(6)		 	NOT NULL 		AUTO_INCREMENT,
									memberPhone			VARCHAR(30)		NOT NULL,
									memberName 			VARCHAR(50) 	NOT NULL,
									memberAddress 		VARCHAR(100) 	NOT NULL,
									membershipName 		VARCHAR(20) 	NOT NULL,
									membershipFeesPaid	DECIMAL(7,2) 	NOT NULL,
									membershipStart		DATE			NOT NULL,
									membershipEnd		DATE			NOT NULL,

									PRIMARY KEY(memberID)
								)";

		$resultCreateMembershipTable = mysqli_query($connection, $createMembershipTable);
		if(!$resultCreateMembershipTable) {echo "Failed to create memberships table<br><br>"; }

	//memberships table: add
		$memberPhone = "0211111111";
		$memberName = "memberName1";
		$memberAddress = "address1";
		$membershipName = "Monthly";
		$membershipFeesPaid = 123.45;
		$membershipStart = "2018-01-01";
		$membershipEnd = "2018-02-01";

		$addMember = "INSERT INTO group7.memberships (memberPhone, memberName, memberAddress, membershipName, membershipFeesPaid, membershipStart, membershipEnd)
						VALUES ('$memberPhone', '$memberName', '$memberAddress', '$membershipName', '$membershipFeesPaid', '$membershipStart', '$membershipEnd')";
		$resultAddMember = mysqli_query($connection, $addMember);
		if(!$resultAddMember) {echo "Failed to add member 1 <br><br>"; }

		//default members
			$memberPhone = "0212222222";
			$memberName = "memberName2";
			$memberAddress = "address2";
			$membershipName = "Monthly";
			$membershipFeesPaid = 213.12;
			$membershipStart = "2018-01-01";
			$membershipEnd = "2018-02-01";

			$addMember = "INSERT INTO group7.memberships (memberPhone, memberName, memberAddress, membershipName, membershipFeesPaid, membershipStart, membershipEnd)
							VALUES ('$memberPhone', '$memberName', '$memberAddress', '$membershipName', '$membershipFeesPaid', '$membershipStart', '$membershipEnd')";
			$resultAddMember = mysqli_query($connection, $addMember);
			if(!$resultAddMember) {echo "Failed to add member 2 <br><br>"; }

			$memberPhone = "0213333333";
			$memberName = "memberName3";
			$memberAddress = "address3";
			$membershipName = "Monthly";
			$membershipFeesPaid = 563.51;
			$membershipStart = "2018-01-01";
			$membershipEnd = "2018-02-01";

			$addMember = "INSERT INTO group7.memberships (memberPhone, memberName, memberAddress, membershipName, membershipFeesPaid, membershipStart, membershipEnd)
							VALUES ('$memberPhone', '$memberName', '$memberAddress', '$membershipName', '$membershipFeesPaid', '$membershipStart', '$membershipEnd')";
			$resultAddMember = mysqli_query($connection, $addMember);
			if(!$resultAddMember) {echo "Failed to add member 3 <br><br>"; }

			$memberPhone = "0214444444";
			$memberName = "memberName4";
			$memberAddress = "address4";
			$membershipName = "Annual";
			$membershipFeesPaid = 253.45;
			$membershipStart = "2018-01-01";
			$membershipEnd = "2019-02-01";

			$addMember = "INSERT INTO group7.memberships (memberPhone, memberName, memberAddress, membershipName, membershipFeesPaid, membershipStart, membershipEnd)
							VALUES ('$memberPhone', '$memberName', '$memberAddress', '$membershipName', '$membershipFeesPaid', '$membershipStart', '$membershipEnd')";
			$resultAddMember = mysqli_query($connection, $addMember);
			if(!$resultAddMember) {echo "Failed to add member 4 <br><br>"; }

			$memberPhone = "0215555555";
			$memberName = "memberName5";
			$memberAddress = "address5";
			$membershipName = "Annual";
			$membershipFeesPaid = 125.56;
			$membershipStart = "2018-01-01";
			$membershipEnd = "2019-02-01";

			$addMember = "INSERT INTO group7.memberships (memberPhone, memberName, memberAddress, membershipName, membershipFeesPaid, membershipStart, membershipEnd)
							VALUES ('$memberPhone', '$memberName', '$memberAddress', '$membershipName', '$membershipFeesPaid', '$membershipStart', '$membershipEnd')";
			$resultAddMember = mysqli_query($connection, $addMember);
			if(!$resultAddMember) {echo "Failed to add member 5 <br><br>"; }

	//end memberships table create + add
//=======================================================================================================================
	//events table
		$createEventsTable = 	"CREATE TABLE group7.events
									(
										eventID				INT(6)			NOT NULL	AUTO_INCREMENT,
										eventTitle			VARCHAR(50)		NOT NULL,
										eventDescription 	VARCHAR(500)	NOT NULL,
										eventDate			DATE			NOT NULL,
										eventTime			VARCHAR(50)		NOT NULL,
										maxCapacity			INT(6)			NOT NULL,
										currentCapacity  	INT(6),

										PRIMARY KEY(eventID)
									)";

		$resultCreateEventsTable = mysqli_query($connection, $createEventsTable);
		if(!$resultCreateEventsTable) {echo "Failed to create events table<br><br>"; }

	//events table: add
		$eventTitle = "event1";
		$eventDescription = "awesome event that you should come to";
		$eventDate = '2018-04-23';
		$eventTime = "All day from 1:00pm";
		$maxCapacity = 10;

		$addEvent = 	"INSERT INTO group7.events (eventTitle, eventDescription, eventDate, eventTime, maxCapacity)
						VALUES ('$eventTitle', '$eventDescription', '$eventDate', '$eventTime', '$maxCapacity')";
		$resultAddEvent = mysqli_query($connection, $addEvent);
		if(!$resultAddEvent) {echo "Failed to add event 1 <br><br>"; }

		//default events
		$eventTitle = "event2";
		$eventDescription = "evening class cardio focus";
		$eventDate = '2018-04-23';
		$eventTime = "7:00 - 8:00 pm";
		$maxCapacity = 20;

		$addEvent = 	"INSERT INTO group7.events (eventTitle, eventDescription, eventDate, eventTime, maxCapacity)
						VALUES ('$eventTitle', '$eventDescription', '$eventDate', '$eventTime', '$maxCapacity')";
		$resultAddEvent = mysqli_query($connection, $addEvent);
		if(!$resultAddEvent) {echo "Failed to add event 2 <br><br>"; }

		$eventTitle = "event3";
		$eventDescription = "weekend work out ";
		$eventDate = '2018-04-28';
		$eventTime = "Next Saturday and Sunday!";
		$maxCapacity = 30;

		$addEvent = 	"INSERT INTO group7.events (eventTitle, eventDescription, eventDate, eventTime, maxCapacity)
						VALUES ('$eventTitle', '$eventDescription', '$eventDate', '$eventTime', '$maxCapacity')";
		$resultAddEvent = mysqli_query($connection, $addEvent);
		if(!$resultAddEvent) {echo "Failed to add event 3 <br><br>"; }

	//End events table	create + add
//=======================================================================================================================
	//event-participants table create + add

		$createParticipantsTable = "CREATE TABLE group7.eventParticipants
										(
											ticketID			INT(6)			NOT NULL	AUTO_INCREMENT,
											membershipNumber	INT(6),
											name				VARCHAR(50),
											email				VARCHAR(100),
											phone				VARCHAR(20),
											eventID				INT(6)			NOT NULL,
											numOfAttendees		INT(6),

											PRIMARY KEY(ticketID)
										)";

		$resultCreateParticipantsTable = mysqli_query($connection, $createParticipantsTable);
		if(!$resultCreateParticipantsTable) {echo "Failed to create eventParticipants table<br><br>"; }

	//eventParticipants table: add
		$membershipNumber = 1;
		$name = "";
		$email = "";
		$phone = "";
		$eventID = 1;
		$numOfAttendees = 4;

		$addParticipant = 	"INSERT INTO group7.eventParticipants (membershipNumber, name, email, phone, eventID, numOfAttendees)
							VALUES ('$membershipNumber', '$name', '$email', '$phone', '$eventID', '$numOfAttendees')";
		$resultAddParticipant = mysqli_query($connection, $addParticipant);
		if(!$resultAddParticipant) {echo "Failed to add attendee 1 to event 1 <br><br>"; }

		$membershipNumber = 2;
		$name = "";
		$email = "";
		$phone = "";
		$eventID = 1;
		$numOfAttendees = 1;

		$addParticipant = 	"INSERT INTO group7.eventParticipants (membershipNumber, name, email, phone, eventID, numOfAttendees)
							VALUES ('$membershipNumber', '$name', '$email', '$phone', '$eventID', '$numOfAttendees')";
		$resultAddParticipant = mysqli_query($connection, $addParticipant);
		if(!$resultAddParticipant) {echo "Failed to add attendee 2 to event 1 <br><br>"; }

		$membershipNumber = "";
		$name = "name1";
		$email = "email1@email.com";
		$phone = "0211111111";
		$eventID = 1;
		$numOfAttendees = 4;

		$addParticipant = 	"INSERT INTO group7.eventParticipants (membershipNumber, name, email, phone, eventID, numOfAttendees)
							VALUES ('$membershipNumber', '$name', '$email', '$phone', '$eventID', '$numOfAttendees')";
		$resultAddParticipant = mysqli_query($connection, $addParticipant);
		if(!$resultAddParticipant) {echo "Failed to add attendee 3 to event 1 <br><br>"; }

	//end event-participants table create + add
//=======================================================================================================================
	//club-news-item table
		$createNewsTable = 	"CREATE TABLE group7.news
									(
										newsID			INT(6)		NOT NULL	AUTO_INCREMENT,
										newsDate		DATE,
										newsTime		VARCHAR(50),
										newsDescription	VARCHAR(500),
										newsText 		VARCHAR(2000),

										PRIMARY KEY(newsID)
									)";

		$resultCreateNewsTable = mysqli_query($connection, $createNewsTable);
		if(!$resultCreateNewsTable) {echo "Failed to create news table<br><br>"; }

	//club-news-item table: add
		$newsDate = '2018-04-23';
		$newsTime = "4:00pm";
		$newsDescription = "HeadLine 1";
		$newsText = "Story 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et bibendum quam.
							Phasellus sed augue sit amet mi mollis bibendum. Phasellus convallis vitae ligula
							sed venenatis. Nullam consectetur porttitor cursus.";

		$addNews = 	"INSERT INTO group7.news (newsDate, newsTime, newsDescription, newsText)
					VALUES ('$newsDate', '$newsTime', '$newsDescription','$newsText')";
		$resultAddNews = mysqli_query($connection, $addNews);
		if(!$resultAddNews) {echo "Failed to add news item 1<br><br>"; }

		//default news items
			$newsDate = '2018-04-23';
			$newsTime = "3:00pm";
			$newsDescription = "HeadLine 2";
			$newsText = "Story 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et bibendum quam.
							Phasellus sed augue sit amet mi mollis bibendum. Phasellus convallis vitae ligula
							sed venenatis. Nullam consectetur porttitor cursus.";

			$addNews = 	"INSERT INTO group7.news (newsDate, newsTime, newsDescription, newsText)
						VALUES ('$newsDate', '$newsTime', '$newsDescription','$newsText')";
			$resultAddNews = mysqli_query($connection, $addNews);
			if(!$resultAddNews) {echo "Failed to add news item 2<br><br>"; }

			$newsDate = '2018-04-22';
			$newsDescription = "HeadLine 3";
			$newsText = "Story 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et bibendum quam.
							Phasellus sed augue sit amet mi mollis bibendum. Phasellus convallis vitae ligula
							sed venenatis. Nullam consectetur porttitor cursus.";

			$addNews = 	"INSERT INTO group7.news (newsDate, newsTime, newsDescription, newsText)
						VALUES ('$newsDate', '$newsTime', '$newsDescription','$newsText')";
			$resultAddNews = mysqli_query($connection, $addNews);
			if(!$resultAddNews) {echo "Failed to add news item 3 <br><br>"; }

	//end club-news-item table create + add
//=======================================================================================================================
	//contact form table
		$createContactTable = 	"CREATE TABLE group7.contact
									(
										contactID		INT(6)			NOT NULL	AUTO_INCREMENT,
										contactName		VARCHAR(50)		NOT NULL,
										contactEmail	VARCHAR(100)	NOT NULL,
										contactPhone	VARCHAR(30) 	NOT NULL,
										contactSubject	VARCHAR(100) 	NOT NULL,
										contactMessage	VARCHAR(500) 	NOT NULL,
										comment_status	int(1)			Not Null,

										PRIMARY KEY(contactID)
									)";

		$resultCreateContactTable = mysqli_query($connection, $createContactTable);
		if(!$resultCreateContactTable) {echo "Failed to create contact table<br><br>"; }

	//contact: add
		$contactName = 'name1';
		$contactEmail = "name1@email.com";
		$contactPhone = "021 123 4567";
		$contactSubject = "subject1";
		$contactMessage = "Message 1 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et bibendum quam.
								Phasellus sed augue sit amet mi mollis bibendum. Phasellus convallis vitae ligula
								sed venenatis. Nullam consectetur porttitor cursus.";

		$addContact = 	"INSERT INTO group7.contact (contactName, contactEmail, contactPhone, contactSubject, contactMessage, comment_status)
					VALUES ('$contactName', '$contactEmail', '$contactPhone', '$contactSubject', '$contactMessage', 0)";
		$resultAddContact = mysqli_query($connection, $addContact);
		if(!$resultAddContact) {echo "Failed to add message 1 <br><br>"; }

		//default values
		$contactName = 'name2';
		$contactEmail = "name1@email.com";
		$contactPhone = "021 123 4567";
		$contactSubject = "subject1";
		$contactMessage = "Message 2 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et bibendum quam.
								Phasellus sed augue sit amet mi mollis bibendum. Phasellus convallis vitae ligula
								sed venenatis. Nullam consectetur porttitor cursus.";

		$addContact = 	"INSERT INTO group7.contact (contactName, contactEmail, contactPhone, contactSubject, contactMessage, comment_status)
					VALUES ('$contactName', '$contactEmail', '$contactPhone', '$contactSubject', '$contactMessage', 0)";
		$resultAddContact = mysqli_query($connection, $addContact);
		if(!$resultAddContact) {echo "Failed to add message 2<br><br>"; }

		$contactName = 'name3';
		$contactEmail = "name1@email.com";
		$contactPhone = "021 123 4567";
		$contactSubject = "subject1";
		$contactMessage = "Message 3 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et bibendum quam.
								Phasellus sed augue sit amet mi mollis bibendum. Phasellus convallis vitae ligula
								sed venenatis. Nullam consectetur porttitor cursus.";

		$addContact = 	"INSERT INTO group7.contact (contactName, contactEmail, contactPhone, contactSubject, contactMessage, comment_status)
					VALUES ('$contactName', '$contactEmail', '$contactPhone', '$contactSubject', '$contactMessage', 0)";
		$resultAddContact = mysqli_query($connection, $addContact);
		if(!$resultAddContact) {echo "Failed to add message 3<br><br>"; }

		$contactName = 'name4';
		$contactEmail = "name1@email.com";
		$contactPhone = "021 123 4567";
		$contactSubject = "subject1";
		$contactMessage = "Message 4 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et bibendum quam.
								Phasellus sed augue sit amet mi mollis bibendum. Phasellus convallis vitae ligula
								sed venenatis. Nullam consectetur porttitor cursus.";

		$addContact = 	"INSERT INTO group7.contact (contactName, contactEmail, contactPhone, contactSubject, contactMessage, comment_status)
					VALUES ('$contactName', '$contactEmail', '$contactPhone', '$contactSubject', '$contactMessage', 0)";
		$resultAddContact = mysqli_query($connection, $addContact);
		if(!$resultAddContact) {echo "Failed to add message 4<br><br>"; }
	//end contact form table create + add
//=======================================================================================================================
	mysqli_close($connection);
?>