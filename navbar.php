<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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

</head>
<body>
<section class="navigation" >
    <div class="nav-container">
      <div class="brand">
        <a href="index.php" class="logo"><img src="Images/abroad-final.png"></a>
      </div>
      <nav>
        <div class="nav-mobile">
          <a id="nav-toggle" href="#!"><span></span></a>
        </div>
        <ul class="nav-list">
          <!-- Setting the links to #! will ensure that no action takes place on click. -->
          <li><a href="#">Study Abroad</a>
            <ul class="nav-dropdown">
              <li><a href="#!">Canada</a></li>
              <li><a href="#!">USA</a></li>
              <li><a href="#!">UK</a></li>
            </ul>
          </li>
          <li><a href="#">Test Prep</a>
            <ul class="nav-dropdown">
              <li><a href="academic-reading.php">IELTS Academic</a></li>
              <li><a href="academic-reading.php">IELTS General</a></li>
              
            </ul>
          </li>
          <li><a href="module_books.php">Books</a>
            
          </li>
          
          <li><a href="teacher.php">faculty</a></li>
          <?php 
           session_start(); 
           if(isset($_SESSION['log_user']))
           {?>
            
               <li><a href="#!" ><?php echo $_SESSION['log_user']; ?></a>
            <ul class='nav-dropdown'>
              <li><a href='#!'>Profile</a></li>
              <li><a href='logout.php'>Log out</a></li>
            </ul>
          </li> 
           <?php }
           else{ 
            echo"<li id=''><a href='signup.php'><button class='login' type='button' class='btn btn-primary'>login</button></a></li>";
            }
          ?>
        </ul>

      </nav>
    </div>
  </section>
</body>
</html>