<!DOCTYPE html>
<html>
  <head>
    <title>Carte d'identité</title>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/php_config.php";
    include_once($path);
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/index_url.php";
    include_once($path);
    include_once(build_url('php', 'header'));
    ?>
  </head>
  <body>
    <div class="container">
      <?php
        include_once(build_url('php', 'nav'));
      ?>
      <div class="row pages">
        <div class="col-lg-9 border-primary">
          <div class="row pages-title">
            <div class="pages-title">
              Qui Sommes-Nous ?
            </div>
            <div class="pages-body">
              <ul>
                <li>
                  <a href="<?php echo build_url('html', 'coop_statuts');?>">La coopérative Lucéole scrl</a> est une coopérative citoyenne constituée le 22 octobre 2010 à Habay en
                  province du Luxembourg.
                  Elle a été agréée le 10 décembre 2010 par le <a href="https://economie.fgov.be/fr/themes/entreprises/creer-une-entreprise/demarches-pour-creer-une/formes-de-societes/societes-cooperatives/agrement/le-conseil-national-de-la" target="_blank"> Conseil National de la Coopération </a> du Ministère de
                  l’Économie, agrément N°5329.
                  Lucéole est membre de <a href="https://www.rescoop-wallonie.be/" target="_blank"> REScoop Wallonie</a>, la Fédération des coopératives et associations citoyennes
                  wallonnes actives dans le secteur des énergies renouvelables.
                </li>
                <br>
                <li>
                  Lucéole est active en Wallonie - Province de Luxembourg:
                  <ul>
                    <li>
                      dans le développement de projets de production d’énergie renouvelable gérés par les
                      citoyens (lien vers « projets coopérative » sur notre site)
                    </li>
                    <li>
                      dans la fourniture d’électricité d’origines verte, locale et citoyenne à nos
                      coopératrices/eurs via la coopérative COCITER à laquelle nous sommes associés
                      (Lien vers « Fourniture d’électricité » sur notre site).
                    </li>
                  </ul>
                </li>
                <br>
                <li>
                  La coopérative compte actuellement près de 600 coopératrices/eurs (avril 2019).
                  Elle est ouverte à tous les citoyens désireux de promouvoir les énergies renouvelables, de préserver
                  notre environnement et de favoriser la participation citoyenne dans des projets durables locaux.
                </li>
                <br>
                <li>
                  La part Lucéole est à 100 € et le montant total des parts est limité à 5.000 € par personne (obligation
                  légale actuelle). Les parts sont nominatives (personne physique ou morale).
                </li>

              </ul>
            </div>

          </div>
        </div>

        <div class="col-lg-3 border-primary">
          <?php
            include_once(build_url('php', 'right_banner'));
          ?>
        </div>

      </div>

      <?php
        include_once(build_url('php', 'footer'));
      ?>
    </div>
  </body>
</html>
