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

  <title>United States of America</title>
  <link rel="stylesheet" href="css/style.css">




</head>

<body>
  <?php 
     require_once("Connection.php");
     
     
     include 'navbar.php';
     include 'loader.php';
     if(isset($_POST["submit"]))
     {
      
        $name=$_POST["name"];
        $email=$_POST["email"];
        $college=$_POST["college-name"];
        $message=$_POST["message"];
        mysqli_query($conn,"INSERT INTO inquiries(name,email,college_name,message) VALUES ('$name','$email','$college','$message')");
        
        $subject = "Inquiry";
        $body =  "Your inquiry is received successfully and we will get in touch  as soon as possible ";
       if(mail($email,$subject,$body))
       {
           echo '<script>alert("Your inquiry Is Successfully sent !!")</script>';		
       }
       else{
            echo '<script>alert("There is any problem please try again or contact us !!")</script>';
       }

     }

  ?>

  
  <section class="showcase-area" id="showcase">
    <div class="showcase-container">
      <h1 class="main-title" id="home">Study In USA</h1>
      <p>Get Admission in the best Universities.</p>
      <a href="#University-list" class="btn btn-primary">Check-out Top Universities</a>
    </div>
  </section>

  <section id="about">
    <div class="about-wrapper container">
      <div class="about-text">
        <h2>Discover United States of America</h2>
        <p class="small">Explore your academic opportunities with the numero uno global education destination</p><br>
        <p>USA is the largest global economy and with 56 universities in the list of top 100 universities globally, it
          unarguably offers myriads of quality academic options.
        </p><br>
        <p>From Ivy League Universities to top ranked public-private Universities, the USA has something on offer for
          everyone! With students studying from 150+ countries in the USA, you will never feel alone in your academic
          pursuit in the USA.</p>
      </div>
      <div class="about-img">
        <img
          src="https://kananco-assests.s3.ap-south-1.amazonaws.com/website_v2/images/study-abroad/usa/united-states-map.webp?w=1080&q=75"
          alt="food" />
      </div>
    </div>
  </section>




  <section id="University-list">
    <h1 class="lu">List of Universities</h1>
    <table class="content-table">
      <thead>
        <tr>
        <th>Sr No.</th>
          <th>UNIVERSITY NAME</th>
          <th>LOCATION</th>
          <th>UNIVERSITY INFO</th>

          <th>APPLICATION FEE</th>
          <th>TUITION FEE (UG,PG)</th>
          <th>TEACHING / NON-TEACHING FACULTIES</th>
          <th></th>

        </tr>
      </thead>
      <tbody>
        <?php

        require_once("Connection.php");
        $sql = "SELECT * FROM tblusacollegelist";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {
          echo "
    
		<tr>
    <td>$row[0]</td>
			<td>$row[1]</td>
			<td>$row[2]</td>
			<td>$row[3]</td>
			<td>$row[4]</td>
			<td>$row[5]</td>
			<td>$row[6]</td>
			<td><a href='#contact'><button id='b1'>Apply</button></a></td>
			
		</tr>
      
		";

        } ?>
      </tbody>
    </table>
  
  </section>

  <section id="testimonials">
    <h2 class="testimonial-title">Our top consultant</h2>
    <div class="testimonial-container container">
      <div class="testimonial-box">
        <div class="customer-detail">
          <div class="customer-photo">
            <img src="photos/consultant 1.jpg" alt="" />
            <p class="customer-name">James rogers</p>
          </div>
        </div>
        <p class="testimonial-text">
          James is the best consultant for the student who wanted to persue bachlores degree 
          and he suggest college according to the student's desired.
        </p>

      </div>
      <div class="testimonial-box">
        <div class="customer-detail">
          <div class="customer-photo">
            <img src="photos/consultant 2.jpg" alt="" />
            <p class="customer-name">Amelia Watson</p>
          </div>
        </div>
        
        <p class="testimonial-text">
          Amelia handles the visa process and accomodation she will also helps the student if they feel any problem.
          she is constantly touch in the students. 
        </p>

      </div>
      <div class="testimonial-box">
        <div class="customer-detail">
          <div class="customer-photo">
            <img src="photos/consultant 3.jpg" alt="" />
            <p class="customer-name">Ben Roy</p>
          </div>
        </div>
        <p class="testimonial-text">
          Ben roy is a expert consultant for the student who wanted to persue master's degree and he helps the student for pr process too.
        </p>

      </div>
    </div>
  </section>
  <section id="contact">
    <div class="contact-container container">
      <div class="contact-img">
        <img src="photos/usa-contactus.jpg" alt="" />
      </div>

      <div class="form-container">
        <h2>Contact Us</h2>
        <form action="" method="post">
        <input type="text" name="name" placeholder="Your Name" required/>
        <input type="email" name="email" placeholder="E-Mail" required/>
        <input type="text" name="college-name" placeholder="Enter college name" required/>
        <textarea cols="30" rows="6" name="message" placeholder="Type Your Message" required></textarea>
        <a href="#" style="text-decoration: none" ><input class="btn btn-primary" name="submit" type="submit" value="submit"></a>
      </form>
      </div>
    </div>
  </section>
  
  <footer >
    <div class="row">
      <div class="col">
        <img class="foot-logo" src="Images/abroad-final.png" alt="">
        <p>ABROAD STUDY is an Immigration and Education consultancy that caters the needs of fulfilling the dreams of aspirants willing to study or migrate permanently to a developed country.

        </p>
      </div>
      <div class="col">
        <h3>office  <div class="underline"><span></span></div></h3>
        <p>abc road</p>
        <p>xyxfiled, pqrs city</p>
        <p>abcd, pin 001 002, india</p>
        <p class="email-id">abroadstudy@gamil.com</p>
        <h4>+91-1234567890</h4>
      </div>
      <div class="col col-3">
        <h3>links<div class="underline"><span></span></div></h3>
        <ul>
          <li><a href="">study abroad</a></li>
          <li><a href="">test prep</a></li>
          <li><a href="">other</a></li>
          <li><a href="">services</a></li>
        </ul>
      </div>
      <div class="col">
        <h3>newslatter<div class="underline"><span></span></div></h3>
        <form action="">
        <i class="fa-regular fa-envelope"></i>
          <input type="email"  placeholder="enter your email id">
          <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
        </form>
        <div class="social-icon">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-whatsapp"></i>
        <i class="fa-brands fa-pinterest"></i>
        </div>
      </div>
    </div>
    <hr>
    <center><p class="copyright">Abroad Study @ 2021 - All Rights Reserved</p></center>
  </footer>

  <!-- 
    .................../ JS Code for smooth scrolling /...................... -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      // Add smooth scrolling to all links
      $("a").on("click", function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();
          // Store hash
          var hash = this.hash;
          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $("html, body").animate({
            scrollTop: $(hash).offset().top,
          },
            800,
            function () {
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            }
          );
        } // End if
      });
    });
  </script>


</body>

</html>