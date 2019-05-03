<!DOCTYPE html>
<html>
  <head>
    <title>Gouvernance</title>
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
              Gouvernance
            </div>
            <div class="pages-body">
              <p>
                Contrairement aux coopératives dites « de façades » téléguidées par certains promoteurs industriels,
                nos coopératrices/eurs ont un véritable pouvoir décisionnel.
              </p>
              <p>
                Le pouvoir de décision démocratique des coopératives, comme Lucéole scrl, est exercé à travers ses
                deux organes de décision, l’Assemblée Générale et son Conseil d’Administration.
              </p>

                <ol>
                  <li>
                    <b>L'assemblée Générale (AG)</b>
                    <p>
                      <br>
                      L’AG regroupe tous les coopératrices/eurs.
                      Dans une coopérative citoyenne agréée les conditions suivantes de gestion et de
                      gouvernance doivent être respectées :
                    <ul>
                      <li>
                        chaque coopératrice/eur a droit à une voix lors de l’AG, quel que soit le nombre de
                      parts du capital qu’elle/il détient ;
                    </li>
                    <li>
                      l’adhésion se fait sur base volontaire et est ouverte sans discrimination fondée sur
                      le sexe, l’origine sociale, la race, l’allégeance politique ou la religion ;
                    </li>
                    <li>
                      le dividende annuel est limité à 6% de la valeur des parts ;
                    </li>
                    <li>
                      la coopérative doit proposer des services ou ristournes au bénéfice de ses
                      membres.
                    </li>
                  </ul>
                  </p>
                  <p>
                      Lors de l’AG, les coopératrices/eurs :
                  <ul>
                    <li>
                      approuvent les comptes ;
                    </li>
                    <li>
                      votent les décisions importantes ;
                    </li>
                    <li>
                      élisent les administrateurs ;
                    </li>
                    <li>
                      décident de l’affectation des bénéfices en vue de rémunérer modérément le
                      capital investi (dividendes) et d’investir dans le développement de projets servant
                      la réalisation de l’objet social de la coopérative.
                    </li>
                    <li>
                    <p>
                      Pour en savoir plus, lisez les modalités d’exercice du pouvoir de décision au sein des
                      coopératives à responsabilité limitée.
                    </p>
                  </ul>

                  </p>
                  </li>
                  <li>
                    <b>Le Conseil d'Administration (CA)</b><br>
                    <p>
                      <br>
                      La coopérative est administrée par un CA composé de sept membres au moins et de neuf
                      membres au maximum, possédant la qualité de coopératrices/eurs.
                      Ils sont élus par l’Assemblée Générale pour un mandat de 4 ans qu’ils exercent bénévolement
                      sans aucune rémunération ou autre compensation financière.
                      Ils ne peuvent en outre exercer aucun mandat politique ou tout autre mandat public / privé qui
                      serait en conflit d’intérêt avec la coopérative ou ses projets.
                    </p>
                  </li>
                </ol>
              <p>
                Lucéole souhaite impliquer les coopérateurs « non-administrateurs » dans le travail de réflexion de la
                coopérative.<br>
                A ce titre, des groupes de travail thématiques mixtes (administrateurs – coopérateurs) pourront être
                créés selon les besoins. Les coopérateurs peuvent y apporter leurs expériences, leurs compétences
                diverses pour développer les projets de Lucéole.
              </p>
              <p>
                Cette citoyenneté participative valorise « l’intelligence collective » au sein de la coopérative.
              </p>
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
