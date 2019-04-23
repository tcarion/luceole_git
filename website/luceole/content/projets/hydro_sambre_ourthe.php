<!DOCTYPE html>
<html>
  <head>
    <title>Hydroélectrique - Sambre - Ourthe</title>
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
              Projet Hydroélectrique - Sambre & Ourthe
            </div>
            <div class="pages-body">
              <p>
                <b>Le projet HOSe</b>
              </p>
              <p>
                Fin 2018, 9 coopératives de REScoop Wallonie, dont Lucéole, se sont regroupées autour d’un projet
                de production d’hydroélectricité sur la Basse-Sambre et l’Ourthe.
                Il s’agit d’un partenariat entre les 9 coopératives (50 %) et un développeur privé Hydro-B (50 %) au
                travers une coopérative d’exploitation appelée HOSe (Hydro Ourthe - Sambre).
              </p>
              <p>
                A terme (2020 ou 2021), ce seront au total 6 centrales hydroélectriques qui devraient produire près de
                15 MWh par an.
              </p>
              <p>
                Les 6 centrales sont :
              </p>
              <ul>
                <li>
                Sambre : Monceau, Marcinelle, Roselies et Auvelais.
                </li>
                <li>
                Ourthe : Grosses Battes (Liège) et Chanxhe.
                </li>
              </ul>
              <p>
                <b>Implication de Lucéole</b>
              </p>
              <p>
                Lucéole est partenaire du projet à hauteur de +/- 3 %.
                Cela correspond à un investissement total de +/- 60.000 € en capital et en prêts subordonnés dans la
                coopérative HOSe.
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
