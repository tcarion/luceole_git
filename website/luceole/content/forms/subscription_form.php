<script language="Javascript">

function legal_form_result() {
		 if (document.getElementById("legal_form").checked){
			 	document.getElementById("physical_person_form").style.display="initial";
			 	document.getElementById("moral_person_form").style.display="none";
		 }
		 else {
			 	document.getElementById("physical_person_form").style.display="none";
 				document.getElementById("moral_person_form").style.display="initial";
		 }

}

</script>

<form class="form-horizontal" role="form" method="POST">
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
		<?php
		$path = get_headers(constant('ROOT_URL')."index.php?page=moral_person&mode=php",1);
		include_once($path['Location']);
		?>
	</div>

</div>

		<!--/div-->
		<!--label for="name" class="col-sm-6 control-label">Prénom</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="Prénom" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-6 control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-6 control-label">Message</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="message"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="human" class="col-sm-6 control-label">2 + 3 = ?</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
		</div>
	</div-->
</form>
