<?php
	// Authorisation details.
	$username = "bhuvaneswaran@rajalakshmi.edu.in";
	$hash = "9890db2b86d4bf292adfc44fe0e19fc417e6f6a7";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.

	//Random password
	//function randpass()
	//{	
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$otp = substr(str_shuffle($alphabet),0,6);
		echo $otp;
	//}

	$numbers = "918667793652"; // A single number or a comma-seperated list of numbers
	$message = $otp;
    // $message();
        



	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($otp);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	// echo "The result is : $result";
	curl_close($ch);
?>