<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" media="all">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/custome-det.css">

</head>

<body>
    <?php
    require_once("Connection.php");
    error_reporting(E_ERROR | E_PARSE);
    $id = $_GET['send'];
    $select = mysqli_query($conn, "SELECT * FROM tbl_addbook WHERE id = '$id'");
    session_start();
    
    $name=$_POST["Name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $pin=$_POST["pin"];
    $bn=$_POST["bn"];
    $price=$_POST["price"];
    $address=$_POST["address"];
    $payment_status="Success";
    
   if(isset($_POST["submit"]))
   {
    mysqli_query($conn,"insert into tblcustomer(Name,Email,Address,phone,pincode,book_name,price)values('$name','$email','$address','$phone','$pin','$bn','$price')");

   $_SESSION['price']=$price;
    header("location:payment.php"); 
   }
   
    ?>
   <div class="container">
   <?php while($row = mysqli_fetch_assoc($select)) {?>
  <form id="contact" action="" method="post">
    <h3>Customer Details</h3>
    <h4>Fill your details, and make payment to get your book with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" name="Name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" pattern="[6-9]{1}[0-9]{9}" type="text" name="phone" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your pincode" name="pin" pattern="[0-9]{6}" type="number" tabindex="4" required>
    </fieldset>
    
    <fieldset>
      <input  name="bn" type="text" value="<?php echo $row['book_name']; ?>" tabindex="5" readonly>
    </fieldset>
    <fieldset>
      <input placeholder="Your pincode" name="price" value="<?php echo $row['book_price']; ?>" type="text" tabindex="6" readonly>
    </fieldset>
    <fieldset>
      <textarea placeholder="Enter Your Address" name="address" tabindex="7" required></textarea>
    </fieldset>
    <fieldset>
      <a href="payment.php"><input type="submit" name="submit"/></a>
    </fieldset>
    <?php }; ?>
  </form>

</div>
</body>

</html>