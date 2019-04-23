
<script>
  function target_person_result(){
    if(document.getElementById("me").checked){
      document.getElementById("lastname_tut").style.display="none";
      document.getElementById("firstname_tut").style.display="none";
    }
    else {
       document.getElementById("lastname_tut").style.display="initial";
       document.getElementById("firstname_tut").style.display="initial";
    }
  }
</script>

<fieldset style="padding-bottom: 10px;margin-bottom:0px;">
  <legend>Informations générales</legend>
  <div class="col-auto">
    <label for="target_person">Je veux acheter des parts pour:</label>
    </br>
    <input type="radio" id="me" name="target_person" value="me" onclick="target_person_result()" checked> moi-même</br>
    <input type="radio" name="target_person" value="other" onclick="target_person_result()">  au nom de quelqu'un d'autre</br>
  </div>
  <div class="col-auto"  style="float:left;">
    <label for="lastname">Nom</label>
    <!--div class="col-sm-10"-->
    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Nom de famille" value="">
  </div>
  <div class="col-auto"  style="float:left;">
    <label for="firstname">Prénom</label>
    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prénom" value="">
  </div>
  <div class="col-auto"  style="float:left;">
    <label for="birth_date">Date de Naissance</label>
    <input type="text" class="form-control" id="birth_date" name="birth_date" placeholder="01/01/2000" value="">
  </div>
  <div class="col-auto"  style="float:left;">
    <label for="birth_place">Lieu de Naissance</label>
    <input type="text" class="form-control" id="birth_place" name="birth_place" placeholder="Belgique" value="">
  </div>
  <div class="col-auto" id="lastname_tut" style="display:none; float:left;">
    <label for="lastname_tut">Nom du Parent/Tuteur</label>
    <input type="text" class="form-control" id="lastname_tut" name="lastname_tut" placeholder="Nom de famille" value="">
  </div>
  <div class="col-auto" id="firstname_tut" style="display:none; float:left;">
    <label for="firstname_tut">Prénom du Parent/Tuteur</label>
    <input type="text" class="form-control" name="firstname_tut" placeholder="Prénom" value="">
  </div>
</fieldset>
<fieldset style="padding-bottom: 10px;margin-bottom:0px;">
  <legend>Coordonnées</legend>
  <div class="col-auto" style="float:left;">
    <label for="phone">Téléphone</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="063/12.34.56" value="">
  </div>
  <div class="col-auto" style="float:left;">
    <label for="mobile_phone">GSM</label>
    <input type="text" class="form-control" id="mobile_phone" name="mobile_phone" placeholder="0475/12.34.56" value="">
  </div>
  <div class="col-auto" style="float:left;">
    <label for="email">Adresse Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
  </div>
  <div class="col-auto" style="float:left;">
    <label for="email_conf">Confirmer l'adresse email</label>
    <input type="email" class="form-control" id="email_conf" name="email_conf" placeholder="example@domain.com" value="">
  </div>
</fieldset>
<fieldset style="padding-bottom: 10px;margin-bottom:0px;">
  <legend>Adresse</legend>
    <div class="col-auto" style="float:left;">
      <label for="street">Rue</label>
      <input type="text" class="form-control" id="street" name="street" placeholder="Rue du Centre" value="">
    </div>
    <div class="col-auto" style="float:left;">
      <label for="house_number">Numéro</label>
      <input type="text" class="form-control" id="house_number" name="house_number" placeholder="34" value="">
    </div>
    <div class="col-auto" style="float:left;">
      <label for="zip_code">Code Postal</label>
      <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="1000" value="">
    </div>
    <div class="col-auto" style="float:left;">
      <label for="city">Ville</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Habay-la-Neuve" value="">
    </div>
    <div class="col-auto" style="float:left;">
      <label for="country">Pays</label>
      <input type="text" class="form-control" id="country" name="country" placeholder="Belgique" value="">
    </div>
</fieldset>
<fieldset style="padding-bottom: 10px;margin-bottom:0px;">
  <legend>Autres détails</legend>
  <div class="col-auto" style="float:left;">
    <label for="iban">Numéro de Compte (IBAN)</label>
    <input type="text" class="form-control" id="iban" name="iban" placeholder="BE10 1234 4567 7898" value="">
  </div>
  <div class="col-auto" style="float:left;">
    <label for="shares">Nombre de parts</label>
    <input type="text" class="form-control" id="shares" name="shares" placeholder="1" value="">
  </div>
  <div class="col-auto" style="float:left;">
    <label for="reason">Comment avez-vous entendu parler de Lucéole ?</label>
    <input type="text" class="form-control" id="reason" name="reason" placeholder="" value="">
  </div>
</br>
  <div class="col-auto" style="clear:left;">
    <label for="notes">Remarques</label>
    <div class="col-lg-12">
      <textarea class="form-control" rows="4" name="notes"></textarea>
    </div>
  </div>
  <div class="col-auto">
    <label for="skills">Compétences particulières</label>
    <div class="col-lg-12">
      <textarea class="form-control" rows="4" name="skills"></textarea>
    </div>
  </div>
  <div class="col-auto" style="clear:left;">
    <input type="checkbox" class="form-control" id="mailing" name="mailing">
    <label for="mailing"> Je marque mon accord pour recevoir toute communication y compris </br>
      les convocations aux AG par voie électronique (facultatif mais recommandé </br>
      pour limiter les couts administratifs). </label>
  </div>
  <div class="col-auto" style="clear:left;">
    <input type="checkbox" class="form-control" id="agree" name="agree">
    <label for="agree"> Je soussigné déclare adhérer aux <a href="<?php echo constant('ROOT_URL'); ?>index.php?page=coop_statuts&mode=html" target="_blank">statuts</a> de Lucéole scrl et avoir pris connaissance de son <a href="<?php echo constant('ROOT_URL'); ?>index.php?page=coop_roi&mode=html" target="_blank">règlement d’ordre intérieur</a>. </label>
  </div>

  <div class="col-auto">
    <?php
      if($_GET['opencaptcha']=='failed') { echo "<script>alert('You Did Not Fill In The Security Code Correctly');</script>";}
      $date = date("Ymd");
      $rand = rand(0,9999999999999);
      $height = "80";
      $width  = "240";
      $img    = "$date$rand-$height-$width.jpgx";
      echo "<input type='hidden' name='img' value='$img'>";
      echo "<a href='http://www.opencaptcha.com'><img src='http://www.opencaptcha.com/img/$img' height='$height' alt='captcha' width='$width' border='0' /></a><br />";
      echo "<input type=text name=code value='Enter The Code' size='35' />";
    ?>
  </div>
</fieldset>
  <input style="margin-top:10px;" id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary">
