<html>
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
	<div id ="logout"><li><a href = "index.html"> Logout</a></li></div>
	<li> <a href="#"></a></li>
	<li> <a href="#"></a></li>
	<li> <a href="#"></a></li>
	<li> <a href="#"></a></li>
	<li> <a href="#"></a></li>
	<li> <a href="#"></a></li>
	<li> <a href="writePost.html">Write New Post</a></li>
	<li> <a href="user.php"><?php session_start();  echo $_SESSION["name"];?></a></li>
	
	
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
	?>
	<div class="e1">
	<?php 
	$title = $row["Title"];
	
	 echo "<a href = 'post.php?Title= $title'>" 
	 		. '<img src="data:image/jpeg;base64,'  
			.base64_encode($row['Image']) .'" />';
	 echo "<h3>". $row["Title"]."</h3></a> <br>";
	 echo "By.. ". $row["Author"];
	 ?>
	 </div>
	 <?php 

}
?>
</div>
</body>
</html>