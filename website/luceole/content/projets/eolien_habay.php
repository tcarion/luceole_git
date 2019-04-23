<!DOCTYPE html>
<html>
  <head>
    <title>Eolien - Habay</title>
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
              Projet Eolien - Habay
            </div>
            <div class="pages-body">
              <p>
                <b>Premier projet - Historique succinct (2010-2016)</b>
              </p>
              <p>
                En 2010, deux projets éoliens portés par des développeurs industriels sont concurrents à Habay.
                Les projets s’excluant mutuellement, les développeurs décident en 2012 d’une refonte des deux
                projets en un seul avec quatre acteurs : Engie-Electrabel, Ecopex, Electrawinds (entretemps devenu
                Elicio) et la coopérative Lucéole (créée en 2010) représentant les intérêts locaux citoyens en accord
                avec les autorités communales de l’époque.<br>
                La convention de développement prévoit 25 % du parc pour chaque partenaire de ce projet unique.
                Situé le long de l’autoroute E411.
              </p>
              <p>
                En 2014, une première demande de permis pour 7 éoliennes est déposée par Lucéole au nom des 4
                partenaires qui aboutit en février 2015 à un permis accordé par les fonctionnaires de la Région
                Wallonne pour un parc de 6 éoliennes.
              </p>
              <p>
                Suite à une procédure en recours de certains riverains, jumelée à une intervention politicienne d’un
                échevin de Habay auprès du ministre de tutelle de la région Wallonne, le permis sera annulé par le
                ministre fin 2015. Le recours ultime introduit par les partenaires auprès du Conseil d’Etat n’y
                changera rien et ce premier permis est définitivement annulé en février 2016.
              </p>
              <p>
                <b>Projet actuel</b>
              </p>
              <p>
                Les 4 partenaires se sont remis à l’ouvrage dès 2016.<br>
                Après des prises de contacts avec le collège de Habay afin de développer un nouveau projet
                acceptable par le plus grand nombre et avec la direction de VIVALIA pour la prise en compte du projet
                d’hôpital à Houdemont (2025), un nouveau projet a été finalisé.<br>
                Ce projet prévoit maintenant quatre éoliennes mais plus hautes (190 m, hauteur maximale de pales),
                ce qui permet de garder un productible comparable aux six éoliennes du premier permis (150 m).
              </p>
              <p>
                La demande de permis pour ce nouveau projet a été introduite en août 2018.<br>
                Malheureusement, ce permis a été refusé en février 2019 par les fonctionnaires de la Région
                Wallonne. Le refus porte sur la non-conformité du dossier par rapport à l’existence de plans paysagers
                récemment développés dans la commune…
              </p>
              <p>
                <b>Situation actuelle (avril 2019)</b>
              </p>
              <p>
                Suite à cette décision négative, nous venons d’introduire en mars 2019 un recours auprès du ministre
                Di Antonio. Un complément d’étude d’incidences environnementales tenant compte des nouvelles
                données du plan paysager de Habay qui est à l’origine du refus de permis en première instance sera
                joint au dossier.
              </p>
              <p>
                La décision du ministre à notre recours est attendue avec impatience dans les prochaines semaines,
                au plus tard fin juin 2019….
              </p>
            </div>


          </div>
          <div class="row schema">
            <div class="col-lg-6 border-primary">
              <div class="schema-projet-habay pages-body" style="text-align:center;">
                <a href="<?php echo constant('ROOT_URL'); ?>index.php?page=schema_implantation_habay&mode=html">
                <img src="<?php echo constant('ROOT_URL'); ?>index.php?page=schema_implantation_habay&mode=html"
                alt="Schéma d'implantation Habay" style="border-radius: 5px; width:100%; padding-bottom:4px;">
                </a>
                <i>Schéma  d'implantaton du projet de Habay</i>
              </div>
            </div>
            <div class="col-lg-6 border-primary">
              <div class="schema-description pages-body">
                <p>
                  <b>Caractéristiques du projet</b>
                </p>
                <ul>
                  <li>
                    4 éoliennes de 190 m (hauteur totale) dont 1 de Lucéole
                  </li>
                  <li>
                    Puissance installée : 4 x 2.35 à 3.6 MW
                  </li>
                  <li>
                    Production attendue max 31 500 MWh / an
                  </li>
                  <li>
                    Economie de rejet de CO2 14300 t / an
                  </li>
                  <li>
                    Investissement : 16 à 18 millions € au total
                  </li>
                  <li>
                    Durée de permis : 30 ans
                  </li>
                  <li>
                    Injection Haute Tension au poste de Villers-sur-Semois
                  </li>
                  <li>
                    3 éoliennes sur 4 sont implantées sur terrains communaux
                  </li>
                  <li>
                    Compatible avec Vivalia 2025 (projet hôpital) à Houdemont
                  </li>
                  <li>
                    Mesures d’accompagnement environnementales
                  </li>
                </ul>
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
