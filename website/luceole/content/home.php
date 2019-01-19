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
    <br>
    <div class="row">
      <!-- Col9 : Contenu propre a chaque page (different sur chaque page)-->
      <div class="col-lg-9 border-danger">
        <!-- Page d'accueil: Images/articles defilant -->
        <div class="row">
          <div class="col-lg-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img  src="<?php echo constant('ROOT_URL'); ?>luceole/files/luceole-header-logo.jpg"  alt="First slide" style="border-radius: 5px;height: 400px;">
                  <div class="carousel-caption">
                    <h5>Cap1</h5>
                    <p>Explication</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo constant('ROOT_URL'); ?>luceole/files/cociter.jpg"  alt="Second slide" style="border-radius: 5px;height: 400px;">
                  <div class="carousel-caption">
                    <h5>Cap2</h5>
                    <p>Explication</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo constant('ROOT_URL'); ?>luceole/files/rescoop.png"  alt="Third slide" style="border-radius: 5px;height: 400px;">
                  <div class="carousel-caption">
                    <h5>Cap3</h5>
                    <p>Explication</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
        <!-- Page d'accueil: Modules pour articles et autres -->
        <div class="row">
          <div class="col-lg-12">

          </div>
        </div>
      </div>
      <!-- Col3 : Bandant gauche vertical commun a toutes les pages (evenements, articles, liens...) -->
      <div class="col-lg-3 border-primary">
        <!-- Calendrier des évènements à venir -->
        <div class="row" style="background-color:white; border-radius: 5px; margin-top:10px">
          <div class="col-lg-12">
            <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=samuel.courtois93%40gmail.com&amp;color=%2329527A&amp;ctz=Europe%2FLuxembourg"
            style="border-width:0; padding-top:0px;" width="100%" height="400" frameborder="0" scrolling="yes"></iframe>
          </div>
        </div>
        <!-- Actualité en rapport avec Lucéole, développement durable, etc -->

        <div class="row" style="background-color:white; border-radius: 5px; margin-top:10px">
          <div class="col-lg-12">
            <div style="font-weight: bold">
              Article 1
            </div>
            <p id="article1_suite" style="display:None">
              Suite de l'article 1
            </p>
            <p>
              <a id="seeMore1" onclick="toggleSeeMore('article1_suite','1')" href="javascript:void(0);">See More</a>
            </p>
          </div >
        </div >

        <div class="row" style="background-color:white; border-radius: 5px; margin-top:10px">
          <div class="col-lg-12">
            <div style="font-weight: bold">
              Article 2
            </div>

            <p id="article2_suite" style="display:None">
              Suite de l'article 2
            </p>
            <a id="seeMore2" onclick="toggleSeeMore('article2_suite','2')" href="javascript:void(0);">See More</a>
          </div >
        </div >

        <!-- Liens utiles en rapport avec Lucéole, développement durable, énergies, etc -->
        <div class="row" style="background-color:white; border-radius: 5px; margin-top:10px">
          htrhkl
        </div>
      </div>
    </div>

    <!-- <div class="jumbotron">
    <h1>Navbar example</h1>
    <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
    <p>
    <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
  </p>
</div> -->
</div> <!-- /container -->
<<?php
$path = get_headers(constant('ROOT_URL')."index.php?page=footer&mode=php",1);
include_once($path['Location']);
?>
</body>
</html>
