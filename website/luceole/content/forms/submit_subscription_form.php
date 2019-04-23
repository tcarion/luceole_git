<?php

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
		if (!$_POST['lastname']) {
			$errName = 'Please enter your lastname';
		}
    else{
        $errName = false;
    }

		// Check if firstname has been entered
		if (!$_POST['firstname']) {
			$errName = 'Please enter your firstname';
		}
    else{
        $errName = false;
    }

		// Check if street has been entered
		if (!$_POST['street']) {
			$errName = 'Please enter your street';
		}
    else{
        $errName = false;
    }

		// Check if house number has been entered
		if (!$_POST['house_number']) {
			$errName = 'Please enter your house number';
		}
    else{
        $errName = false;
    }

		// Check if zip code  has been entered
		if (!$_POST['zip_code']) {
			$errName = 'Please enter your zip code';
		}
    else{
        $errName = false;
    }

		// Check if city has been entered
		if (!$_POST['city']) {
			$errName = 'Please enter your city';
		}
    else{
        $errName = false;
    }

		// Check if country  has been entered
		if (!$_POST['country']) {
			$errName = 'Please enter your country';
		}
    else{
        $errName = false;
    }

		// Check if phone has been entered
		if (!$_POST['phone']) {
			$errName = 'Please enter your phone number';
		}
    else{
        $errName = false;
    }

		// Check if birth date has been entered
		if (!$_POST['birth_date']) {
			$errName = 'Please enter your birth date';
		}
    else{
        $errName = false;
    }

		// Check if birth place has been entered
		if (!$_POST['birth_place']) {
			$errName = 'Please enter your birth place';
		}
    else{
        $errName = false;
    }

		// Check if lastname_tut has been entered
		if (!$_POST['lastname_tut']) {
			$errName = 'Please enter the lastname of the tutor';
		}
    else{
        $errName = false;
    }

		// Check if firstname_tut has been entered
		if (!$_POST['firstname_tut']) {
			$errName = 'Please enter the firstname of the tutor';
		}
    else{
        $errName = false;
    }

		// Check if firstname_tut has been entered
		if (!$_POST['iban']) {
			$errName = 'Please enter your IBAN';
		}
    else{
        $errName = false;
    }

		// Check if firstname_tut has been entered
		if (!$_POST['shares']) {
			$errName = 'Please enter the number of shares';
		}
    else{
        $errName = false;
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
				$errEmail = 'L addresse email doit être identique à la première';
		}
    else{
        $errEmail = false;
    }

// If there are no errors, send the email
if (!$errName && !$errEmail) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>
