<?php 
  require_once("Connection.php");
  session_start();
  $apikey = "rzp_test_vOym676e1Xv8f9";
  $price=$_SESSION['price'];
?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>


<html>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  var options = {
    "key": "<?php echo $apikey; ?>", // Enter the Key ID generated from the Dashboard
    "amount": "<?php echo $price * 100; ?>",
    "currency": "INR",
    "description": "Abroad study",
    "image": "https://s3.amazonaws.com/rzp-mobile/images/rzp.jpg",
    "prefill":
    {
      "email": "gaurav.kumar@example.com",
      "contact": "6353838068",
    },
    "theme":
    {
      "color":"#ff6347",
    },
    config: {
      display: {
        blocks: {
          utib: { //name for Axis block
            name: "Pay using Axis Bank",
            instruments: [
              {
                method: "card",
                issuers: ["UTIB"]
              },
              {
                method: "netbanking",
                banks: ["UTIB"]
              },
            ]
          },
          other: { //  name for other block
            name: "Other Payment modes",
            instruments: [
              {
                method: "card",
                issuers: ["ICIC"]
              },
              {
                method: 'netbanking',
              },
              {
                method: "upi"
              }
            ]
          }
        },
       
        sequence: ["block.utib", "block.other"],
        preferences: {
          show_default_blocks: false // Should Checkout show its default blocks?
        }
      }
    },
    "handler": function (response) {
       window.location.href='payment_slip.php';
    },
    "modal": {
      "ondismiss": function () {
        if (confirm("Are you sure, you want to close the form?")) {
          txt = "You pressed OK!";
          window.location.href='book1.php';
        } else {
          txt = "You pressed Cancel!";
          console.log("Complete the Payment")
        }
      }
    }
  };
  var rzp1 = new Razorpay(options);
  window.onload = function (e) {
    rzp1.open();
    e.preventDefault();
  }
</script>

</html>
