<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>audio upload quecard</title>
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
	<a href="academic-speaking2.php">quecard audio</a>
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>
	 <form action="upload-quecard.php"
	       method="post"
	       enctype="multipart/form-data">

	 	<input type="file"
	 	       name="my_audio"><br>
		enter title:<input type="text" name="title"><br>
		enter quecard topic:<input type="text" name="topic"><br>
       

	 	<input type="submit"
	 	       name="submit" 
	 	       value="Upload">
	 </form>
</body>
</html>