<?php

$name    = $_POST["Name"];
$password= $_POST["password"];
 //	echo $name;
 //	echo $Password;
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
    $sql = "INSERT INTO `users` (` Name`, `Password`) VALUES ('$name', '$password');";
	if ($connect->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
		
		header('Location: ' ."signup.html");
		echo "<strong> try another name</strong> ";
	    //echo "Error: " . $sql . "<br>" . $connect->error;
	}

?>