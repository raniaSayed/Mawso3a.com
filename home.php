<html >
<head>
	<title> Mawso3a </title>
	<link type="text/css" rel="stylesheet" href="header.css" />
	<link type="text/css" rel="stylesheet" href="Styles.css" />
</head>
<body>
	<div id="header">
	<div id="container">
	<div id="nav">
	<ul>
	<li> <a href="#"></a></li>
	<li> <a href="#"></a></li>
	<li> <a href="writePost.html">Write New Post</a></li>
	<li> <a href="user.php"><?php session_start(); echo $_SESSION["name"];?></a></li>
	
	</ul>
	</div>
	</div>
	</div>
	
<div class="style">
<?php 
    $serverName ="localhost";
 	$dbUserName = "root";
 	$dbPassword ="";
 	$dbName ="data";
 	$connect = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
$sql = "Select * From posts";
$result = $connect->query($sql);
while($row = $result->fetch_assoc()){
	 echo  '<img src="data:image/jpeg;base64,'  .base64_encode($row['Image']) .'" /><br>"';
	 echo  $row["Title"] ."</a> <br>";
	 echo "By.. ". $row["Author"];
}
 function findPost($title){
 	$serverName ="localhost";
 	$dbUserName = "root";
 	$dbPassword ="";
 	$dbName ="data";
 	$connect = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);
	
 	$sql = "Select * From posts Where title =".$title ;
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
	return $row;
 }
?>
</div>
</body>
</html>