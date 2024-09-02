<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>follow up</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
		input {
			font-size: 2rem;
		}
		a {
			text-decoration: none;
			color: #006CFF;
			font-size: 1.5rem;
		}
	</style>
</head>
<body>
	<a href="academic-speaking3.php">follow up</a>
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>
	 <form action="upload-followup.php"
	       method="post"
	       enctype="multipart/form-data">

	 	<input type="file"
	 	       name="my_audio"><br>
		enter title:<input type="text" name="title">
		enter followup topic:<input type="text" name="topic">
       

	 	<input type="submit"
	 	       name="submit" 
	 	       value="Upload">
	 </form>
</body>
</html>