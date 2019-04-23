<!DOCTYPE html>
<html>
  <head>
    <title>Questions fréquentes</title>
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
              Questions Fréquentes
            </div>
            <div class="pages-body">
              <div class="accordion" id="accordion">
                <?php
                $path = get_headers(constant('ROOT_URL')."index.php?page=faq1&mode=php",1);
                include_once($path['Location']);
                ?>
                <?php
                $path = get_headers(constant('ROOT_URL')."index.php?page=faq2&mode=php",1);
                include_once($path['Location']);
                ?>
                <?php
                $path = get_headers(constant('ROOT_URL')."index.php?page=faq3&mode=php",1);
                include_once($path['Location']);
                ?>
                <?php
                $path = get_headers(constant('ROOT_URL')."index.php?page=faq4&mode=php",1);
                include_once($path['Location']);
                ?>
                <?php
                $path = get_headers(constant('ROOT_URL')."index.php?page=faq5&mode=php",1);
                include_once($path['Location']);
                ?>
                <?php
                $path = get_headers(constant('ROOT_URL')."index.php?page=faq6&mode=php",1);
                include_once($path['Location']);
                ?>
                <?php
                $path = get_headers(constant('ROOT_URL')."index.php?page=faq7&mode=php",1);
                include_once($path['Location']);
                ?>
                <?php
                $path = get_headers(constant('ROOT_URL')."index.php?page=faq8&mode=php",1);
                include_once($path['Location']);
                ?>
                <?php
                $path = get_headers(constant('ROOT_URL')."index.php?page=faq9&mode=php",1);
                include_once($path['Location']);
                ?>
                <?php
                $path = get_headers(constant('ROOT_URL')."index.php?page=faq10&mode=php",1);
                include_once($path['Location']);
                ?>
                <?php
                $path = get_headers(constant('ROOT_URL')."index.php?page=faq11&mode=php",1);
                include_once($path['Location']);
                ?>
                <?php
                $path = get_headers(constant('ROOT_URL')."index.php?page=faq12&mode=php",1);
                include_once($path['Location']);
                ?>
                <?php
                $path = get_headers(constant('ROOT_URL')."index.php?page=faq13&mode=php",1);
                include_once($path['Location']);
                ?>
                <?php
                $path = get_headers(constant('ROOT_URL')."index.php?page=faq14&mode=php",1);
                include_once($path['Location']);
                ?>
                <?php
                $path = get_headers(constant('ROOT_URL')."index.php?page=faq15&mode=php",1);
                include_once($path['Location']);
                ?>

              </div>

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
