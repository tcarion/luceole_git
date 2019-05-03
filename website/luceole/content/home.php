<!DOCTYPE html>
<html lang="en">
<head>
  <title>Accueil</title>
  <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/php_config.php";
    include_once($path);
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/index_url.php";
    include_once($path);
    include_once(build_url('php', 'header'));
  //$path1 = constant('ROOT_URL')."index.php?page=header&mode=php";
  //include_once($path1['Location']);
  ?>
</head>

<body>

  <div class="container">
    <?php
    //$path = constant('DOC_ROOT')."/luceole/content/nav.php";
    //include_once($path);
    //echo constant('ROOT_URL')."index.php?page=home";
    //$path = get_headers(constant('ROOT_URL')."index.php?page=nav&mode=php",1);
    //echo $output['Location'];
    //include_once($path['Location']);
    //print_r($output);
    include_once(build_url('php', 'nav'));
    ?>
    <!-- Module page d'Accueil -->
    <!-- Row 1 : contenu sauf navbar et footer -->
    <div class="row">
      <!-- Col9 : Contenu propre a chaque page (different sur chaque page)-->
      <div class="col-lg-9 border-danger">
        <!-- Page d'accueil: Images/articles defilant -->
        <div class="row">
          <div class="col-lg-12">
            <div id="homeCarousel" class="carousel slide-fade" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#homeCarousel" data-slide-to="1"></li>
                <li data-target="#homeCarousel" data-slide-to="2"></li>
                <li data-target="#homeCarousel" data-slide-to="3"></li>
                <li data-target="#homeCarousel" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="" id="player" style="border-radius: 5px;height: 400px;">
                  </div>
                </div>
                <div class="carousel-item">
                  <img  src="<?php echo build_url('html', 'car_fauvillers');?>"  alt="First slide" style="border-radius: 5px;height: 400px; width:100%;">
                  <div class="carousel-caption">
                    <h5>Projet Eolien - Fauvillers</h5>
                    <p>Les travaux de chemins ont débuté !</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img  src="<?php echo build_url('html', 'car_hose');?>"  alt="Second slide" style="border-radius: 5px;height: 400px;width:100%;">
                  <div class="carousel-caption">
                    <h5>Projet Hydraulique - Hose</h5>
                    <p>Le site de Marcinelle II</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img  src="<?php echo build_url('html', 'car_vda');?>"  alt="Third slide" style="border-radius: 5px;height: 400px;width:100%;">
                  <div class="carousel-caption">
                    <h5>Site Eolien - Vents d'Autelbas</h5>
                    <p>Les éoliennes de Vents d'Autelbas tournent à plein fouets</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo build_url('html', 'car_habay');?>"  alt="Fourth slide" style="border-radius: 5px;height: 400px;width:100%;">
                  <div class="carousel-caption">
                    <h5>Projet Eolien - Habay</h5>
                    <p>Un schéma du site d'implantation du projet éolien de Habay</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="" id="player" style="border-radius: 5px;height: 400px;">
                  </div>
                </div>
              </div> <!-- <div class="carousel-inner"> -->
                <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div> <!-- <div class="homeCarousel"> -->
              </div> <!-- <div class="col-lg-12"> -->
              </div> <!-- Row carousel -->

              <!-- Page d'accueil: Modules pour articles et autres -->
              <div class="row card-row">
                <div class="col-lg-4" style="padding-right:5px;">
                  <div class="card">
                    <div class="view overlay">
                      <img class="card-img-top" src="<?php echo build_url('html', 'header_logo');?>" alt="Card image cap">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <div class="card-body">
                      <!-- Title -->
                      <h6 class="card-title">Qui sommes-nous?</h6>
                      <hr>
                      <!-- Text -->
                      <p class="card-text">Une société coopérative est une entreprise dont la propriété est collective et où
                        le pouvoir est exercé démocratiquement par un groupe de personnes associées volontairement pour satisfaire
                        leurs aspirations et besoins économiques, sociaux et culturels communs.
                      </p>
                      <!-- Link -->
                      <a href="<?php echo build_url('html', 'coop_carte_id');?>" class="black-text d-flex justify-content-end"><h6>En savoir plus <i class="fa fa-angle-double-right"></i></h6></a>

                    </div>
                  </div>
                </div> <!-- col-lg-4 for card 1 -->
                <div class="col-lg-4" style="padding-right:5px; padding-left:5px;">
                  <div class="card">
                    <div class="view overlay">
                      <img class="card-img-top" src="<?php echo build_url('html', 'rescoop_logo');?>" alt="Card image cap">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <div class="card-body">
                      <!-- Title -->
                      <h6 class="card-title">Valeurs de Lucéole</h6>
                      <hr>
                      <!-- Text -->
                      <p class="card-text">La coopérative Lucéole scrl n’est pas vouée principalement à l’enrichissement de ses associés,
                        lesquels ne recherchent qu’un bénéfice patrimonial limité. Lucéole scrl cherchera plutôt à favoriser la
                      </p>
                      <!-- Link -->
                      <a href="<?php echo build_url('html', 'coop_carte_id');?>" class="black-text d-flex justify-content-end"><h6>En savoir plus <i class="fa fa-angle-double-right"></i></h6></a>

                    </div>
                  </div>
                </div> <!-- col-lg-4 for card 2 -->
                <div class="col-lg-4" style="padding-left:5px;">
                  <div class="card">
                    <div class="view overlay">
                      <img class="card-img-top" src="<?php echo build_url('html', 'cociter_logo');?>" alt="Card image cap">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <div class="card-body">
                      <!-- Title -->
                      <h6 class="card-title">Cociter</h6>
                      <hr>
                      <!-- Text -->
                      <p class="card-text">Nos tarifs servent uniquement à couvrir les coûts réels, dont l’achat de
                        l’électricité verte produite par les coopératives associées. Cette politique modérée nous permet
                        de proposer des prix compétitifs pour les coopérateurs des coopératives associées.
                      </p>
                      <!-- Link -->
                      <a href="<?php echo build_url('html', 'coop_carte_id');?>" class="black-text d-flex justify-content-end"><h6>En savoir plus <i class="fa fa-angle-double-right"></i></h6></a>

                    </div>
                  </div>
                </div> <!-- col-lg-4 for card 3 -->
              </div> <!-- row for cards -->
            </div> <!-- col-lg-9 -->

            <!-- Col3 : Bandant gauche vertical commun a toutes les pages (evenements, articles, liens...) -->
            <div class="col-lg-3 border-primary">
              <?php
              //$path = get_headers(constant('ROOT_URL')."index.php?page=right_banner&mode=php",1);
              //include_once($path['Location']);
              include_once(build_url('php', 'right_banner'));
              ?>
              <!-- Calendrier des évènements à venir -->
              <!-- <div class="row" style="background-color:white; border-radius: 5px; margin-top:10px">
              <div class="col-lg-12">
              <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=samuel.courtois93%40gmail.com&amp;color=%2329527A&amp;ctz=Europe%2FLuxembourg"
              style="border-width:0; padding-top:0px;" width="100%" height="400" frameborder="0" scrolling="yes"></iframe>
            </div>
          </div> -->
        </div> <!-- col-lg-3 -->
      </div> <!-- main row -->
      <!-- /container -->

        <?php
        //$path = get_headers(constant('ROOT_URL')."index.php?page=footer&mode=php",1);
        //include_once($path['Location']);
        include_once(build_url('php', 'footer'));
        ?>
        </div>
      </body>
      </html>
