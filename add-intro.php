<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>audio upload php and mysql</title>
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
	<a href="academic-speaking1.php">audio</a>
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>
	 <form action="upload-intro.php"  method="post" enctype="multipart/form-data">

	 	<input type="file"
	 	       name="my_audio"><br>
		enter title:<input type="text" name="title">

		
		enter topic name:<input type="text" name="topic">
       
       

	 	<input type="submit"
	 	       name="submit" 
	 	       value="Upload">
	 </form>



	 <div class="container">

<div class="admin-product-form-container">

	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
		<h3>add a new product</h3>
		<input type="text" placeholder="enter book name" name="book_name" class="box">
		<input type="number" placeholder="enter book price" name="book_price" class="box">
		<input type="file" accept="image/png, image/jpeg, image/jpg" name="book_image" class="box">
		<input type="submit" class="btn" name="add_book" value="add book">
	</form>

</div>


</body>
</html>