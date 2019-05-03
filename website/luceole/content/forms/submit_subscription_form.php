<?php

	$errLastName = "";
	$errFirstName = "";
	$errLastNameTut = "";
	$errFirstNameTut = "";
	$errEmail = "";
	$errEmailConf = "";
	$errIBAN = "";

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
	$national_id = "";
	$mailing = "";
	$website = "";
	$tva = "";
	$corporation_legal_form = "";
	$corporation_name = "";

	if (isset($_POST['submit'])) {

		$street = $_POST['street'];
		$house_number = $_POST['house_number'];
		$zip_code = $_POST['zip_code'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$phone = $_POST['phone'];
		$mobile_phone = $_POST['mobile_phone'];

		$email = $_POST['email'];
		$email_conf = $_POST['email_conf'];

		$iban = $_POST['iban'];
		$shares = $_POST['shares'];
		$reason = $_POST['reason'];

		$notes = $_POST['notes'];
		$skills = $_POST['skills'];
		$mailing = $_POST['mailing'];

		$from = 'Luceole-Souscription';
		$to = 'samuel.courtois93@gmail.com';
		$subject = 'Demande de souscription - ';

		if ($_POST['legal_form'] == "physical_person"){
			$subject .= "Personne Physique";
			$lastname = $_POST['lastname'];
			$firstname = $_POST['firstname'];
			$birth_date = $_POST['birth_date'];
			$birth_place = $_POST['birth_place'];
			$national_id = $_POST['national_id'];
			$lastname_tut = $_POST['lastname_tut'];
			$firstname_tut = $_POST['firstname_tut'];

			$body = "Nom de famille: $lastname\n";
			$body .="Prénom: $firstname\n";
			$body .="Date de naissance: $birth_date\n";
			$body .="Lieu de naissance: $birth_place\n";
			$body .="Numéro de registre national: $national_id\n\n";

			if ($lastname_tut != "") {
				$body .="Nom de famille du tuteur: $lastname_tut\n";
				$body .="Prénom du tuteur: $firstname_tut\n\n";
			}

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

		}
		else {
			$subject .= "Personne Morale";
			$tva = $_POST['tva'];
			$legal_form = $_POST['legal_form'];
			$corporation_name = $_POST['corporation_name'];
			$website = $_POST['website'];

			$body .="Nom de la société: $corporation_name\n";
			$body .="Forme juridique: $corporation_legal_form\n";
			$body .="Numéro de TVA: $tva\n\n";
		}


		$body .="Téléphone: $phone\n";
		$body .="GSM: $mobile_phone\n";
		$body .="Adresse email: $email\n";

		if ($_POST['legal_form'] == "moral_person") {
			$body .="Site Web: $website\n\n";
		}
		else {
			$body .="\n";
		}

		$body .="Rue: $street\n";
		$body .="Numéro: $house_number\n";
		$body .="Code postal: $zip_code\n";
		$body .="Ville: $city\n";
		$body .="Pays: $country\n\n";

		$body .="Nombre de parts: $shares\n";
		$body .="Numéro de compte IBAN: $iban\n";
		$body .="Source: $reason\n";
		$body .="Remarques: $notes\n";
		$body .="Compétences particulières: $skills\n";
		if ($mailing == "") {
				$body .="Communcitations par email: Non\n";
		}
		else {
			$body .="Communcitations par email: Oui\n";
		}

		$iban_conversion_table = [
			"A" => "10",
			"B" => "11",
			"C" => "12",
			"D" => "13",
			"E" => "14",
			"F" => "15",
			"G" => "16",
			"H" => "17",
			"I" => "18",
			"J" => "19",
			"K" => "20",
			"L" => "21",
			"M" => "22",
			"N" => "23",
			"O" => "24",
			"P" => "25",
			"Q" => "26",
			"R" => "27",
			"S" => "28",
			"T" => "29",
			"U" => "30",
			"V" => "31",
			"W" => "32",
			"X" => "33",
			"Y" => "34",
			"Z" => "35"];

		// Check if firstname_tut has been entered
		function test_iban($iban, $conversion_table) {
			$temp_iban = str_replace(" ","", $iban);
			$temp_iban = str_replace("-","", $temp_iban);
			$temp_iban = substr($temp_iban, 4, strlen($temp_iban)-4).substr($temp_iban, 0, 4);
			$array_iban = str_split($temp_iban);
			$temp_iban ="";

			foreach ($array_iban as $c) {
				if (array_key_exists($c, $conversion_table)){
						$temp_iban = $temp_iban.$conversion_table[$c];
				}
				else {
						$temp_iban = $temp_iban.$c;
				}
				// code...
			}
			while (substr($temp_iban,0,1)=='0') {
				$temp_iban = substr($temp_iban,1,strlen($temp_iban)-1);
			}
			$iban_eval = (int)$temp_iban;
			return $iban_eval % 97;
		}

		//if (test_iban($iban, $iban_conversion_table) != 1) {
		//	$errIBAN = 'Veuillez entrer un IBAN valide';
		//}
    //else{
    //    $errIBAN = false;
    //}

		// Check if firstname_tut has been entered

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Veuillez entrer une adresse email valide';
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
		if (!$errLastName && !$errFirstName && !$errFirstNameTut && !$errLastNameTut && !$errEmail && !$errEmailConf) {
			if (mail ($to, $subject, $body, $from)) {
				$result='<div class="alert alert-success">Merci pour votre souscription,<br>nous vous recontacterons dans les plus brefs délais !</div>';
				echo $result;
			} else {
				$result='<div class="alert alert-danger">Il y a une erreur lors de l\'envoi de votre demande, veuillez réessayer plus tard.<br></div>';
				echo $result;
			}
		}
		else {

		}
	}
?>
