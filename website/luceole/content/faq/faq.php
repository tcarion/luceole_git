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
        include_once(build_url('php', 'nav'));
      ?>
      <div class="row pages faq">
        <div class="col-lg-9 border-primary">
          <div class="row pages-title">
            <div class="pages-title">
              Questions Fréquentes
            </div>
            <div class="pages-body">
              <div class="accordion" id="accordion">
                <?php
                  include_once(build_url('php', 'faq1'));
                  include_once(build_url('php', 'faq2'));
                  include_once(build_url('php', 'faq3'));
                  include_once(build_url('php', 'faq4'));
                  include_once(build_url('php', 'faq5'));
                  include_once(build_url('php', 'faq6'));
                  include_once(build_url('php', 'faq7'));
                  include_once(build_url('php', 'faq8'));
                  include_once(build_url('php', 'faq9'));
                  include_once(build_url('php', 'faq10'));
                  include_once(build_url('php', 'faq11'));
                  include_once(build_url('php', 'faq12'));
                  include_once(build_url('php', 'faq13'));
                  include_once(build_url('php', 'faq14'));
                  include_once(build_url('php', 'faq15'));
                ?>

              </div>

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
