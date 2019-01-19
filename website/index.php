<?php

$page = $_GET['page'];
$mode = $_GET['mode'];

//$urls = new SplObjectStorage();



$root_html = "http://localhost:8888/luceole/";
$root_php = $_SERVER['DOCUMENT_ROOT']."/luceole/";

$array = ["nav" => "content/nav.php",
          "footer" => "content/footer.php",
          "header" => "content/header.php",
          "home" => "content/home.php",
          "header_logo" => "files/luceole-header-logo.jpg",
          "rescoop_logo" => "files/rescoop.png",
          "cociter_logo" => "files/cociter.jpg",
          "vds_logo" => "files/vds.png",
          "apere_logo" => "files/apere-logo.png",
          "saw_b_logo" => "files/saw-b-logo.png",
          "credal_logo" => "files/credal-logo.png",
          "coop_carte_id" => "content/la_cooperative/carte_id.php",
          "coop_vis_val" => "content/la_cooperative/visions_valeurs.php",
          "coop_statuts" => "content/la_cooperative/statuts.php",
          "coop_roi" => "content/la_cooperative/roi.php",
          "coop_ca" => "content/la_cooperative/conseil_administration.php"];

$file_location = "test";

if ($mode == 'html') {
  $file_location = $root_html.$array[$page];
}
elseif ($mode == 'php') {
  $file_location = $root_php.$array[$page];
}
header("Location: ".$file_location);
//header("Location: ".$array[$mode][$page]);

?>
