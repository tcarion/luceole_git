<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Accueil</title>
    <?php
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .="/luceole/content/header.php";
       include_once($path);
    ?>
    je suis stupide.
  </head>



  <body>

    <div class="container">
      <?php
         $path = constant('DOC_ROOT')."/luceole/content/nav.php";
         include_once($path);
      ?>
      <!-- Module page d'Accueil -->
      <!-- Row 1 : contenu sauf navbar et footer -->
      <div class="row">
        <!-- Col9 : Contenu propre a chaque page (different sur chaque page)-->
        <div class="col-lg-9 border-danger">
          <!-- Page d'accueil: Images/articles defilant -->
          <div class="row">

          </div>
          <!-- Page d'accueil: Modules pour articles et autres -->
          <div class="row">

          </div>
        </div>
        <!-- Col3 : Bandant gauche vertical commun a toutes les pages (evenements, articles, liens...) -->
        <div class="col-lg-3 border-primary">
          <!-- Calendrier des évènements à venir -->
          <div class="row" style="background=white">
            <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=samuel.courtois93%40gmail.com&amp;color=%2329527A&amp;ctz=Europe%2FLuxembourg"
            style="border-width:0; padding-top:15px;" height="400" frameborder="0" scrolling="yes"></iframe>
          </div>
          <!-- Actualité en rapport avec Lucéole, développement durable, etc -->
          <div class="row" style="background-color:white; border-radius: 5px; margin-top:10px">
            <div class="col-lg-12">
              <div class="row">
                <div style="font-weight: bold">
                  Article 1
                </div>
                <p id="article1_suite" style="display:None">
                  Suite de l'article 1
                </p>
                <p>
                  <a id="seeMore" onclick="toggleSeeMore('article1_suite')" href="javascript:void(0);">See More</a>
                </p>
              </div >
            </div >
          </div >

          <div class="row" style="background-color:white; border-radius: 5px; margin-top:10px">
            <div class="col-lg-12">
              <div class="row">
                <div style="font-weight: bold">
                  Article 2
                </div>

                <p id="article2_suite" style="display:None">
                  Suite de l'article 2
                </p>
                <br>
                <a id="seeMore" onclick="toggleSeeMore('article2_suite')" href="javascript:void(0);">See More</a>
              </div >
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
       $path = constant('DOC_ROOT')."/luceole/content/footer.php";
       include_once($path);
    ?>
  </body>
</html>
