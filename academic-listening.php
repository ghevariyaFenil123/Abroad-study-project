

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
    <style>
         <?php
         include 'navbar-style.css';
         ?>

         .vedio-container{
          background: linear-gradient(#f5f5f5,#ffffff,#f5f5f5);
          
          padding:20px;
          margin-top:20px;
         }
        
         @media only screen and (max-width:1100px)
          {
           .vedio{
             width:440px;
             height:450px;
            
           }
          }
          @media only screen and (max-width:600px)
          {
           .vedio{
             width:230px;
             height:320px;
           }
          }

          .view-vedio{
               display:flex;
               flex-direction:column;
               
          }
          .pdf-div{
            display:flex;
            flex-direction:row;
            flex-wrap:wrap;
            justify-content:center;
           
          }
          button{
            width:100px;
            height:40px;
            border-radius:1rem;
            background-color:#ff6347;
            color:white;
            font-size:19px;
            margin-bottom:10px;

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
<!------reading head----->
<section id="reading">
        <div class="container reading-container">
            <div class="reading-page">
                <div class="reading-img">
                    <img src="images/listening-module.jpg">
                </div>
                <div class="reading-text">
                In an IELTS Listening test, you would have to listen to a few audio recordings played by the examiner and answer the questions given below. These audio recordings will be in the form of monologues or conversations between two or more people.
                <div class="type">
                  <p style="color:#ff6347;">	&#9711; Types of questions/tasks in IELTS Listening</p>
                  <p>Multiple Choice Questions</p>
                  <p>Map Labeling questions</p>
                  <p>Sentence Completion</p>
                  <p>Match questions</p>
                  <p>Sentence completion and Short-answer Questions</p>
                  <p>Note, Table, Diagram and Summary Completion Questions</p>
                </div>
                </div>
            </div>
        </div>
<section>

<div id="score">
   <center>
   <div class="title">
    <h1>Ietls academic score table</h1>

   </div>
   
   <div class="table-container">
   <table class="table">
   <thead>
     
       <th>correct answer</th>
       <th>band score</th>
     
   </thead>
   <tbody>
     <tr>
         <td data-label="correct answer">39-40</td>
         <td data-label="band score">9</td>
     </tr>
     <tr>
         <td data-label="correct answer">38-37</td>
         <td data-label="band score">8.5</td>
     </tr>
     <tr>
         <td data-label="correct answer">36-35</td>
         <td data-label="band score">8</td>
     </tr>
     <tr>
         <td data-label="correct answer">34-33</td>
         <td data-label="band score">7.5</td>
     </tr>
     <tr>
         <td data-label="correct answer">32-30</td>
         <td data-label="band score">7</td>
     </tr>
     <tr>
         <td data-label="correct answer">29-27</td>
         <td data-label="band score">6.5</td>
     </tr>
     <tr>
         <td data-label="correct answer">26-23</td>
         <td data-label="band score">6</td>
     </tr>
     <tr>
         <td data-label="correct answer">22-19</td>
         <td data-label="band score">5.5</td>
     </tr>
     <tr>
         <td data-label="correct answer">18-15</td>
         <td data-label="band score">5</td>
     </tr>
     <tr>
         <td data-label="correct answer">14-13</td>
         <td data-label="band score">5</td>
     </tr>
     <tr>
         <td data-label="correct answer">14-13</td>
         <td data-label="band score">4.5</td>
     </tr>
     <tr>
         <td data-label="correct answer">12-10</td>
         <td data-label="band score">4</td>
     </tr>
     <tr>
         <td data-label="correct answer">9-8</td>
         <td data-label="band score">3.5</td>
     </tr>
     <tr>
         <td data-label="correct answer">7-6</td>
         <td data-label="band score">3</td>
     </tr>
     <tr>
         <td data-label="correct answer">5-4</td>
         <td data-label="band score">2.5</td>
     </tr>
   </tbody>
   </table>
   </div>
   </center>
     

<br>
<!---listening conetnt---------------->

<center>
<div class="vedio-container">
  <h1 class="title" style="padding:20px; color:#ff6347; font-size:28px; font-weight:1000;">Practice IELTS Reading based on test</h1>
  <div class="pdf-div">
  <?php 
		 $sname = "localhost";
     $uname = "root";
     $password = "";
     
     $db_name = "abroad study";
     
     $conn = mysqli_connect($sname, $uname, $password, $db_name);

		 $sql = "SELECT * FROM pdf_listening ";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($pdf = mysqli_fetch_assoc($res)) { 
		 ?>  
     <div class="view-vedio">
        <iframe width="550" class="vedio" style="margin:10px;  border:2px solid #ff6347;" height="415" src="<?= $pdf['source'] ?>" frameborder="0"></iframe>
        <button>view</button>
      </div>
  <?php } } ?>
         
  
  </div>
</div>

</center>

<!---footer-------->
<?php
   include 'footer.php';
?>



</body>
</html>