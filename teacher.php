<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/index.css">
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  
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


  <script src="https://unpkg.com/scrollreveal"></script>
  <title>Document</title>

  <style>
    .score .score-container{
  display:flex;
  justify-content: center;
  flex-wrap: wrap;
  margin-bottom:30px;
  

}

.score .score-container .scoring{
  display: flex;
  flex-direction: column;
  height: 29rem;
  width:16.6rem;
  background: linear-gradient(#ff6347,#ffffff);
  text-align: center;
  border-radius:1rem;
  box-shadow: 0.3rem .0.5rem rgba(0,0,0,0.5);
  margin:1rem;
  cursor:pointer;
  justify-content: center;
  flex-wrap: wrap;
  
}
 .score .scoring img{
  width:240px;
  height:270px;
  border-radius:1rem 1rem 0 0;
  margin:14px;
}


.scoring p1{
  font-size: 17px;
  font-weight: 400;
  padding:6px;
  text-align:left;
  margin-left:23px;
}
.scoring h2{
  margin-bottom:10px;
  border:2px solid #ff6347;
  color:white;
  width:230px;
  background-color:#ff6347;
  margin-left:19px;
}
.score-head{
  padding-top:10px;
  font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  text-align: center;
}
    
  </style>
</head>

<body>


   <!---pre loader--->
 <?Php
        include 'loader.php';
 ?>
 <!---navbar--->

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
              <li><a href="academic-reading.php">PTE</a></li>
            </ul>
          </li>
          <li><a href="Module_books.php">books</a>
            
          </li>
          <li><a href="teacher.php">faculty</a></li>
          <?php 
           //session_start(); 
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




  <!-----about us page----->
  <div class="about">
    <div class="about-container">
      <div class="textblock">
        <h1 class="title">Best teachers for your academic success.</h1>
        <h4 class="sub-title">Consultations for prospective immigrants</h4>
        <p>ABROAD STUDY is an Immigration and Education consultancy that caters the needs of fulfilling the dreams of
          aspirants willing to study or migrate permanently to a developed country.</p>
        <p>With a substantial experience in the immigration industries, the workforce at ORPHIC imparts exceptional
          personalized services rendering absolute gratification to its clients.</p>
        <a href="#" class="btn">Learn more</a>
      </div>

      <img  class="about-img" src="Images/faculty.jpg" alt="none">
    </div>
  </div>

  <!-----teachers page------->
 
  <center><h1 class="title" style="padding-top:50px; color:#ff6347; font-size:28px; font-weight:1000;">Our teachers</h1></center>
    <div class="score"><br>
    <div class="score-container">
      
      <?php
      $host="localhost";
      $user="root";
      $password="";
      $db="abroad study";
      $data=mysqli_connect($host,$user,$password,$db);

       $sql="select * from teacher";
       $res=mysqli_query($data,$sql);
       if(mysqli_num_rows($res)>0)
       {
        while($result= mysqli_fetch_array($res)){?>
        <div class='scoring'>
        <img class='score-pic' src='images/<?=$result["images"]?>' >
        <h2><?php echo "{$result['teacher_name']}" ?></h2>
        <p1><?php echo " <b>experiance</b>: {$result['experiance']}" ?></p1>
        <p1><?php echo " <b>skills:</b> {$result['skills']}" ?></p1> 
        <p1><?php echo " <b>education:</b> {$result['education']}" ?></p1> 
        <p1><?php echo " <b>age:</b> {$result['age']}" ?></p1>  
        </div>
        <?php }} ?>
      
    </div>
        
  </div>

  <!---------footer------->

  
    <?Php
    include 'footer.php';
    ?>



 

  <script>
      ScrollReveal({
         reset: true,
         distance: '70px', 
         duration: 2500,
         delay: 400
      });

      ScrollReveal().reveal('.about-img', {delay: 250, origin: 'bottom'});
      

   </script>

</body>

</html>