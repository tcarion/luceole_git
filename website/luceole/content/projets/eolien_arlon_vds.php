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
      <<?php
      $path = get_headers(constant('ROOT_URL')."index.php?page=nav&mode=php",1);
      include_once($path['Location']);
      ?>

      <<?php
      $path = get_headers(constant('ROOT_URL')."index.php?page=footer&mode=php",1);
      include_once($path['Location']);
      ?>
    </div>
  </body>
</html>
