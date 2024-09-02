<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodePen - Popular Products Section Using HTML , CSS , Bootstrap</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
  <link rel="stylesheet" href="style/book.css">
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="script.js"></script>
  <script >
    (function ($) { // Begin jQuery
      $(function () { // DOM ready
        // If a link has a dropdown, add sub menu toggle.
        $('nav ul li a:not(:only-child)').click(function (e) {
          $(this).siblings('.nav-dropdown').toggle();
          // Close one dropdown when selecting another
          $('.nav-dropdown').not($(this).siblings()).hide();
          e.stopPropagation();
        });
        // Clicking away from dropdown will remove the dropdown class
        $('html').click(function () {
          $('.nav-dropdown').hide();
        });
        // Toggle open and close nav styles on click
        $('#nav-toggle').click(function () {
          $('nav ul').slideToggle();
        });
        // Hamburger to X toggle
        $('#nav-toggle').on('click', function () {
          this.classList.toggle('active');
        });
      }); // end DOM ready
    })(jQuery); // end jQuery

  </script>
  <style>
    table{
      border-collapse: separate;
  border-spacing: 20px;

    }
  </style>
  
</head>

<body>
  <section class="navigation">
    <div class="nav-container">
      <div class="brand">
        <a href="#!" class="logo"><img src="Images/abroad-final.png"></a>
      </div>
      <nav>
        <div class="nav-mobile">
          <a id="nav-toggle" href="#!"><span></span></a>
        </div>
        <ul class="nav-list">
          <!-- Setting the links to #! will ensure that no action takes place on click. -->
          <li><a href="#!">Study Abroad</a>
            <ul class="nav-dropdown">
              <li><a href="#!">Canada</a></li>
              <li><a href="#!">USA</a></li>
              <li><a href="#!">UK</a></li>
            </ul>
          </li>
          <li><a href="#!">Test Prep</a>
            <ul class="nav-dropdown">
              <li><a href="#!">IELTS Academic</a></li>
              <li><a href="#!">IELTS General</a></li>
              <li><a href="#!">PTE</a></li>
            </ul>
          </li>
          <li><a href="Module_books.php">books</a>
            
          </li>
          <li><a href="teacher.php">faculty</a>
            
          </li>
          <?php
          session_start();
          if (isset($_SESSION['log_user'])) { ?>

            <li><a href="#!">
                <?php echo $_SESSION['log_user']; ?>
              </a>
              <ul class='nav-dropdown'>
                <li><a href='#!'>Profile</a></li>
                <li><a href='logout.php'>Log out</a></li>
              </ul>
            </li>
          <?php } else {
            echo "<li id=''><a href='signup.php'><button class='login' type='button' class='btn btn-primary'>login</button></a></li>";
          }
          ?>



        </ul>

      </nav>
    </div>
  </section>
  <?php
  require_once("Connection.php");
  $select = mysqli_query($conn, "SELECT * FROM tbl_addbook");

  ?>
  <h1 style="text-align:center; background-color:tomato;">IELTS BOOKS</h1>
  <table style="margin:6rem auto;">
    <section class="section-1" >

      <div class="container" style="margin:5rem;">
        <?php while ($row = mysqli_fetch_assoc($select)) { ?>

          <td>
            &nbsp;
            <div class="row">

              <div class="col-md-3">

                <div class="card" style="width:15rem;">

                  <a href="book1.php"> <img src="images/<?php echo $row["book_image"] ?>" height="280px"
                      class="card-img-top" alt="..."></a>


                  <div class="card-body">

                    <h4 class="card-text">
                      <?php echo $row['book_name']; ?>
                    </h4>

                    <h4 class="card-text">₹
                      <?php echo $row['book_price']; ?>/-
                    </h4>
                    <a href="book1.php?send=<?php echo $row['id']; ?>" class="btn btn-primary">Buy Now</a>
                  </div>
                </div>
              </div>

            </div>
        </div>
        </td>


      <?php }
        ; ?>
 

    </section>
  </table>

   <!---------footer------->

  
   <?Php
    include 'footer.php';
    ?>

</body>

</html>