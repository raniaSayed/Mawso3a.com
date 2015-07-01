<?php
session_start();
$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "data";
$connect = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

// Check connection
if (!$connect) {
	die("Connection failed: " . mysqli_connect_error());
}

$userName = $_SESSION["name"];
$title = $_POST["title"];
$post = $_POST["text"];
$date = date("Y/m/d");
echo $userName;
echo $title;
echo $post;
echo $date;
$file = $_FILES['image']['tmp_name'];
$image = file_get_contents($file);
$image = addslashes($image);
//echo $image;
//insert post if current user != null;
$sql = "INSERT INTO `posts`(`Author`, `Date`,`Image`, `Title`,`Text`) 
		VALUES ('$userName','$date', '$image', '$title', '$post')";
if ($connect -> query($sql) === TRUE) {
	header('Location: ' . "home.php");
} else {
	header('Location: ' . "writePost.html");
	echo "<Strong>Failed!!</Strong";

}
?>