<?php

include ('db_function.php');
//$response = array();

$result = getUser();	

if(mysqli_num_rows($result)>0) {
	

	$response["user"] = array();
	while ($row = mysqli_fetch_array($result)){
		$data = array();
		$data["id"] = $row["id"];
		$data["Name"] = $row["name"];
		$data["Email"] = $row["email"];
		$data["Pass"] = $row["pass"];
		
		array_push($response["user"], $data);
	}
		if($result){
			$response["success"] = 1;
			$response["message"] = "Successfully Displayed";
			echo json_encode($response);
		}
		else{
			$response["success"] = 0;
			$response["message"] = "Try Again";
			echo json_encode($response);
		}
}
else {
	// no results found
    $response["success"] = 0;
    $response["message"] = "No Details Found";
    echo json_encode($response);
}

if($db == true){
	mysqli_close($db);
}

?>