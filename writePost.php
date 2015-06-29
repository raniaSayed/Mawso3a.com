<?php
	session_start();
	$serverName ="localhost";
 	$dbUserName = "root";
 	$dbPassword ="";
 	$dbName ="data";
 	$connect = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
	
	$userName = $_SESSION["name"];
	$title = $_POST["title"];
	$post = $_POST["text"];
	$image = mysqli_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
	$date =date("Y/m/d");
	echo $userName;
	echo $title;
	echo $post;
	echo $date;
	echo ($image);
	//insert post if current user != null;
	$sql = "INSERT INTO `posts`(`Author`, `Date`, `Title`,`Text`) 
		VALUES ('$userName','$date','$title','$post')";
	if ($connect->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
		
		include("writePost.html");
		echo "<Strong>Failed!!</Strong";
		
	}
	

?>