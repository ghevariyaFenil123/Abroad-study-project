

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
         .pdf-container{
          background: linear-gradient(#f5f5f5,#ffffff,#f5f5f5);
          margin-top:20px;
          display:flex;
          flex-direction: row;
          justify-content: center;
          flex-wrap: wrap;
          margin: 40px auto;
          max-width:1470px;
         }
         .pdf{
          width:1000px;
          height:550px;
         }
         
          @media only screen and (max-width:1100px)
          {
           .pdf{
             width:470px;
             height:450px;
           }
          }
          @media only screen and (max-width:600px)
          {
           .pdf{
             width:250px;
             height:320px;
           }
          }
           .read_pdf{
              display: flex;
              flex-direction: column;
              height: 8rem;
              width:19rem;
              background: linear-gradient(#ff6347,#ffffff);
              text-align: center;
              border-radius:11rem;
              box-shadow: 0.3rem .0.5rem rgba(0,0,0,0.5);
              margin:0.8rem;
              cursor:pointer;
              justify-content: center;
              flex-wrap:nowrap;
  
           }
           .view{
                width:70px;
                height:23px;
                color:white;
                background-color: #ff6347;
                border-radius: 10px;
                border:2px solid #ff6347;
                font-size:17px;
                text-decoration:none;
                justify-content: center;
                margin-left:115px;
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
                    <img src="images/writing task 1.png">
                </div>
                <div class="reading-text">
                IELTS writing task 1 is the first part of the IELTS Writing module. It calculates to only 33% of the writing marks. Task 1 is different for the Academic and General modules. The difference between the modules are given below:
                    In the IELTS Academic writing task 1, you will be provided with a graph/chart/diagram for which you would have to write a 150-word description.
                <div class="type">
                  <p style="color:#ff6347;">	&#9711; Before you begin your IELTS writing task 1, you should be conscious of the following:</p>
                  <p>Read the question and instructions carefully before you begin the task.</p>
                  <p>Look at the chart/diagram/graph carefully and process the information.</p>
                  <p>Start planning on the structure and details for the task.</p>
                  <p>Pay attention to spellings, grammar, sentence types, lexical resources, coherence and cohesion, fillers, etc.</p>
                 
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
   <h1>Task Achievement(Writing Task 1)</h1>
   
   <div class="table-container">
   <table class="table">
   <thead>
     
       <th>Band score</th>
       <th>	Task Achievement</th>
     
   </thead>
   <tbody>
     <tr>
         <td data-label="correct answer">Band 5</td>
         <td data-label="band score">
            <p>&#8594; No relevant data</p>
            <p>&#8594; No supporting statements</p>
            <p>&#8594; Inappropriate use of vocabulary</p>
            <p>&#8594; Inadequate coverage</p>
       </td>
     </tr>
     <tr>
         <td data-label="correct answer">Band 6</td>
         <td data-label="band score">
            <p>&#8594; Main components highlighted</p>
            <p>&#8594; Supporting statements present</p>
            <p>&#8594; Usage of relevant statements</p>
            <p>&#8594; Inaccurate data</p>
         </td>
     </tr>
     <tr>
         <td data-label="correct answer">Band 7</td>
         <td data-label="band score">
             <p>&#8594; Main components highlighted clearly and understandably</p>
            <p>&#8594; Clear supporting statements</p>
            <p>&#8594;No irrelevant data</p>
            <p>&#8594; Some areas needing correction.</p>
         </td>
     </tr>
     <tr>
         <td data-label="correct answer">Band 8</td>
         <td data-label="band score">
            <p>&#8594; Clear overall composition</p>
            <p>&#8594; No corrections required</p>
         </td>
     </tr>
     
     
   </tbody>
   </table>
   </div>
   </center>
     
  

  
   <center>
   <h1>Coherence and Cohesion</h1>
   
   <div class="table-container">
   <table class="table">
   <thead>
     
       <th>Band score</th>
       <th>	Task Achievement</th>
     
   </thead>
   <tbody>
     <tr>
         <td data-label="correct answer">Band 5</td>
         <td data-label="band score">
            <p>&#8594; Improper organization of ideas</p>
            <p>&#8594; Incorrect linking of ideas or information</p>
            <p>&#8594; Few paragraphs.</p>
       </td>
     </tr>
     <tr>
         <td data-label="correct answer">Band 6</td>
         <td data-label="band score">
            <p>&#8594; Information organized by proper linking</p>
            <p>&#8594; Few faults in linking the information or sentences</p>
            <p>&#8594; Good paragraphing</p>
            <p>&#8594; Wrong referencing</p>
         </td>
     </tr>
     <tr>
         <td data-label="correct answer">Band 7</td>
         <td data-label="band score">
             <p>&#8594; Logical organisation of information</p>
            <p>&#8594;  Good paragraphing</p>
            <p>&#8594; Good referencing</p>
            <p>&#8594; Appropriate use of linking devices</p>
            <p>&#8594; Underuse and overuse of the linking devices.</p>
         </td>
     </tr>
     <tr>
         <td data-label="correct answer">Band 8</td>
         <td data-label="band score">
            <p>&#8594; Logical organisation of ideas and information</p>
            <p>&#8594; No paragraphing issues</p>
            <p>&#8594; Perfect referencing</p>
            <p>&#8594; Error free usage of linking devices</p>
         </td>
     </tr>
   </tbody>
   </table>
   </div>
   </center>

   <center>
   <h1>Lexical Resource</h1>
   
   <div class="table-container">
   <table class="table">
   <thead>
     
       <th>Band score</th>
       <th>	Task Achievement</th>
     
   </thead>
   <tbody>
     <tr>
         <td data-label="correct answer">Band 5</td>
         <td data-label="band score">
            <p>&#8594; Grammatical errors</p>
            <p>&#8594; Incorrect linking of ideas or information</p>
            <p>&#8594; Wrong vocabulary</p>
            <p>&#8594; Poor readability</p>
       </td>
     </tr>
     <tr>
         <td data-label="correct answer">Band 6</td>
         <td data-label="band score">
            <p>&#8594; Good readability</p>
            <p>&#8594; Few spelling mistakes</p>
            <p>&#8594; Error free usage of common words</p>
            <p>&#8594; Good vocabulary</p>
         </td>
     </tr>
     <tr>
         <td data-label="correct answer">Band 7</td>
         <td data-label="band score">
            <p>&#8594; Good vocabulary</p>
            <p>&#8594; Usage of collocations</p>
            <p> &#8594; Rare spelling mistakes</p>
         </td>
     </tr>
     <tr>
         <td data-label="correct answer">Band 8</td>
         <td data-label="band score">
            <p>&#8594; Zero spelling mistake</p>
            <p>&#8594; Mostly good vocabulary</p>
            <p></p>
         </td>
     </tr>
   </tbody>
   </table>
   </div>
   </center>

   <center>
   <h1>Grammar Range and Accuracy</h1>
   
   <div class="table-container">
   <table class="table">
   <thead>
     
       <th>Band score</th>
       <th>	Task Achievement</th>
     
   </thead>
   <tbody>
     <tr>
         <td data-label="correct answer">Band 5</td>
         <td data-label="band score">
            <p>&#8594; No sentence structures</p>
            <p>&#8594; Grammatical errors</p>
            <p>&#8594; Improper usage of complex sentences</p>
            <p>&#8594; Incorrect punctuations</p>
       </td>
     </tr>
     <tr>
         <td data-label="correct answer">Band 6</td>
         <td data-label="band score">
            <p> &#8594; Average readability</p>
            <p> &#8594; Erroneous grammar and punctuation</p>
            <p>&#8594; Sentence restructuring required</p>

         </td>
     </tr>
     <tr>
         <td data-label="correct answer">Band 7</td>
         <td data-label="band score">
            <p> &#8594; Unique sentence structures</p>
            <p>&#8594; Few mistakes in the sentence used</p>
            <p> &#8594; Few errors in grammar and punctuation.</p>
         </td>
     </tr>
     <tr>
         <td data-label="correct answer">Band 8</td>
         <td data-label="band score">
            <p> &#8594; Error free sentences</p>
            <p>&#8594; Good sentence structures</p>
            <p></p>
         </td>
     </tr>
   </tbody>
   </table>
   </div>
   </center>
<br><br>


<!---writing1 conetnt---------------->

<center>
<div class="pdf-div">
  <h1 class="title" style="padding:20px; color:#ff6347; font-size:28px; font-weight:1000;">Practice IELTS Writing task 1 based on test</h1>
  <div class="pdf-container">
  <!--<iframe src="reading-test1.pdf" class="pdf" frameborder="0"></iframe>-->
  <?php 
		 $sname = "localhost";
     $uname = "root";
     $password = "";
     
     $db_name = "abroad study";
     
     $conn = mysqli_connect($sname, $uname, $password, $db_name);

		 $sql = "SELECT * FROM pdf_writing1 ORDER BY id DESC";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($pdf = mysqli_fetch_assoc($res)) { 
		 ?>  
        <div class='read_pdf'>
           
           <p style="font-size:20px; font-weight:700;"><?=$pdf['title']?></p>
           <a href="academic-writing1_view.php?id=<?=$pdf['id']?>" class="view">view pdf</a>
         </div>
         <?php } } ?>
  <!-- <iframe class="pdf"src="https://drive.google.com/file/d/1QoyrWDjoAmUdt025D9eFIjaRJa-69O-D/preview" frameborder="0"></iframe> -->
  </div>
</div>

</center>

 <!---footer-------->
<?php
   include 'footer.php';
?>

</body>
</html>