
<script>
  function target_person_result(){
    if(document.getElementById("me").checked){
      document.getElementById("lastname_tut").style.display="none";
      document.getElementById("firstname_tut").style.display="none";
      document.getElementById("lastname_tut").required="none";
      document.getElementById("firstname_tut").required="none";
    }
    else {
       document.getElementById("lastname_tut").style.display="initial";
       document.getElementById("firstname_tut").style.display="initial";
       document.getElementById("lastname_tut").required="required";
       document.getElementById("firstname_tut").required="required";
    }
  }
</script>

<p>
<i>Une « personnes physique » est, dans l’ordre juridique, tout être
humain auquel la loi attache des droits et des obligations.</i>
</p>

<p>
<b>Les champs marqués d'une astérisque (*) sont obligatoires.</b>
</p>

<fieldset style="padding-bottom: 10px;margin-bottom:0px;">
  <legend>Informations générales</legend>
  <div class="col-auto">
    <label for="target_person">Je veux acheter des parts pour:</label>
    </br>
    <input type="radio" id="me" name="target_person" value="me" onclick="target_person_result()" checked> moi-même</br>
    <input type="radio" name="target_person" value="other" onclick="target_person_result()">  au nom de quelqu'un d'autre</br>
  </div>
  <div class="col-auto"  style="float:left;">
    <label for="lastname">Nom*</label>
    <span class="error"> <?php echo $errLastName ?></span>
    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Nom de famille" value="<?php echo $lastname?>" required>

  </div>
  <div class="col-auto"  style="float:left;">
    <label for="firstname">Prénom*</label>
    <span class="error"> <?php echo $errFirstName ?></span>
    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prénom" value="<?php echo $firstname?>" required>
  </div>
  <div class="col-auto"  style="float:left;">
    <label for="birth_date">Date de Naissance*</label>
    <input type="date" class="form-control" id="birth_date" name="birth_date" placeholder="01/01/2000" value="<?php echo $birth_date?>" required>
  </div>
  <div class="col-auto"  style="float:left;">
    <label for="birth_place">Lieu de Naissance*</label>
    <input type="text" class="form-control" id="birth_place" name="birth_place" placeholder="Belgique" value="<?php echo $birth_place?>" required>
  </div>
  <div class="col-auto"  style="float:left;">
    <label for="national_id">Numéro de Registre National*</label>
    <input type="text" class="form-control" id="national_id" name="national_id" placeholder="75.03.27-252.13" value="<?php echo $national_id?>" required>
  </div>
  <div class="col-auto" id="lastname_tut" style="display:none; float:left;">
    <label for="lastname_tut">Nom du Parent/Tuteur*</label>
    <input type="text" class="form-control" id="lastname_tut" name="lastname_tut" placeholder="Nom de famille" value="<?php echo $lastname_tut?>">
  </div>
  <div class="col-auto" id="firstname_tut" style="display:none; float:left;">
    <label for="firstname_tut">Prénom du Parent/Tuteur*</label>
    <input type="text" class="form-control" name="firstname_tut" placeholder="Prénom" value="<?php echo $firstname_tut?>">
  </div>
</fieldset>
<fieldset style="padding-bottom: 10px;margin-bottom:0px;">
  <legend>Coordonnées</legend>
  <div class="col-auto" style="float:left;">
    <label for="phone">Téléphone*</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="063/12.34.56" value="<?php echo $phone?>" required>
  </div>
  <div class="col-auto" style="float:left;">
    <label for="mobile_phone">GSM</label>
    <input type="text" class="form-control" id="mobile_phone" name="mobile_phone" placeholder="0475/12.34.56" value="<?php echo $mobile_phone?>">
  </div>
  <div class="col-auto" style="float:left;">
    <label for="email">Adresse Email*</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo $email?>" required>
  </div>
  <div class="col-auto" style="float:left;">
    <label for="email_conf">Confirmer l'adresse email*</label>
    <input type="email" class="form-control" id="email_conf" name="email_conf" placeholder="example@domain.com" value="<?php echo $email_conf?>" required>
    <span class="error"> <?php echo $errEmailConf ?></span>
  </div>
</fieldset>
<fieldset style="padding-bottom: 10px;margin-bottom:0px;">
  <legend>Adresse</legend>
    <div class="col-auto" style="float:left;">
      <label for="street">Rue*</label>
      <input type="text" class="form-control" id="street" name="street" placeholder="Rue du Centre" value="<?php echo $street?>" required>
    </div>
    <div class="col-auto" style="float:left;">
      <label for="house_number">Numéro*</label>
      <input type="text" class="form-control" id="house_number" name="house_number" placeholder="34" value="<?php echo $house_number?>" required>
    </div>
    <div class="col-auto" style="float:left;">
      <label for="zip_code">Code Postal*</label>
      <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="1000" value="<?php echo $zip_code?>" required>
    </div>
    <div class="col-auto" style="float:left;">
      <label for="city">Ville*</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Habay-la-Neuve" value="<?php echo $city?>" required>
    </div>
    <div class="col-auto" style="float:left;">
      <label for="country">Pays*</label>
      <input type="text" class="form-control" id="country" name="country" placeholder="Bruxelles" value="<?php echo $country?>" required>
    </div>
</fieldset>
<fieldset style="padding-bottom: 10px;margin-bottom:0px;">
  <legend>Autres détails</legend>
  <div class="col-auto" style="float:left;">
    <label for="iban">Numéro de Compte (IBAN)*</label>
    <input type="text" class="form-control" id="iban" name="iban" placeholder="BE10 1234 4567 7898" value="<?php echo $iban?>" required>
  </div>
  <div class="col-auto" style="float:left;">
    <label for="shares">Nombre de parts*</label>
    <input type="text" class="form-control" id="shares" name="shares" placeholder="1" value="<?php echo $shares?>" required>
  </div>
  <div class="col-auto" style="float:left;">
    <label for="reason">Comment avez-vous entendu parler de Lucéole ?</label>
    <input type="text" class="form-control" id="reason" name="reason" placeholder="" value="<?php echo $reason?>">
  </div>
</br>
  <div class="col-auto" style="clear:left;">
    <label for="notes">Remarques</label>
    <div class="col-lg-12">
      <textarea class="form-control" rows="4" name="notes" value="<?php echo $notes?>"></textarea>
    </div>
  </div>
  <div class="col-auto">
    <label for="skills">Compétences particulières</label>
    <div class="col-lg-12">
      <textarea class="form-control" rows="4" name="skills" value:"<?php echo $skills?>"></textarea>
    </div>
  </div>
  <div class="col-auto" style="width:auto;">
    <input type="checkbox" class="form-control" id="mailing" name="mailing" style="width:auto;">
    <label for="mailing" style="width:auto;">Je marque mon accord pour recevoir toute communication y compris </br>
      les convocations aux AG par voie électronique (facultatif mais recommandé </br>
      pour limiter les couts administratifs).</label>
  </div>
  <div class="col-auto" style="width:auto;">
    <input type="checkbox" class="form-control" id="agree" name="agree" style="width:auto;" required>
    <label for="agree" style="width:auto;"> Je soussigné déclare adhérer aux <a href="<?php echo constant('ROOT_URL'); ?>index.php?page=coop_statuts&mode=html" target="_blank">statuts</a> de Lucéole scrl et avoir pris connaissance de son <a href="<?php echo constant('ROOT_URL'); ?>index.php?page=coop_roi&mode=html" target="_blank">règlement d’ordre intérieur</a>*. </label>
  </div>

</fieldset>
