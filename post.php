<link type="text/css" rel="stylesheet" href="Styles.css" />

<?php
	session_start();
	$title = $_SESSION['title'];
	$serverName ="localhost";
 	$dbUserName = "root";
 	$dbPassword ="";
 	$dbName ="data";
 	$connect = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
$sql = "Select *  From posts  Where title = '$title'";
$result = $connect->query($sql);
while($row = $result->fetch_assoc()){
	?><div class = 'posts'>
	<?php
	 echo  '<img src="data:image/jpeg;base64,'  .base64_encode($row['Image']) .'" /><br>"';
	 echo "<h3> Title: ". $row["Title"]."</h3> <br>";
	 echo "By.. ". $row["Author"]."<br><br><br>";
	 echo $row['Text'];
	 ?>
	 </div>
	 <?php

}


?>