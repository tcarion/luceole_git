<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Accueil</title>
    <?php
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .="/luceole/content/header.php";
       include_once($path);
    ?>
  </head>

  <body>

    <div class="container">
      <?php
         $path = constant('DOC_ROOT')."/luceole/content/nav.php";
         include_once($path);
      ?>

      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
        </p>
      </div>
    </div> <!-- /container -->
    <<?php
       $path = constant('DOC_ROOT')."/luceole/content/footer.php";
       include_once($path);
    ?>
  </body>
</html>
