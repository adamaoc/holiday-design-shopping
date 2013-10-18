<?php

function sendMessage($Name, $City, $Email, $Message, $EmailTo, $Subject) {
	$EmailFrom = "contact@holiday-design.com";
	// prepare email body text
	$Body = "";
	$Body .= "Name: ";
	$Body .= $Name;
	$Body .= "\n";
	$Body .= "Tel: ";
	$Body .= $City;
	$Body .= "\n";
	$Body .= "Email: ";
	$Body .= $Email;
	$Body .= "\n";
	$Body .= "Message: ";
	$Body .= $Message;
	$Body .= "\n";

	// send email 
	$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
  	header('Location: /contactthanks/');
  	die();
	
}

function validate_send_email($Name, $City, $Email, $Message, $bottest) {
	$EmailTo = "contact@holiday-design.com";
	$Subject = "New message from holiday-design - ";
	$Name = Trim(stripslashes($Name)); 
	$City = Trim(stripslashes($City)); 
	$Email = Trim(stripslashes($Email)); 
	$Message = Trim(stripslashes($Message)); 
	$bottest = Trim(stripcslashes($bottest));


	// validation
	$validationOK=true;

	$error = array();

	if (!empty($bottest)) {
		$validationOK = false;
		$error[] = "Wow... Something went wrong here. Maybe try again.";
	}

	if (isset($Name)) {
		if ($Name == '' or $Name == ' ') {
			$validationOK = false;
			$error[] = "Please enter a name in the Name field."; 
		}
	}
	if (isset($City)) {
		if ($City == '' or $City == ' ') {
			$validationOK = false;
			$error[] = "Please enter a city and state for our convinence."; 
		}
	}

	if (isset($Email)) {
		$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		if (!preg_match($pattern, $Email)) {
			$validationOK = false;
			$error[] = "Please enter a valid Email address";
		}
	}

	if (isset($Message)) {
		if ($Message == '' or $Message == ' ') {
			$validationOK = false;
			$error[] = "Please enter a message into the Message box."; 
		}
	}

	if (!$validationOK) {
		$emailStatus = $error;
	} else {
		sendMessage($Name, $City, $Email, $Message, $EmailTo, $Subject);
	}

	return $emailStatus;
}
?>