<?php

include ('db_function.php');
$response = array();
 
 
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];


if (isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['pass']))
	{
 
	$result=insertUser($name,$email,$pass);
	if ($result) {
        $response["success"] = 1;
        $response["message"] = "Successfully saved";
		echo json_encode(array("user"=>$response));
    } 
	else {
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred."; 
        echo json_encode($response);
    }
	
} 
else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";  
    echo json_encode($response);
}
 

?>