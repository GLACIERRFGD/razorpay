<?php
if ($_POST) {
	$razorpay_payment_id = $_POST['razorpay_payment_id'];
	
	echo "Razorpay success ID: ". $razorpay_payment_id;
}
?>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1" />