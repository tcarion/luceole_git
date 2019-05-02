<script language="Javascript">

function legal_form_result() {
		 if (document.getElementById("legal_form").checked){
			 	$("#physical_person_form").load("<?php echo build_url('html', 'physical_person');?>");
				$("#moral_person_form").html("");
				document.getElementById("physical_person_form").style.display="initial";
			 	document.getElementById("moral_person_form").style.display="none";
		 }
		 else {
				$("#moral_person_form").load("<?php echo build_url('html', 'moral_person');?>");
				$("#physical_person_form").html("");
			 	document.getElementById("physical_person_form").style.display="none";
 				document.getElementById("moral_person_form").style.display="initial";
		 }

}
</script>

<div id="submission_script">
	<?php
		include_once(build_url('php', 'send_subs_form'));
	?>
</div>


<form class="form-horizontal" id="subscription_form" role="form" method="POST" action="">
	<div class="row" style="padding-bottom: 5px;margin-bottom:0px;">
		<div class="col-lg-12 form-group" style="padding-bottom: 0px;margin-bottom:0px;">
				<label for="legal_form">Je suis :</label>
				</br>
				<input type="radio" id="legal_form" name="legal_form" value="physical_person" onclick="legal_form_result()" checked> une personne physique </br>
				<input type="radio" name="legal_form" value="moral_person" onclick="legal_form_result()"> une personne morale </br>

		</div>
	</div>
	<div class="row" style="padding-top: 0px;margin-top:0px;">
		<div class="col-lg-12 form-group" id="physical_person_form" style="display:initial;">
		<?php
			include_once(build_url('php', 'physical_person'));
		?>
	</div>
	<div class="col-lg-12 form-group" id="moral_person_form" style="display:none;">

	</div>
		<div class="col-lg-12 form-group" id="physical_person_form" style="display:initial;">
			<fieldset>
				<div class="col-auto" style="width:auto;">
			    <input type="checkbox" class="form-control" id="mailing" name="mailing" style="width:auto;">
			    <label for="mailing" style="width:auto;">Je marque mon accord pour recevoir toute communication y compris </br>
			      les convocations aux AG par voie électronique (facultatif mais recommandé </br>
			      pour limiter les couts administratifs).</label>
			  </div>
			  <div class="col-auto" style="width:auto;">
			    <input type="checkbox" class="form-control" id="agree" name="agree" style="width:auto;" required>
			    <label for="agree" style="width:auto;"> Je soussigné déclare adhérer aux <a href="<?php echo build_url('html', 'coop_statuts');?>" target="_blank">statuts</a> de Lucéole scrl et avoir pris connaissance de son <a href="<?php echo build_url('html', 'coop_roi');?>" target="_blank">règlement d’ordre intérieur</a>*. </label>
			  </div>
			</fieldset>
		</div>

</div>
<input style="margin-top:10px;" id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary">
</form>
