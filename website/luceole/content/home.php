<!DOCTYPE html>
<html lang="en">
<head>
  <title>Accueil</title>
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
    //$path = constant('DOC_ROOT')."/luceole/content/nav.php";
    //include_once($path);
    //echo constant('ROOT_URL')."index.php?page=home";
    $path = get_headers(constant('ROOT_URL')."index.php?page=nav&mode=php",1);
    //echo $output['Location'];
    include_once($path['Location']);
    //print_r($output);
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
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img  src="<?php echo constant('ROOT_URL'); ?>index.php?page=header_logo&mode=html"  alt="First slide" style="border-radius: 5px;height: 400px;">
                  <div class="carousel-caption">
                    <h5>Cap1</h5>
                    <p>Explications</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="" id="player" style="border-radius: 5px;height: 400px;">
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo constant('ROOT_URL'); ?>index.php?page=rescoop_logo&mode=html"  alt="Third slide" style="border-radius: 5px;height: 400px;">
                  <div class="carousel-caption">
                    <h5>Cap3</h5>
                    <p>Explications</p>
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
                      <img class="card-img-top" src="<?php echo constant('ROOT_URL'); ?>index.php?page=header_logo&mode=html" alt="Card image cap">
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
                      <a href="<?php echo constant('ROOT_URL'); ?>index.php?page=vision_globale&mode=html" class="black-text d-flex justify-content-end"><h6>En savoir plus <i class="fas fa-angle-double-right"></i></h6></a>

                    </div>
                  </div>
                </div> <!-- col-lg-4 for card 1 -->
                <div class="col-lg-4" style="padding-right:5px; padding-left:5px;">
                  <div class="card">
                    <div class="view overlay">
                      <img class="card-img-top" src="<?php echo constant('ROOT_URL'); ?>index.php?page=rescoop_logo&mode=html" alt="Card image cap">
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
                      <a href="<?php echo constant('ROOT_URL'); ?>index.php?page=vision_globale&mode=html" class="black-text d-flex justify-content-end"><h6>En savoir plus <i class="fas fa-angle-double-right"></i></h6></a>

                    </div>
                  </div>
                </div> <!-- col-lg-4 for card 2 -->
                <div class="col-lg-4" style="padding-left:5px;">
                  <div class="card">
                    <div class="view overlay">
                      <img class="card-img-top" src="<?php echo constant('ROOT_URL'); ?>index.php?page=cociter_logo&mode=html" alt="Card image cap">
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
                      <a href="<?php echo constant('ROOT_URL'); ?>index.php?page=vision_globale&mode=html" class="black-text d-flex justify-content-end"><h6>En savoir plus <i class="fas fa-angle-double-right"></i></h6></a>

                    </div>
                  </div>
                </div> <!-- col-lg-4 for card 3 -->
              </div> <!-- row for cards -->
            </div> <!-- col-lg-9 -->

            <!-- Col3 : Bandant gauche vertical commun a toutes les pages (evenements, articles, liens...) -->
            <div class="col-lg-3 border-primary">
              <!-- Calendrier des évènements à venir -->
              <!-- <div class="row" style="background-color:white; border-radius: 5px; margin-top:10px">
                <div class="col-lg-12">
                  <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=samuel.courtois93%40gmail.com&amp;color=%2329527A&amp;ctz=Europe%2FLuxembourg"
                  style="border-width:0; padding-top:0px;" width="100%" height="400" frameborder="0" scrolling="yes"></iframe>
                </div>
              </div> -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="subscription-button">
                    <div class="row">
                      <div class="col-lg-12">
                        <a href="http://www.coophub.eu/" target="_blank">
                          <button type="button" class="btn btn-primary">Devenir Coopérateur</button>
                        </a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <a href="https://www.cociter.be/devenir-client-de-cociter/" target="_blank">
                          <button type="button" class="btn btn-primary">Devenir Client Cociter</button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Actualité en rapport avec Lucéole, développement durable, etc -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Article 1</h5>
                      <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                      <p class="card-text">Debut article 1</p>
                      <p id="article1_suite" class="card-text" style="display:None">Pour ce qui est de notre coopérative, à coté de la production d’énergie verte, Lucéole scrl veut promouvoir une utilisation rationnelle et responsable de l’énergie. Pour ce faire elle développera les services qui permettront à ses coopérateurs de réduire leur empreinte énergétique. La coopérative veut donc être active dans la production et la consommation durable. Elle cherchera aussi à ce que les coopérateurs puissent consommer l’énergie produite à des prix stables et avantageux. </p>
                      <p class="card-text">
                        <a id="seeMore1" onclick="toggleSeeMore('article1_suite','1')" href="javascript:void(0);" class="card-link">See more</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <div class="row">
                <div class="col-lg-12" style="background-color:white; border-radius: 5px;">
                  <div style="font-weight: bold">
                    Article 1
                  </div>
                  <p id="article1_suite" style="display:None">
                    Suite de l'article 1
                  </p>
                  <p>
                    <a id="seeMore1" onclick="toggleSeeMore('article1_suite','1')" href="javascript:void(0);">See More</a>
                  </p>
                </div>
              </div> -->

              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Article 2</h5>
                      <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                      <p class="card-text">Debut article 2</p>
                      <p id="article2_suite" class="card-text" style="display:None">Le développement durable ou plus justement sous sa dénomination anglaise « sustainable development » est le principe selon lequel l’humanité doit répondre aux besoins du présent sans compromettre la capacité des générations futures à répondre aux leurs. La cohérence transversale entre nos décisions doit permettre de réconcilier économie, environnement et société et assurer une meilleure qualité de vie pour tous aujourd’hui et demain. Le développement durable est une vision du progrès qui intègre des objectifs à court et long terme, l’action locale et globale et considère les thèmes sociaux, économiques et environnementaux comme des composants indissociables et interdépendants du développement humain. (définition de base U.E.).</p>
                      <p class="card-text">
                        <a id="seeMore2" onclick="toggleSeeMore('article2_suite','2')" href="javascript:void(0);" class="card-link">See more</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Liens utiles en rapport avec Lucéole, développement durable, énergies, etc -->
              <div class="row">
                <div class="col-lg-12">

                </div >
              </div>
            </div> <!-- col-lg-3 -->
          </div> <!-- main row -->
        </div> <!-- /container -->

        <?php
        $path = get_headers(constant('ROOT_URL')."index.php?page=footer&mode=php",1);
        include_once($path['Location']);
        ?>
      </body>
      </html>
