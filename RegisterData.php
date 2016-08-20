<?php

$con = mysqli_connect("mysql7.000webhost.com", "a2731980_Debsoft", "2don2lin",  "a2731980_deb001");


$name = $_POST["name"];
$age = $_POST["age"];
$username = $_POST["username"];
$password = $_POST["password"];

$statement = mysqli_prepare($con, "INSERT INTO user (name, age, username, password)VALUE (?,?,?,?)");
$mysqli_stmt_bind_param($statement, "siss" , $name, $age, $username, $password);
$mysqli_stmt_execute($statement);

$response = array();
$response["success"] = ture;


echo json_encodde($response);	

?>	
