<?php

$page = $_GET['page'];
//echo ${$page};
$urls = new SplObjectStorage();

$root = "http://localhost:8888/luceole/";

$array = ["coop_carte_id" => $root."content/la_cooperative/carte_id.php",
          "nav" => $root."content/nav.php",
          "footer" => $root."content/footer.php",
          "header" => $root."content/header.php",
          "home" => $root."content/home_test.php"];

header("Location: ".$array[$page]);

?>
