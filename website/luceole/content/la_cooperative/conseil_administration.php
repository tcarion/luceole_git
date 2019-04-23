<!DOCTYPE html>
<html>
  <head>
    <title>Le Conseil d'Administration</title>
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
      $path = get_headers(constant('ROOT_URL')."index.php?page=nav&mode=php",1);
      include_once($path['Location']);
      ?>
      <div class="row pages">
        <div class="col-lg-9 border-primary">
          <div class="row pages-title">
            <div class="pages-title">
              Le Conseil d'Administration
            </div>
            <div class="pages-body">
              <p>
                  Le Conseil d’administration de Lucéole (avril 2019) est composé de 9 personnes:
              </p>
              <ul>
                <li>
                  Tristan CARION, Arlon
                </li>
                <br>
                <li>
                  Jean-Pierre COURTOIS, Nobressart <i>(Attert)</i>
                </li>
                <br>
                <li>
                  Samuel COURTOIS, Arlon
                </li>
                <br>
                <li>
                  Michel DOLMANS, Habay-la-Vieille <i>(Habay)</i>
                </li>
                <br>
                <li>
                  Jérôme MACKELS, Habay-la-Vieille <i>(Habay)</i>
                </li>
                <br>
                <li>
                  Arnaud SERVAIS, Nobressart <i>(Attert)</i>
                </li>
                <br>
                <li>
                  Yves STORDEUR, Orsinfaing <i>(Habay)</i>
                </li>
                <br>
                <li>
                  Christine VANDEVELDE, Willancourt <i>(Musson)</i>
                </li>
                <br>
                <li>
                  Philippe VERBAUWHEDE, Bodange <i>(Fauvillers)</i>
                </li>
              </ul>
            </div>

          </div>
        </div>

        <div class="col-lg-3 border-primary">
          <?php
          $path = get_headers(constant('ROOT_URL')."index.php?page=right_banner&mode=php",1);
          include_once($path['Location']);
          ?>
        </div>

      </div>
      <?php
      $path = get_headers(constant('ROOT_URL')."index.php?page=footer&mode=php",1);
      include_once($path['Location']);
      ?>
    </div>
  </body>
</html>
