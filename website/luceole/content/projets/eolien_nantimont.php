<!DOCTYPE html>
<html>
  <head>
    <title>Eolien - Nantimont</title>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/php_config.php";
    include_once($path);
    $path1 = get_headers(constant('ROOT_URL')."index.php?page=header&mode=php",1);
    include_once($path1['Location']);
    ?>
  </head>
  <body>
    <div class="container">
      <?php
      $path = get_headers(constant('ROOT_URL')."index.php?page=nav&mode=php",1);
      include_once($path['Location']);
      ?>
      <div class="row pages">
        <div class="col-lg-9 border-primary">
          <div class="row pages-title">
            <div class="pages-title">
              Projet Eolien - Aire E411 Nantimont
            </div>
            <div class="pages-body">
              <p>
                <b>Le projet de Nantimont</b>
              </p>
              <p>
                La SOFICO, Société de Financement Complémentaire des Infrastructures en Région Wallonne, a
                lancé mi-2016 un appel à projets en vue de développer le potentiel énergétique des aires
                d’infrastructures dont elle a la charge. Ces projets consistent entre-autres à implanter des grandes
                éoliennes sur des aires de parking le long des autoroutes wallonnes.
              </p>
              <p>
                Les coopératives Lucéole, Vents du Sud et Courant d’Air se sont associées à deux promoteurs privés
                (BEE et MOBILAE) pour proposer des offres sur 5 aires d’autoroute en Province de Luxembourg.
                En 2017, la SOFICO a attribué le projet de l’aire de Nantimont à notre consortium (appelé EOLUX).
              </p>
              <p>
                Notre projet consiste à installer 2 éoliennes en bordure de l’aire de Nantimont (E411).
              </p>
              <p>
                Données du projet :
              </p>
              <ul>
                <li>
                  production d’électricité estimée: 10.750 MWh/an
                </li>
                <li>
                  équivalent à la consommation électrique de 2.905 ménages
                </li>
                <li>
                réduction d’émission de CO2 de 4.597 tonnes de CO2/an
                </li>
              </ul>

              <p>
                <b>Situation actuelle (avril 2019)</b>
              </p>
              <p>
                La réunion d’information publique (RIP) pour le projet a eu lieu le 31 janvier 2019 à Habay.
                Nous sommes actuellement dans la phase d’étude d’incidences environnementales du projet qui est
                réalisée par le bureau Sertius.
              </p>
              <p>
                Le dépôt de la demande de permis et l’enquête publique doivent avoir lieu en été 2019.
              </p>
            </div>


          </div>
          <div class="row schema">
            <div class="col-lg-6 border-primary">
              <div class="schema-projet-habay pages-body" style="text-align:center;">

              </div>
            </div>
            <div class="col-lg-6 border-primary">
              <div class="schema-description pages-body">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 border-primary">
          <?php
          $path = get_headers(constant('ROOT_URL')."index.php?page=right_banner&mode=php",1);
          include_once($path['Location']);
          ?>
        </div>
      </div>

      <?php
      $path = get_headers(constant('ROOT_URL')."index.php?page=footer&mode=php",1);
      include_once($path['Location']);
      ?>
    </div>
  </body>
</html>
