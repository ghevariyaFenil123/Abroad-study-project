


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <title>Image Slider</title>
  <link rel="stylesheet" href="./style/index.css">
  


  

</head>

<body>


       

         <?php
         include 'navbar.php';
         ?>

          <!---pre loader--->
        <?Php
        include 'loader.php';
        ?>

  
   <!-- slider container -->
   <section id="slider-container">

<!-- slide -->
<div class="slide fade" id="slide-0">
  <!-- slide image -->
  <img src="./images/slide14.png" alt="First Image">
</div>
<!-- slide -->
<div class="slide fade" id="slide-1">
  <!-- slide image -->
  <img src="./images/slide16.png" alt="Second Image">
</div>
<!-- slide -->
<div class="slide fade" id="slide-2">
  <!-- slide image -->
  <img src="./images/slide1-removebg-preview.png" alt="Third Image">
</div>
<!-- slide -->
<div class="slide fade" id="slide-3">
  <!-- slide image -->
  <img src="./images/slide10.png" alt="Fourth Image">
</div>


<!-- arrows -->
<div id="arrows-wrapper" class="">

  <!-- previous arrow -->
  <p class="slider-arrow center_y" id="arrow-prev">&#10094;</p>
  <!-- next arrow -->
  <p class="slider-arrow center_y" id="arrow-next">&#10095;</p>
</div>

<!-- dots -->
<div id="dots-wrapper" class="center_x">

  <!-- dot navigation for each slide -->
  <div class="dot-navigation"></div>
  <!-- dot navigation for each slide -->
  <div class="dot-navigation"></div>
  <!-- dot navigation for each slide -->
  <div class="dot-navigation"></div>
  <!-- dot navigation for each slide -->
  <div class="dot-navigation"></div>

</div>
</section>
  <!-- scripts -->
  <script src="./scripts/index.js"></script>

<!---boxes-->
  <div class="home">
    <div class="box-container">
      <div class="box">
        <i class="fa-sharp fa-solid fa-landmark"></i>
        <h3>Student visa</h3>
      </div>
      <div class="box">
        <i class="fa-sharp fa-solid fa-suitcase-rolling"></i>
        <h3>Work visa</h3>
      </div>
      <div class="box">
        <i class="fa-sharp fa-solid fa-earth-asia"></i>
        <h3>Tourist visa</h3>
      </div>
    </div>
  </div>
  

  <!-----about us page----->
  <div class="about">
    <div class="about-container" >
      <div class="textblock">
        <h1 class="title">about abroad study training institute</h1>
        <h4 class="sub-title">Consultations for prospective immigrants</h4>
        <p>ABROAD STUDY is an Immigration and Education consultancy that caters the needs of fulfilling the dreams of aspirants willing to study or migrate permanently to a developed country.</p>
        <p>With a substantial experience in the immigration industries, the workforce at ORPHIC imparts exceptional personalized services rendering absolute gratification to its clients.</p>
        <a href="#" class="btn">Learn more</a>
      </div>

      <img src="Images/about.jpg" alt="none">
    </div>
  </div>

  <!---scrore box-->
  <div class="score"><br>
    <h1 class="score-head">Our Students Who Achieve Their Dream</h1>
    <marquee behavior="alternate" direction="left" scrollamount="20">
    <div class="score-container">
      
      <?php
      $host="localhost";
      $user="root";
      $password="";
      $db="abroad study";
      $data=mysqli_connect($host,$user,$password,$db);

       $sql="select * from score";
       $res=mysqli_query($data,$sql);
       if(mysqli_num_rows($res)>0)
       {
        while($result= mysqli_fetch_array($res)){?>
        <div class='scoring'>
        <img class='score-pic' src='images/<?=$result["image"]?>' >
        <p><?php echo "{$result['score']}" ?></p>
         <h1><?php echo "{$result['name']}" ?></h1>
       
  
        </div>
        <?php }} ?>
      
    </div>
        </marquee>
  </div>

  <!----module-------------->
  <div class="module">
  <center><h1 style="font-size:27px; color:#ff6347;">Our Free Self Study material</h1><br>
   <h>Choose by Module</h></center>
    <div class="module-container">
      <div class="boxx"><br>
        <h1>IELTS General</h1><br>
        <p>Take IELTS to migrate Australia,canada,new zealand and united kindom to fullfill your valuable goal.</p>
      </div>
      <div class="boxx"><br>
        <h1>IELTS Academic</h1><br>
        <p>IELTS is recoginazed  by more than 10,000  education training provider in world wide.</p>
      </div>
      
    </div>
    
  </div>
  
  <div class="module-4">
   <center><h>Choose by Section </h></center>
    <div class="module-container">

      <a href="academic-reading.php" style="text-decoration:none;">
      <div class="box-4">
      <i class="fa-solid fa-book-open-reader"></i>
      <h1>Reading</h1>
      </div>
      </a>
      
      <a href="academic-listening.php"  style="text-decoration:none;">
      <div class="box-4">
      <i class="fa-solid fa-headphones"></i>
      <h1>Listening</h1>
      </div>
        </a>

      <a href="academic-writing1.php"  style="text-decoration:none;">
      <div class="box-4">
      <i class="fa-sharp fa-solid fa-file-pen"></i>
      <h1>Writing</h1>
      </div>
      </a>

      <a href="academic-speaking1.php"  style="text-decoration:none;">
      <div class="box-4">
      <i class="fa-solid fa-microphone"></i>
      <h1>Speaking</h1>
      </div>
        </a>
      
    </div>
    
  </div>


<?php
   include 'footer.php';
?>

  
  


 <!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/641310e231ebfa0fe7f2f8ae/1grl7ju18';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!--End of Tawk.to Script-->

</body>


</html>