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
 //	 $connect = new PDO("mysql:host=$serverName;dbname=data", $dbUserName, $dbPassword);

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

$sql = "SELECT * FROM `users` WHERE ` Name` = '$name' and `Password` = '$password'";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
	header('Location:'."home.php");

	}
else{
		//return to login.html
	header('Location: ' ."login.html");
	}
$connect=null;



?>