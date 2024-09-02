<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Document</title>
    <style>
        /*--------footer style-----*/

footer{
  width:100%;

  bottom:0;
  background: linear-gradient(to right,#463f3f,#ff6347);
  color:#fff;
  padding:10px 0 30px;
  border-top-left-radius:125px;
  font-size: 13px;
  line-height: 20px;

}
.row{
  width:85%;
  margin:auto;
  display: flex;
  flex-wrap: wrap;
  align-items: flex-start;
  justify-content: space-between;
}
.col{
  flex-basis: 25%;
  padding:10px;

}
.col:nth-child(2),.col:nth-child(3){
  flex-basis: 15%;
}
.foot-logo{
  width:120px;
  height: 100px;
  margin-bottom:20px;

}
.col h3{
  width:fit-content;
  margin-bottom: 40px;
  position: relative;
}
.email-id{
  width: fit-content;
  border-bottom:1px solid #ccc;
  margin:20px 0;

}
.col-3 ul li{
  list-style: none;
  margin-bottom: 12px;
  text-align: left;
  

}
.col-3 ul li a{
  text-decoration: none;
  color:#ffffff;

}
.col form{
  padding-bottom: 15px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 1px solid #ccc;
  margin-bottom: 50px;
}
.col form .fa-regular{
  font-size: 18px;
  margin-right: 10px;

}
.col form input{
  width:100%;
  background: transparent;
  color:#ccc;
  border:0;
  outline:none;

}
.col form button{
  background: transparent;
  border:0;
  outline:none;
  cursor: pointer;
}
form button .fa-solid{
  font-size: 16px;
  color:#ccc;
}
.social-icon .fa-brands{
  width:40px;
  height: 40px;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  font-size: 20px;
  color:#000;
  background: #fff;
  margin-right: 15px;
  cursor: pointer;
}
hr{
  width:90%;
  border:0;
  border-bottom:1px solid #ccc;
  margin:20px auto;
}
.underline{
  width:100%;
  height:5px;
  background: rgb(56, 49, 49);
  border-radius: 3px;
  position: absolute;
  top:25px;
  left:0;
  overflow: hidden;

}
.underline span{
  width:15px;
  height: 100%;
  background: #fff;
  border-radius: 3px;
  position: absolute;
  top:0px;
  left:10px;
  animation: moving 2s linear infinite;

}
@keyframes moving{
  0%{
    left:-20px;
  }
  100%{
   left:100%;
  }
}
@media(max-width:700px)
{
  footer{
    bottom:unset;
  }
  .col{
    flex-basis: 100%;
   
  }
  .col:nth-child(2),.col:nth-child(3){
    flex-basis: 100%;
  }

}
    </style>
</head>
<body>
      <!---------footer------->

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
          <input type="email" placeholder="enter your email id">
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
    <center><p class="copyright">Easy exam @ 2021 - All Rights Reserved</p></center>
  </footer>
</body>
</html>