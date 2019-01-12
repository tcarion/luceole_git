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
          hgfhg
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
