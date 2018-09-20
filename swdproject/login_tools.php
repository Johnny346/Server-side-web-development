<?php

//load login page
function load($page='login.php'){
	$url ='http://'.$_SERVER['HTTP_HOST']. dirname($_SERVER['PHP_SELF']);
	$url = rtrim($url,'/\\');
	$url.='/'.$page;
	header("Location:$url");
	exit();
}

//checking if id and password are in the database if not in the database then store errors in array
function validate($connection, $id ='', $pass = ''){
	$errors = array();

	if(empty($id)){
		$errors[]='Enter your id';
	}else {
		$e = mysqli_real_escape_string($connection, trim($id));
	}

	if(empty($pass)){
		$errors[]='Enter your password';
	}else {
		$p = mysqli_real_escape_string($connection, trim($pass));
	}
	if(empty($errors)){
		$q= "SELECT employeeID, employeeName
			FROM group7.employees
			WHERE employeeID = '$e'
			AND employeePassword = SHA1('$p')"; //should use SHA1('$p') to get encripted passwords but passwords must be encripted before being added to database

		$r = mysqli_query($connection,$q);
		if(mysqli_num_rows($r) == 1){
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
			return array(true, $row);
		}else{
			$errors[] = 'ID and password not found';
		}
	}


	return array(false, $errors);
}

?>