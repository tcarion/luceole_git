<script language="Javascript">

function legal_form_result() {
		 if (document.getElementById("legal_form").checked){
			 	$("#physical_person_form").load("<?php echo constant('ROOT_URL'); ?>index.php?page=physical_person&mode=html");
				$("#moral_person_form").html("");
				document.getElementById("physical_person_form").style.display="initial";
			 	document.getElementById("moral_person_form").style.display="none";
		 }
		 else {
				$("#moral_person_form").load("<?php echo constant('ROOT_URL'); ?>index.php?page=moral_person&mode=html");
				$("#physical_person_form").html("");
			 	document.getElementById("physical_person_form").style.display="none";
 				document.getElementById("moral_person_form").style.display="initial";
		 }

}
</script>

<?php
	$form_url = get_headers(constant('ROOT_URL')."index.php?page=send_subs_form&mode=php",1);
	include_once($form_url['Location']);
?>


<form class="form-horizontal" id="subscription_form" role="form" method="POST" action="">
	<div class="row" style="padding-bottom: 5px;margin-bottom:0px;">
		<div class="col-lg-12 form-group" style="padding-bottom: 0px;margin-bottom:0px;">
				<label for="legal_form">Je suis :</label>
				</br>
				<input type="radio" id="legal_form" name="legal_form" value="physical_person" onclick="legal_form_result()" checked> une personne physique </br>
				<input type="radio" name="legal_form" value="morale_person" onclick="legal_form_result()"> une personne morale </br>

		</div>
	</div>
	<div class="row" style="padding-top: 0px;margin-top:0px;">
		<div class="col-lg-12 form-group" id="physical_person_form" style="display:initial;">
		<?php
		$path = get_headers(constant('ROOT_URL')."index.php?page=physical_person&mode=php",1);
		include_once($path['Location']);
		?>
	</div>
	<div class="col-lg-12 form-group" id="moral_person_form" style="display:none;">

	</div>

</div>
<input style="margin-top:10px;" id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary">
</form>
