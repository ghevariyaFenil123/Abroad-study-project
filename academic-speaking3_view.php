

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/acdemic-reading-style.css">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> 
  
    <style>
         <?php
         include 'navbar-style.css';
         ?>
         body{
            background: #f5f5f5;
         }
         .pdf-container{
          display:flex;
          flex-direction: column;
          justify-content: center;
          flex-wrap: wrap;
          margin: 40px auto;
          max-width:1470px;
         }
         .pdfs-container{
          display:flex;
          flex-direction: row;
          justify-content: center;
          flex-wrap: wrap;
          margin: 40px auto;
          max-width:1470px;
         }
          .read_pdf{
              display: flex;
              flex-direction: column;
              height: 6rem;
              width:30rem;
              background: linear-gradient(#ffffff);
              text-align: center;
              border-radius:11rem;
              box-shadow: 0.3rem .0.5rem rgba(0,0,0,0.5);
              margin:0.8rem;
              cursor:pointer;
              justify-content: center;
              flex-wrap:nowrap;
  
           }
           .view{
               width:70%;
                height:23px;
                color:white;
                background-color: #ff6347;
                border-radius: 10px;
                border:2px solid #ff6347;
                font-size:17px;
                text-decoration:none;
                justify-content: center;
                margin-left:70px;
                margin-bottom:10px;
             }
             audio{
                width:950px;
                border:2px solid #ff6347;
             }
          
          
          
    </style>
    <script>
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

 <!---pre loader--->
 <?Php
        include 'loader.php';
 ?>


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
          <li><a href="academic-listening.php">Listening</a>
          </li>
          <li><a href="academic-reading.php">Reading</a>
          </li>
          <li><a href="#">Writing</a>
            <ul class="nav-dropdown">
              <li><a href="academic-writing1.php">Task 1</a></li>
              <li><a href="academic-writing2.php">Task 2</a></li>
            </ul>
          </li>
          <li><a href="#">Speaking</a>
            <ul class="nav-dropdown">
              <li><a href="academic-speaking1.php">Introduction</a></li>
              <li><a href="academic-speaking2.php">Que card</a></li>
              <li><a href="academic-speaking3.php">Follow up question</a></li>
            </ul>
          </li>
          <li id=""><a href="#!"><button class="login" type="button" class="btn btn-primary">login</button></a></li>
        </ul>

      </nav>
    </div>
  </section>





<!---audio content---------------->

<center>
<div class="pdf-div">
<h1 class="title" style="padding:20px; color:#ff6347; font-size:28px; font-weight:1000;">Practice speaking 1 based on different test</h1>
<div class="pdf-container">
    
  <?php 
		include 'connection.php';

        $id = $_GET['id'];
		 $sql = "SELECT * FROM add_followup WHERE id=".$id;
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($followup = mysqli_fetch_assoc($res)) { 
		 ?> <br> 
    
        <center><audio  src="uploads/<?=$followup['audio_url']?>" type="audio/mp3" controls></audio></center>
        <h4>topic <?php echo "{$followup['topic']}" ?> running....</h4> <br>
         <?php } } ?>
  </div>
</div>
</center>

<!----link of audio---->
<center>
<div class="pdf-div">
  <div class="pdfs-container">
  <?php 
		 include 'connection.php';

		 $sql = "SELECT * FROM add_followup ORDER BY id DESC";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($followup = mysqli_fetch_assoc($res)) { 
		 ?>  
         <div class='read_pdf'>
           <p style="font-size:20px; font-weight:700;"><?=$followup['title']?></p>
           <a href="academic-speaking1_view.php?id=<?=$followup['id']?>" class="view"> Test Topic : <?=$followup['topic']?> </a>
         </div>
    <?php } } ?>
 
  </div>
</div>

</center>
  



<?php
   include 'footer.php';
?>

</body>
</html>