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
          "coop_gouvernance" => "content/la_cooperative/gouvernance.php",
          "coop_statuts" => "content/la_cooperative/statuts.php",
          "coop_roi" => "content/la_cooperative/roi.php",
          "coop_ca" => "content/la_cooperative/conseil_administration.php",
          "pr_habay" => "content/projets/eolien_habay.php",
          "pr_fauvillers" => "content/projets/eolien_fauvillers.php",
          "pr_arlon_vds" => "content/projets/eolien_arlon_vds.php",
          "pr_nantimont" => "content/projets/eolien_nantimont.php",
          "pr_hydro_sambre" => "content/projets/hydro_sambre_ourthe.php",
          "elec_circuit_court" =>"content/fourniture_electricite/circuit_court.php",
          "devenir_cooperateur" =>"content/devenir_cooperateur/devenir_cooperateur.php",
          "send_subs_form" => "content/forms/submit_subscription_form.php",
          "subscription_form" => "content/forms/subscription_form.php",
          "lettres_information" => "content/lettres_information/lettres_information.php",
          "right_banner" => "content/right_banner.php",
          "schema_implantation_habay" => "files/schema-projet-habay.jpg",
          "schema_implantation_fauvillers" => "files/schema-projet-fauvillers.png",
          "luceolien_1" => "files/luceolien-1.png",
          "luceolien_2" => "files/luceolien-2.png",
          "luceolien_3" => "files/luceolien-3.png",
          "luceolien_4" => "files/luceolien-4.png",
          "luceolien_5" => "files/luceolien-5.png",
          "luceolien_6" => "files/luceolien-6.png",
          "luceolien_7" => "files/luceolien-7.png",
          "luceolien_n_18" => "files/luceoliens/luceolien18.pdf",
          "luceolien_n_19" => "files/luceoliens/luceolien19.pdf",
          "luceolien_n_20" => "files/luceoliens/luceolien20.pdf",
          "luceolien_n_21" => "files/luceoliens/luceolien21.pdf",
          "luceolien_n_22" => "files/luceoliens/luceolien22.pdf",
          "luceolien_n_23" => "files/luceoliens/luceolien23.pdf",
          "faq" => "content/faq/faq.php",
          "faq1" => "content/faq/faq1.php",
          "faq2" => "content/faq/faq2.php",
          "faq3" => "content/faq/faq3.php",
          "faq4" => "content/faq/faq4.php",
          "faq5" => "content/faq/faq5.php",
          "faq6" => "content/faq/faq6.php",
          "faq7" => "content/faq/faq7.php",
          "faq8" => "content/faq/faq8.php",
          "faq9" => "content/faq/faq9.php",
          "faq10" => "content/faq/faq10.php",
          "faq11" => "content/faq/faq11.php",
          "faq12" => "content/faq/faq12.php",
          "faq13" => "content/faq/faq13.php",
          "faq14" => "content/faq/faq14.php",
          "faq15" => "content/faq/faq15.php",
          "contact" => "content/contact/contact.php",
          "physical_person" => "content/forms/physical_person.php",
          "moral_person" => "content/forms/moral_person.php"];

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
