<?php

$con = mysqli_connect("mysql7.000webhost.com", "a2731980_Debsoft", "2don2lin",  "a2731980_deb001");

$username = $_POST["username"];
$password = $_POST["username"];

$statement = mysqli_prepare($con, "SELECT * FROM user WHERE username =? AND password =?");
$mysqli_stmt_bind_param($statement, "ss"  $username, $password);
$mysqli_stmt_execute($statement);

$mysqli_stmt_store_result($statement);
$mysqli_stmt_bind_result($statement, userID, $name, $age, $username, $password);

$response = array();
$response["success"] = false;


while(msqi_stmt_fetch(statement)){
	$response["seccess"] = ture;
	$response["name"] = $name;
	$response["age"] = $age; 
	$response["username"] = $username;
	$response["password"] = $password;	
	}
	

echo json_encodde($response);	

?>	
