<html >
<head>
	<title> Mawso3a </title>
	<link type="text/css" rel="stylesheet" href="header.css" />
</head>
<body>
	<div id="header">
	<div id="container">
	<div id="nav">
	<ul>
	<li> <a href="#">Contact us</a></li>
	<li> <a href="#">Magazine</a></li>
	<li> <a href="#">Projects</a></li>
	<li> <a href="#">HOME</a></li>
	</ul>
	</div>
	</div>
	</div>
</body>
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
if($row = $result->fetch_assoc()){
	
}



?>
<a href="WritePost.html">WritePost</a>
</html>