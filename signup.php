<?php
session_start();
$name = $_POST["name"];
$_SESSION["name"] =$_POST["name"];
$email = $_POST["email"];
$password= $_POST["password"];

 	$serverName ="localhost";
 	$dbUserName = "root";
 	$dbPassword ="";
 	$dbName ="data";
 	$connect = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //insert data
    $sql = "INSERT INTO `users`(`Email`, `Name`, `Password`) VALUES ('$email','$name', '$password');";
	if ($connect->query($sql) === TRUE) {
	    header('Location: ' .'home.php');
	} else {
		echo 'some error occured';
		
		echo "<strong> try another name</strong> ";
	    //echo "Error: " . $sql . "<br>" . $connect->error;
	}

?>