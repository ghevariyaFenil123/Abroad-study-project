<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>writing task 1 pdfs</title>
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


<!---writing2 pdf upload in website-->
<h1>upload writing2 pdf </h1>
	<a href="view.php">pdf</a>
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>
	 <form action="upload-writing2-pdf.php" method="post">

	 	Enter title: <input type="title"  name="title"><br>
		Enter pdf url: <input type="url"  name="url"><br>

	 	<input type="submit" name="submit" value="save">
	 </form>
</body>
</html>