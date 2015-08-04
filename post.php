<link type="text/css" rel="stylesheet" href="Styles.css" />
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
    $title =$_GET['Title'];
    echo $title ;
	$sql = "SELECT * FROM `posts` WHERE `Title` = ' ".$title." ' ";
	$result = $connect->query($sql);
	while ($row = $result->fetch_assoc()){
		
		  echo  '<img src="data:image/jpeg;base64,'  .base64_encode($row['Image']) .'" /><br>';
		  echo "<h3> Title: ". $title."</h3> <br>";
		  echo "By.. ". $row["Author"]."<br><br><br>";
		  echo "<p>".$row['Text']."</p>";
		
		  
	}
	
		 ?>
		 