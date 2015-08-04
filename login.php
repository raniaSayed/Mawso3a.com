<?php
session_start();
$email = $_POST["email"];
//$name;
$password = $_POST["password"];
//echo $password;

    $serverName ="localhost";
 	$dbUserName = "root";
 	$dbPassword ="";
 	$dbName ="data";
 	$connect = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);
 	// $connect = new PDO("mysql:host=$serverName;dbname=data", $dbUserName, $dbPassword);
    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

$name = "SELECT * FROM `users` WHERE `Email` = '$email'";
$result = $connect->query($name);
while($row = $result->fetch_assoc()){
	$_SESSION["name"] = $row["Name"];
}
$sql = "SELECT * FROM `users` WHERE `Email` = '$email' and `Password` = '$password'";

$result = $connect->query($sql);
if ($result->num_rows > 0) {
	header('Location:'."home.php");

	}
else{
		//return to login.html
	header('Location: ' .'bootstrap-3.3.5\docs\examples\login\login.html');
	
	}
$connect=null;



?>