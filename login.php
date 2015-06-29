<?php
session_start();
$name = $_POST["name"];
$_SESSION["name"] = $name;
echo $_SESSION["name"] ;
$password = $_POST["password"];
//echo $password;
$serverName ="localhost";
 	$dbUserName = "root";
 	$dbPassword ="";
 	$dbName ="data";
 	$connect = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

$sql = "SELECT * FROM `users` WHERE ` Name` = '$name' and `Password` = '$password'";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
	include("home.html");

	}
	else{
		//return to login.html
		include("login.html");
	}






?>