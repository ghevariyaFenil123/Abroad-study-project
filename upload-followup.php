<?php 

if (isset($_POST['submit']) && isset($_FILES['my_audio'])) {
	//include "db_conn.php";
  include 'connection.php';

    $title = $_POST["title"];
	$topic = $_POST["topic"];
    $audio_name = $_FILES['my_audio']['name'];
    $tmp_name = $_FILES['my_audio']['tmp_name'];
    $error = $_FILES['my_audio']['error'];

    if ($error === 0) {
    	$audio_ex = pathinfo($audio_name, PATHINFO_EXTENSION);
    	$audio_ex_lc = strtolower($audio_ex);

    	$allowed_exs = array("mp3", "3gp", "m4a", "mav","m3u","ogg");

    	if (in_array($audio_ex_lc, $allowed_exs)) {
    		
    		$new_audio_name = uniqid("audio-", true). '.'.$audio_ex_lc;
    		$audio_upload_path = 'uploads/'.$new_audio_name;
    		move_uploaded_file($tmp_name, $audio_upload_path);

    		// Now let's Insert the audio path into database
            $sql = "INSERT INTO add_followup  (audio_url,title,topic) 
                   VALUES('$new_audio_name','$title','$topic')";
            $result=mysqli_query($conn, $sql);
			if($result){
				echo '<script>alert("followup added sucessfully")</script>';
			}
            //header("Location: academic-speaking3.php");
    	}else {
    		$em = "You can't upload files of this type";
    		header("Location: add-followup.php?error=$em");
    	}
    }


}else{
	header("Location: index.php");
}
?>