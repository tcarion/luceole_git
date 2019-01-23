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
          "coop_ca" => "content/la_cooperative/conseil_administration.php",
          "pr_habay" => "content/projets/eolien_habay.php",
          "pr_fauvillers" => "content/projets/eolien_fauvillers.php",
          "pr_arlon_vds" => "content/projets/eolien_arlon_vds.php",
          "pr_nantimont" => "content/projets/eolien_nantimont.php",
          "pr_hydro_sambre" => "content/projets/hydro_sambre_ourthe.php",
          "elec_cociter" => "content/fourniture_electricite/cociter.php",
          "elec_circuit_court" =>"content/fourniture_electricite/circuit_court.php"];

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
