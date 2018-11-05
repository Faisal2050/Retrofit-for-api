<?php
include('db_config.php');



function insertUser($name,$email,$pass)
{
	global $db;
	$result = mysqli_query($db, "INSERT INTO users(name,email,pass)
	VALUES ('$name','$email','$pass')")or die(mysqli_error($db));
	
	return $result;
}

	
	function getUser()
	{
		global $db;
		
		$result = mysqli_query($db,"SELECT * FROM users ")
		or die(mysqli_error($db));
		return $result;
	}
	


	


	




?>