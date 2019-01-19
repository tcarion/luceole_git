<?php

$page = $_GET['page'];
$mode = $_GET['mode'];

//$urls = new SplObjectStorage();



$root_html = "http://localhost:8888/luceole/";
$root_php = $_SERVER['DOCUMENT_ROOT']."/luceole/";

$array = ["coop_carte_id" => "content/la_cooperative/carte_id.php",
          "nav" => "content/nav.php",
          "footer" => "content/footer.php",
          "header" => "content/header.php",
          "home" => "content/home.php",
          "header_logo" => "files/luceole-header-logo.jpg",
          "rescoop_logo" => "files/rescoop.png",
          "cociter_logo" => "files/cociter.jpg"];

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
