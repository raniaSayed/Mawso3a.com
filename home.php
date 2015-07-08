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
	$_SESSION['title'] = $row["Title"];
	 echo  '<img src="data:image/jpeg;base64,'  .base64_encode($row['Image']) .'" /><br>"';
	 echo "<a href='post.php'><h3>". $row["Title"]."</h3> <br>";
	 echo "By.. ". $row["Author"];
}
 
?>
</div>
</body>
</html>