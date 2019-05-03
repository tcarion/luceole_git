<!DOCTYPE html>
<html>
  <head>
    <title>Questions fréquentes</title>
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
      //$path = get_headers(constant('ROOT_URL')."index.php?page=nav&mode=php",1);
      //include_once($path['Location']);
      include_once(build_url('php', 'nav'));
      ?>
      <div class="row pages">
        <div class="col-lg-9 border-primary">
          <div class="row pages-title">
            <div class="pages-title">
              Contactez-Nous
            </div>
            <div class="pages-body">
              <p>Page en construction</p>
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
