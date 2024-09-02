<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admin/admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <title>Document</title>
</head>




<body>
<div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <h1><a style="color:white;" href="index.html"><span>Abroad Study</span></a></h1>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="#"><span class="fa fa-home mr-3"></span>User Manage</a>
                    </li>
                    <li>
                        <a href="bookmanage.php"><span class="fa fa-user mr-3"></span>Book Manage</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-briefcase mr-3"></span> Works</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-sticky-note mr-3"></span> Blog</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-suitcase mr-3"></span> Gallery</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-cogs mr-3"></span> Services</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
                    </li>
                </ul>
                <div class="footer">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Abroad study</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </nav>
       
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
        <?php
                $host="localhost";
                 $user="root";
                 $password="";
                $db="abroad study";
                $data=mysqli_connect($host,$user,$password,$db);

                $image_upload = $user_name = $band = "";
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                     $user_name = trim($_POST["user_name"]);
                     $band = $_POST["band"];
                     $image_upload = $_FILES["image_upload"]['name'];
                     mysqli_query($data, "Insert into score(name,score,image) values('$user_name','$band','$image_upload')");
                     echo "<script>alert('Inserted successfully'); window.location.href='test.php';</script>";
  }
  
            ;

            if (isset($_GET['delete'])) {
                $id = $_GET['delete'];
                mysqli_query($data, "DELETE FROM score WHERE id = $id");
                header('location:add-score.php');
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

                    

                    <form action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="post">
                    <h3>add a new score</h3>
                    <input type="text" placeholder="enter user name" name="user_name" class="box">
                    <input type="text" placeholder="enter band " name="band" class="box">
                    <input type="file" placeholder="enter image" name="image_upload" class="box">
                     <input type="submit"  class="btn" value="Sign up" />
  </form>

                </div>

                <?php

                $select = mysqli_query($data, "SELECT * FROM  score");

                ?>
                <div class="product-display">
                    <table class="product-display-table">
                        <thead>
                            <tr>
                                <th>image</th>
                                <th>name</th>
                                <th>band</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                            <tr>
                            <td><img  src='images/<?php $row["image"]?>' width="100px" height="100px" >
                            
                                <td>
                                    <?php echo $row['name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['score']; ?>/-
                                </td>
                                <td>
                                    <a href="bookedit.php?edit=<?php echo $row['id']; ?>" class="btn"> <i
                                            class="fas fa-edit"></i> edit </a>
                                    <a href="add-score.php?delete=<?php echo $row['id']; ?>" class="btn"> <i
                                            class="fas fa-trash"></i> delete </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>

            </div>
        </div>
    
                        

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>