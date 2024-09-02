<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*--loader style---*/
.pre-loader-bg{
  position: fixed;
  z-index: 999999;
  background-color: #fff;
  width: 100%;
  height:100%;
}
.pre-loader{
  border:0 solid transparent;
  border-radius: 50%;
  width:150px;
  height:150px;
  position: absolute;
  top:calc(37vh - 75px);
  left:calc(50vw - 75px);
}
.pre-loader:before, .pre-loader:after{
  content:'';
  border:1rem solid #ff5733;
  border-radius: 50%;
  width: inherit;
  height: inherit;
  position: absolute;
  top:0;
  left:0;
  animation: loader 2s infinite;
  opacity:0 ;
}
.pre-loader:before{
  animation-delay: .5s;

}
@keyframes loader{
  0%{
    transform: scale(0);
    opacity: 0;
  }
  50%{
    opacity: 1;
  }
  100%{
    transform: scale(1);
    opacity: 0;
  }
}
    </style>
</head>
<body>
      <!----pre-loader--->
  <div class="pre-loader-bg">
    <div class="pre-loader"></div>
  </div>
    

    <!---loader script---->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
 <script>
    setTimeout(function(){
      $('.pre-loader-bg').fadeToggle();
    },1500);
 </script>

</body>
</html>