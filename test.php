<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root {
  --green: #27ae60;
  --black: #333;
  --white: #fff;
  --bg-color: #eee;
  --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
  --border: .1rem solid var(--black);
}

* {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none;
  text-transform: capitalize;
}

html {
  font-size: 62.5%;
  overflow-x: hidden;
}

.btn {
  display: block;
  width: 100%;
  cursor: pointer;
  border-radius: .5rem;
  margin-top: 1rem;
  font-size: 1.7rem;
  padding: 1rem 3rem;
  background-color: rgb(255, 106, 0);
  color: var(--white);
  text-align: center;
}

.btn:hover {
  background: var(--black);
}

.message {
  display: block;
  background: var(--bg-color);
  padding: 1.5rem 1rem;
  font-size: 2rem;
  color: var(--black);
  margin-bottom: 2rem;
  text-align: center;
}

.container {
  max-width: 1200px;
  padding: 2rem;
  margin: 0 auto;
}

.admin-product-form-container.centered {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;

}

.admin-product-form-container form {
  max-width: 50rem;
  margin: 0 auto;
  padding: 2rem;
  border-radius: .5rem;
  background: var(--bg-color);
}

.admin-product-form-container form h3 {
  text-transform: uppercase;
  color: var(--black);
  margin-bottom: 1rem;
  text-align: center;
  font-size: 2.5rem;
}

.admin-product-form-container form .box {
  width: 100%;
  border-radius: .5rem;
  padding: 1.2rem 1.5rem;
  font-size: 1.7rem;
  margin: 1rem 0;
  background: var(--white);
  text-transform: none;
}

.product-display {
  margin: 2rem 0;
}

.product-display .product-display-table {
  width: 100%;
  text-align: center;
}

.product-display .product-display-table thead {
  background: var(--bg-color);
}

.product-display .product-display-table th {
  padding: 1rem;
  font-size: 2rem;
}


.product-display .product-display-table td {
  padding: 1rem;
  font-size: 2rem;
  border-bottom: var(--border);
}

.product-display .product-display-table .btn:first-child {
  margin-top: 0;
}

.product-display .product-display-table .btn:last-child {
  background: crimson;
}

.product-display .product-display-table .btn:last-child:hover {
  background: var(--black);
}







@media (max-width:991px) {

  html {
    font-size: 55%;
  }

}

@media (max-width:768px) {

  .product-display {
    overflow-y: scroll;
  }

  .product-display .product-display-table {
    width: 80rem;
  }

}

@media (max-width:450px) {

  html {
    font-size: 50%;
  }

}
    </style>
</head>

<body>
        
        <?php
         include'Admin_navbar.php';
        ?>
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <?php

            require_once("Connection.php");

            if (isset($_POST['add_book'])) {

                $book_name = $_POST['book_name'];
                $book_price = $_POST['book_price'];
                $book_image = $_FILES['book_image']['name'];
                $book_image_tmp_name = $_FILES['book_image']['tmp_name'];
                $book_image_folder = 'uploaded_img/' . $book_image;

                if (empty($book_name) || empty($book_price) || empty($book_image)) {
                    $message[] = 'please fill out all';
                } else {
                    $insert = "INSERT INTO tbl_addbook(book_name, book_price, book_image) VALUES('$book_name', '$book_price', '$book_image')";
                    $upload = mysqli_query($conn, $insert);
                    if ($upload) {
                        move_uploaded_file($book_image_tmp_name, $book_image_folder);
                        $message[] = 'new product added successfully';
                    } else {
                        $message[] = 'could not add the product';
                    }
                }

            }
            ;

            if (isset($_GET['delete'])) {
                $id = $_GET['delete'];
                mysqli_query($conn, "DELETE FROM tbl_addbook WHERE id = $id");
                header('location:bookmanage.php');
            }
            ;





            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<span class="message">' . $message . '</span>';
                }
            }

            ?>

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

                <?php

                $select = mysqli_query($conn, "SELECT * FROM tbl_addbook");

                ?>
                <div class="product-display">
                    <table class="product-display-table">
                        <thead>
                            <tr>
                                <th>product image</th>
                                <th>product name</th>
                                <th>product price</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                            <tr>
                                <td><img src="uploaded_img/<?php echo $row['book_image']; ?>" height="100" alt=""></td>
                                <td>
                                    <?php echo $row['book_name']; ?>
                                </td>
                                <td>₹
                                    <?php echo $row['book_price']; ?>/-
                                </td>
                                <td>
                                    <a href="bookedit.php?edit=<?php echo $row['id']; ?>" class="btn"> <i
                                            class="fas fa-edit"></i> edit </a>
                                    <a href="bookmanage.php?delete=<?php echo $row['id']; ?>" class="btn"> <i
                                            class="fas fa-trash"></i> delete </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>