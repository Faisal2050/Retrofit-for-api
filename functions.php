<?php
include('db_config.php');



function insertUser($name,$email,$pass)
{
	global $db;
	$result = mysqli_query($db, "INSERT INTO users(name,email,password)
	VALUES ('$name','$email','$pass')")or die(mysqli_error($db));
	
	return $result;
}
?>