<?php 
require_once('config.php'); 
?>
<html>
  <head>
    <title>RAZORPAY INTEGRATION</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="charge.php" method="POST">
    <!-- Note that the amount is in paise = 50 INR -->
    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $razor_api_key; ?>"
        data-amount="10000"
        data-buttontext="PAY WITH RAZORPAY"
        data-name="YOUR NAME HERE"
        data-description="YOUR DESCRIPTION HERE"
        data-image="logo.png"
        data-prefill.name=""
        data-prefill.email=""
        data-prefill.contact=""
        data-theme.color="#F37254"
    ></script>
    <input type="hidden" value="Hidden Element" name="hidden">
    </form>
  </body>
</html>