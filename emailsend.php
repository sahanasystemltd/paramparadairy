<?php
if(isset($_POST['nm'])) {

	$to = "info@aandmjumbobags.com,anmjumbobags@yahoo.com,anmjumbobags@gmail.com"; 
	$subject = "aandmjumbobags.com";
	$nm = $_POST['nm'];
	$eml = $_POST['eml'];
	$ph = $_POST['ph'];
	/*$address = $_POST['address'];
	$phone = $_POST['phone'];
	$country = $_POST['country'];*/
	$msg = $_POST['msg'];
	$from = "info@i365design.com";
$headers = "From: $from";
	ini_set('SMTP','smtp.gmail.com');

		$check_msg .= "Checked: $value\n";
	}
	
	$body = "$nm\n$eml\n$ph\n$msg\n";

	echo "<script>alert('Data has been submitted to A & M Jumbo Bags!');window.location='index.html';</script>";
	//mail($to, $subject, $body);
	mail($to, $subject, $body, $headers);
	?>