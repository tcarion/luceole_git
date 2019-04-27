<?php

	$errLastName = "";
	$errFirstName = "";
	$errEmailConf = "";

	$lastname = "";
	$firstname = "";
	$street = "";
	$house_number = "";
	$zip_code = "";
	$city = "";
	$country = "";
	$phone = "";
	$mobile_phone = "";
	$birth_date = "";
	$birth_place = "";
	$lastname_tut = "";
	$firstname_tut = "";
	$national_id = "";
	$email = "";
	$email_conf = "";
	$iban = "";
	$shares = "";
	$reason = "";
	$notes = "";
	$skills = "";

	if (isset($_POST['submit'])) {
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$street = $_POST['street'];
		$house_number = $_POST['house_number'];
		$zip_code = $_POST['zip_code'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$phone = $_POST['phone'];
		$mobile_phone = $_POST['mobile_phone'];
		$birth_date = $_POST['birth_date'];
		$birth_place = $_POST['birth_place'];

		$lastname_tut = $_POST['lastname_tut'];
		$firstname_tut = $_POST['firstname_tut'];

		$email = $_POST['email'];
		$email_conf = $_POST['email_conf'];

		$iban = $_POST['iban'];
		$shares = $_POST['shares'];
		$reason = $_POST['reason'];

		$notes = $_POST['notes'];
		$skills = $_POST['notes'];


		$from = 'Demo Contact Form';
		$to = 'samuel.courtois93@gmail.com';
		$subject = 'Message from Contact Demo ';

		$body = "From: $lastname $firstname\n E-Mail: $email\n Message:\n";

		// Check if name has been entered
		if (preg_match("/[^a-zA-Z\-\s]/",$lastname)){
			$errLastName = 'Veuillez utiliser que des lettres et des espaces';
		}
    else{
        $errLastName = false;
    }

		// Check if firstname has been entered
		if (preg_match("/[^a-zA-Z\-\s]/",$firstname)) {
			$errFirstName = 'Veuillez utiliser que des lettres et des espaces';
		}
    else{
        $errFistName = false;
    }

		// Check if lastname_tut has been entered
		if (preg_match("/[^a-zA-Z\-\s]/",$lastname_tut)) {
			$errLastNameTut = 'Veuillez utiliser que des lettres et des espaces';
		}
    else{
        $errLastNameTut = false;
    }

		// Check if firstname_tut has been entered
		if (preg_match("/[^a-zA-Z\-\s]/",$firstname_tut)) {
			$errFirstNameTut = 'Veuillez utiliser que des lettres et des espaces';
		}
    else{
        $errFirstNameTut = false;
    }

		// Check if firstname_tut has been entered
		function test_iban($iban) {
			$temp_iban = str_replace(" ","", $iban);
			$temp_iban = str_replace("-","", $iban);
			$temp_iban = substr($temp_iban, 4, strlen($temp_iban)-4).substr($temp_iban, 0, 4);
			$array_iban = str_split($temp_iban);

			foreach ($array_iban as $key => $value) {
				// code...
			}
			return $temp_iban;
		}

		$iban = test_iban($iban);

		if (!$_POST['iban']) {
			$errIBAN = 'Please enter your IBAN';
		}
    else{
        $errIBAN = false;
    }

		// Check if firstname_tut has been entered
		if (!$_POST['shares']) {
			$errShares = 'Please enter the number of shares';
		}
    else{
        $errShares = false;
    }

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
    else{
        $errEmail = false;
    }

		// Check if email has been entered and is valid
		if ($_POST['email'] !== $_POST['email_conf']) {
				$errEmailConf = 'L addresse email doit être identique à la première';
		}
    else{
        $errEmailConf = false;
    }

		// If there are no errors, send the email
		if (!$errLastName && !$errEmail && !$errEmailConf) {
			if (mail ($to, $subject, $body, $from)) {
				$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
				echo $result;
			} else {
				$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
				echo $result;
			}
		}
		else {

		}
	}
?>
