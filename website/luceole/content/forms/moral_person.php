
<p>
<i>Une « personne morale » désigne une construction juridique à laquelle la loi confère
des droits semblables à ceux des personnes physiques (nom, domicile, nationalité,
droit d’acquérir, d’administrer et de céder un patrimoine…). Ainsi, sont des
personnes morales, on dit aussi « personnes juridiques », l’Etat, les Provinces,
les Communes, les établissements publics, les associations sans but lucratif
(ASBL), les sociétés commerciales (SA, SPRL, SC…), les fondations…</i>
</p>

<p>
<b>Les champs marqués d'une astérixe (*) sont obligatoires.</b>
</p>

<fieldset style="padding-bottom: 10px;margin-bottom:0px;">
<legend>Informations générales</legend>
<div class="col-auto" style="float:left;">
  <label for="corporation_name">Nom de la société*</label>
  <!--div class="col-sm-10"-->
  <input type="text" class="form-control" id="corporation_name" name="corporation_name" placeholder="Cociter s.c.r.l." value="" required="required">
</div>
<div class="col-auto" style="float:left;">
  <label for="corporation_legal_form">Forme juridique*</label>
  <input type="text" class="form-control" id="corporation_legal_form" name="corporation_legal_form" placeholder="s.c.r.l." value="" required="required">
</div>
<div class="col-auto" style="float:left;">
  <label for="tva">Numéro de TVA*</label>
  <input type="text" class="form-control" id="tva" name="tva" placeholder="B123456" value="" required>
</div>
</fieldset>
<fieldset style="padding-bottom: 10px;margin-bottom:0px;">
<legend>Coordonnées</legend>

<div class="col-auto" style="float:left;">
  <label for="phone">Téléphone*</label>
  <input type="text" class="form-control" id="phone" name="phone" placeholder="063/12.34.56" value="" required>
</div>
<div class="col-auto" style="float:left;">
  <label for="mobile_phone">GSM</label>
  <input type="text" class="form-control" id="mobile_phone" name="mobile_phone" placeholder="0475/12.34.56" value="">
</div>
<div class="col-auto" style="float:left;">
  <label for="email">Adresse Email*</label>
  <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="" required>
</div>
<div class="col-auto" style="float:left;">
  <label for="email_conf">Confirmer l'adresse email*</label>
  <input type="email" class="form-control" id="email_conf" name="email_conf" placeholder="example@domain.com" value="" required>
</div>
<div class="col-auto" style="float:left;">
  <label for="email_conf">Site Web</label>
  <input type="text" class="form-control" id="website" name="website" placeholder="www.luceole.be" value="">
</div>
</fieldset>
<fieldset style="padding-bottom: 10px;margin-bottom:0px;">
<legend>Adresse</legend>
<div class="col-auto" style="float:left;">
  <label for="street">Rue*</label>
  <input type="text" class="form-control" id="street" name="street" placeholder="Rue du Centre" value="" required>
</div>
<div class="col-auto" style="float:left;">
  <label for="house_number">Numéro*</label>
  <input type="text" class="form-control" id="house_number" name="house_number" placeholder="34" value="" required>
</div>
<div class="col-auto" style="float:left;">
  <label for="zip_code">Code Postal*</label>
  <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="1000" value="" required>
</div>
<div class="col-auto" style="float:left;">
  <label for="city">Ville*</label>
  <input type="text" class="form-control" id="city" name="city" placeholder="Habay-la-Neuve" value="" required>
</div>
<div class="col-auto" style="float:left;">
  <label for="country">Pays*</label>
  <input type="text" class="form-control" id="country" name="country" placeholder="Belgique" value="" required>
</div>
</fieldset>
<fieldset style="padding-bottom: 10px;margin-bottom:0px;">
<legend>Autres détails</legend>
<div class="col-auto" style="float:left;">
  <label for="iban">Numéro de Compte (IBAN)*</label>
  <input type="text" class="form-control" id="iban" name="iban" placeholder="BE10 1234 4567 7898" value="" required>
</div>
<div class="col-auto" style="float:left;">
  <label for="shares">Nombre de parts*</label>
  <input type="text" class="form-control" id="shares" name="shares" placeholder="1" value="" required>
</div>
<div class="col-auto" style="float:left;">
  <label for="reason">Comment avez-vous entendu parler de Lucéole ?</label>
  <input type="text" class="form-control" id="reason" name="reason" placeholder="" value="">
</div>
<div class="col-auto" style="clear:left;">
  <label for="notes">Remarques</label>
  <div class="col-lg-12">
    <textarea class="form-control" rows="4" name="notes"></textarea>
  </div>
  <label for="skills">Compétences particulières</label>
  <div class="col-lg-12">
    <textarea class="form-control" rows="4" name="skills"></textarea>
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

  <input style="margin-top:10px;" id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary">
