<?php
	//Connection script. Required by each webpage.

	if(!defined('DB_USER'))
	{
		DEFINE('DB_USER', 'root');
	}
	if(!defined('DB_PASSWORD'))
	{
		DEFINE('DB_PASSWORD', '');
	}
	if(!defined('DB_HOST'))
	{
		DEFINE('DB_HOST', 'localhost');
	}

	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$connection){echo "Failed to connect to the database<br><br>";}
?>