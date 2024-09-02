<?php 

if (isset($_POST['submit']) && isset($_POST['title']) && isset($_POST['url'])) {
	$sname = "localhost";
     $uname = "root";
     $password = "";
     
     $db_name = "abroad study";
     
     $conn = mysqli_connect($sname, $uname, $password, $db_name);
	 
	$title = $_POST['title'];
	$url = $_POST['url'];
    
	// Now let's Insert the audio path into database
	$sql = "INSERT INTO `pdf_reading`(`title`, `url`) 
			VALUES('".$title."', '".$url."')";
	mysqli_query($conn, $sql);
	header("Location: academic-reading.php");


}else{
	header("Location: index.php");
}
?>