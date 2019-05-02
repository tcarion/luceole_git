<!DOCTYPE html>
<html>
  <head>
    <title>Devenir Coopérateur</title>
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
              Devenir Coopérateur
            </div>
          </div>
          <?php
            include_once(build_url('php', 'subscription_form'));
          ?>
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
