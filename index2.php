<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="script.js"></script>
  <link rel="stylesheet"href="C:\Users\FENIL\Downloads\bootstrap-5.0.2-dist.zip\bootstrap-5.0.2-dist\css\bootstrap.min.css">
  <link rel="stylesheet"href="C:\Users\FENIL\Downloads\bootstrap-4.6.2-dist.zip\bootstrap-4.6.2-dist\css\bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <title>Image Slider</title>
  <link rel="stylesheet" href="./style/index.css">

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
          <li><a href="#!">Other</a>
            <ul class="nav-dropdown">
              <li><a href="#!">Web Design</a></li>
              <li><a href="#!">Web Development</a></li>
              <li><a href="#!">Graphic Design</a></li>
            </ul>
          </li>
          <li><a href="#!">Services</a>
            <ul class="nav-dropdown">
              <li><a href="#!">Web Design</a></li>
              <li><a href="#!">Web Development</a></li>
              <li><a href="#!">Graphic Design</a></li>
            </ul>
          </li>
          <li id=""><a href="#!"><button class="login" type="button" class="btn btn-primary">login</button></a></li>
        </ul>

      </nav>
    </div>
  </section>

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
    <div class="about-container">
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
  <div class="score">
    <h1 class="score-head">Our Students Who Achieve Their Dream</h1>
    <marquee behavior="alternate" direction="left" scrollamount="20">
    <div class="score-container">
      <div class="scoring">
        <div class="score-img">
          <img src="images/person-1.jpg" alt="">
          <p>farah mirza</p>
          <h1>6.5 band</h1>
        </div>
      </div>
      <div class="scoring">
        <div class="score-img">
          <img src="images/person-2.jpeg" alt="">
          <p>Rohan birala</p>
          <h1>6.5 band</h1>
        </div>
      </div>
      <div class="scoring">
        <div class="score-img">
          <img src="images/person-3.avif" alt="">
          <p>Priya roy</p>
          <h1>7.0 band</h1>
        </div>
      </div>
      <div class="scoring">
        <div class="score-img">
          <img src="images/person-4.jpg" alt="">
          <p>Ritavik sharma</p>
          <h1>7.5 band</h1>
        </div>
      </div>
      <div class="scoring">
        <div class="score-img">
          <img src="images/person-5.jpg" alt="">
          <p>Sahil patel</p>
          <h1>6.0 band</h1>
        </div>
      </div>
      <div class="scoring">
        <div class="score-img">
          <img src="images/person-6.jpeg" alt="">
          <p>janki modi</p>
          <h1>8.0 band</h1>
        </div>
      </div>
      
    </div>
  </marquee>
  </div>


  
  

</body>


</html>