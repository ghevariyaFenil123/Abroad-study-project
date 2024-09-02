

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
            .score{
            background-color:white;
            padding-bottom:30px;
            padding-top:30px;
          }

          .score .score-container{
             display:flex;
             justify-content: center;
             flex-wrap: wrap;
             margin: 40px auto;
            }

           .score .score-container .scoring{
              display: flex;
              flex-direction: column;
              height: 23rem;
              width:15rem;
              background: linear-gradient(#f5f5f5);
              text-align: center;
              border-radius:1rem;
              box-shadow: 0.3rem .0.5rem rgba(0,0,0,0.5);
              margin:1rem;
              cursor:pointer;
              justify-content: center;
              flex-wrap:nowrap;
  
           }
          .score .scoring img{
             width:240px;
            height:260px;
            border-radius:1rem ;
            }

          .score-head{
              padding-top:10px;
             font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
             text-align: center;
          }
          .scoring audio{
            width:100%;
            margin-top:8px;
          
          }
          .pdf-container{
          background: linear-gradient(#ffffff);
          margin-top:20px;
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
          
          
          
    </style>
    <!--<script>
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

  </script>-->
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

  <section id="reading">
        <div class="container reading-container">
            <div class="reading-page">
                <div class="reading-img">
                    <img src="images/speaking-module2.jpg">
                </div>
                <div class="reading-text">
                In IELTS Speaking Part 2, the examiner will give you a cue card or a task card which will consist of 3-4 questions along with some instructions on how to answer the topics. Once you get the topic, you’ll be given one minute to prepare yourself on the given topic, after which you will have to speak for around 1-2 minutes until the examiner asks you to stop.
                
                <div class="type">
                  <p style="color:#ff6347;">	&#9711; Practice Using Sample Cue Cards</p>
                  <p>Describe a country you have visited.</p>
                  <p>Where is this country?</p>
                  <p>When did you visit it?</p>
                  <p>What are the interesting things about this country?</p>
                  
                </div>
                </div>
            </div>
        </div>
<section>


<div class="score">
    <h1 class="score-head">Practice speaking part2 by audio</h1>
    <div class="score-container">
   <?php
   include 'connection.php';
   ?>

    <?php 
		 $sql = "SELECT * FROM quecard ORDER BY id DESC LIMIT 3";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($audio = mysqli_fetch_assoc($res)) { 
		 ?>  
        <div class='scoring'>
           <img src="images/speaking-part2.png">
           <audio src="uploads/<?=$audio['audio_url']?>" type="audio/mp3" controls></audio>
           
           <h1><?php echo "{$audio['title']}" ?></h1>
         </div>
         <?php } } ?>

    </div>
  </div>

<!----link of audio2---->
<center>
<div class="pdf-div">
  <h1 class="title" style="padding:20px; color:#ff6347; font-size:28px; font-weight:1000;">Practice speaking 2 based on different test</h1>
  <div class="pdf-container">
  <?php 
		 include 'navbar.php';
 
		 $sql = "SELECT * FROM quecard ORDER BY id DESC";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($intro = mysqli_fetch_assoc($res)) { 
		 ?>  
         <div class='read_pdf'>
           <p style="font-size:20px; font-weight:700;"><?=$intro['title']?></p>
           <a href="academic-speaking2_view.php?id=<?=$intro['id']?>" class="view"> Test Topic : <?=$intro['topic']?> </a>
         </div>
    <?php } } ?>
 
  </div>
</div>


<!---footer-------->
<?php
   include 'footer.php';
?>


</body>
</html>