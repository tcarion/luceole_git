<!DOCTYPE html>
<html>
  <head>
    <title>Eolien - Fauvillers</title>
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
              Projet Eolien - Fauvillers
            </div>
            <div class="pages-body">
              <p>
                <b>Historique succinct du projet</b>
              </p>
              <p>
                En 2008, le promoteur belge Air Energy (Wavre) lance le projet d’un parc éolien à Fauvillers le long de
                la N4. Air Energy a depuis lors été racheté par ENECO, une importante société intercommunale
                néerlandaise active dans le domaine du développement des énergies renouvelables.
                La filiale belge ENECO Wind Belgium (EWB) est le plus gros producteur d'électricité de notre pays à
                avoir opté pour une production exclusive basée sur les énergies renouvelables.
              </p>
              <p>
                En 2014, un premier permis est accordé à ENECO pour 6 éoliennes le long de la N4 puis finalement
                annulé par le Conseil d’Etat le en septembre 2016.
                En février 2017, une nouvelle demande de permis modifiée en tenant compte des remarques
                formulées par le Conseil d’Etat dans son arrêt d’annulation, aboutit à un nouveau permis délivré par le
                Ministre Di Antonio pour 5 des 6 éoliennes demandées.
              </p>
              <p>
                En avril 2017, un recours en annulation contre ce permis a été introduit par 4 riverains au Conseil
                d’Etat qui n’a pas encore statué sur le dossier à ce jour (avril 2019).
                C’est sur base de ce permis de 2017 pour 5 éoliennes qu’EWB a décidé récemment de construire le
                parc éolien, malgré le recours toujours présent au Conseil d’Etat.

              </p>

              <p>
                <b>Partenariat EWB – Lucéole</b>
              </p>
              <p>
                Localement, Lucéole a toujours défendu activement le développement du parc.
                Cette implication locale de la coopérative a été reconnue officiellement par EWB.
                Lucéole rachètera une éolienne du parc une fois qu’il sera opérationnel (estimation mi-2020)..
              </p>
              <p>
                <b>Situation actuelle (avril 2019)</b>
              </p>
              <p>
                En février 2019, les premiers coups de pelles du projet éolien de Fauvillers ont été donnés.
                Voici le déroulement prévu de la construction du parc par ENECO.
              </p>
              <p>
                En 2019 :
              </p>
              <ul>
                <li>
                Travaux de préparation du site des 5 éoliennes (emplacements, chemin d’accès)
                </li>
                <li>
                Procédure d’achat des éoliennes par ENECO, appel d’offres auprès des constructeurs.
                </li>
              </ul>
              <p>
                En 2020 :
              </p>
              <ul>
                <li>
                1 er semestre, construction des 5 éoliennes.
              </li>
              <li>
                Parc opérationnel au printemps/été.
              </li>
              <li>
                Rachat d’une éolienne par la coopérative Lucéole, en partenariat probable avec d’autres
                coopératives citoyennes (encore à définir).
              </li>
              </ul>
              <p>
                <b>Campagne de souscription Lucéole</b>
              </p>
              <p>
                Dans le second semestre 2019, une campagne de souscription sera lancée vers divers publics cibles
                pour réunir un maximum de fonds propres afin de financer l’achat de l’éolienne citoyenne.
              </p>
            </div>


          </div>
          <div class="row schema">
            <div class="col-lg-6 border-primary">
              <div class="schema-projet-habay pages-body" style="text-align:center;">

                <a href="<?php echo build_url('html','schema_implantation_fauvillers');?>">
                <img src="<?php echo build_url('html','schema_implantation_fauvillers');?>"
                alt="Schéma d'implantation Habay" style="border-radius: 5px; width:100%; padding-bottom:4px;">
                </a>
                <i>Schéma  d'implantaton du projet de Fauvillers</i>

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
