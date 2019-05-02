<!DOCTYPE html>
<html>
  <head>
    <title>Le Conseil d'Administration</title>
    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/php_config.php";
      include_once($path);
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/index_url.php";
      include_once($path);
      include_once(build_url('php', 'header'));
    ?>
  </head>
  <body>
    <div class="container">
      <?php
        include_once(build_url('php', 'nav'));
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
            include_once(build_url('php', 'right_banner'));
          ?>
        </div>

      </div>
      <?php
        include_once(build_url('php', 'footer'));
      ?>
    </div>
  </body>
</html>
