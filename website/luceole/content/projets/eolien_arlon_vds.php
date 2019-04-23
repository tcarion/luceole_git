<!DOCTYPE html>
<html>
  <head>
    <title>Eolien - Arlon - VDS</title>
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
              Projet Eolien en partenariat avec VDS - Arlon
            </div>
            <div class="pages-body">
              <p>
                <b>Parc éolien de Hondelange - Autelbas</b>
              </p>
              <p>
                Le parc éolien est situé partiellement sur le territoire d'Autelbas (Arlon) et de Hondelange (Messancy)
                à proximité de l'autoroute E411 entre Arlon et la frontière luxembourgeoise.
                Il compte au total 6 éoliennes auxquelles se sont ajoutées 3 autres appartenant à Engie-Electrabel.
              </p>
              <p>
                Une des 6 éoliennes du parc a été construite à l’initiative de citoyens locaux qui ont créé pour ce faire
                la coopérative « Vents du Sud ».
              </p>
              <p>
                Cette éolienne citoyenne d’une puissance de 2 MW est opérationnelle depuis février 2015.
                Elle produit annuellement +/- 3.500 MWh, ce qui correspond à la consommation moyenne de 1200
                familles, soit 10 % de la population de la vile d’Arlon.
              </p>
              <p>
                <a href="https://www.ventsdusud.be/myeolienne/production" target="_blank">Production de l’éolienne citoyenne par mois depuis 2015
                </a>
              </p>
              <p>
                <b>Partenariat avec Lucéole et Ferréole</b>
              </p>
              <p>
                En 2016, Vents du Sud a proposé à d’autres coopératives locales de partager cette éolienne à
                hauteur de maximum 24 %.
              </p>
              <p>
                C’est ainsi que Lucéole et Ferréole (coopérative de la région de Ferrières-Manhay) ont acquis, en
                2017, chacune 12 % de Vents d’Autelbas, la société d’exploitation de l’éolienne de Vents du Sud.
                Au total, Lucéole a investi +/- 140.000 € dans le rachat de 12 % de cette éolienne, sous formes de
                capital et de prêts subordonnés dans la Vents d’Autelbas.
              </p>
              <p>
                Ce partenariat qui est un bel exemple de solidarité entre coopératives, permet à Lucéole :
              </p>
              <ul>
              <li>
                d’être productrice d’énergie renouvelable pour la première fois depuis sa création ;
              </li>
              <li>
                d’acquérir de l’expérience dans la gestion d’une éolienne ;
              </li>
              <li>
                de générer des premiers revenus dans son bilan en 2018.
              </li>
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
