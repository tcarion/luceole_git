<!DOCTYPE html>
<html>
  <head>
    <title>Visions & Valeurs</title>
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
              Visions et Valeurs
            </div>
            <div class="pages-body">
              <p>
              Nos activités sont conditionnées par nos valeurs essentielles qui sont :
              </p>
              <ol>
                <li>
                  <p>
                    <em>Economies d’énergie, Energies renouvelables et préservation de l’environnement</em>
                  </p>
                  <p>
                    Le dérèglement climatique, les nombreuses dégradations environnementales et atteintes à la
                    biodiversité causées par les activités humaines depuis le début de l’ère industrielle, nous
                    obligent à changer d’urgence notre mode de vie et de consommation.
                    Le vent, le soleil, les mouvements d’eau, la géothermie, la biomasse sont des ressources
                    naturelles propres, locales et pour certaines abondantes. Leur exploitation ne produit pas ou
                    peu de CO2 et ne compromet donc pas l’avenir de la planète.
                    En combinant les indispensables économies d’énergie, les divers systèmes de production
                    d’énergie renouvelable et en développant des technologies avancées dans le respect de la
                    nature et de l’humain, nous permettrons aux générations futures de vivre sur une planète
                    préservée.
                  </p>
                </li>
                <br>
                <li>
                  <p>
                    <em>Economie locale et circulaire</em>
                  </p>
                  <p>
                    En matière d’énergie, comme dans beaucoup d’autres domaines, nous devons développer les
                    ressources locales, nous les réapproprier pour devenir les acteurs de notre futur.
                    Pourquoi les habitants et les communes ne pourraient-ils pas être associés aux divers projets
                    et participer aux bénéfices engendrés par ces ressources locales ?
                    Nous pouvons devenir les producteurs de l’électricité que nous consommons !
                    Les citoyens et les communes ont tout à y gagner !
                  </p>
                </li>
                <br>
                <li>
                  <p>
                    <em>Participation citoyenne et solidaire</em>
                  </p>
                  <p>
                    La coopérative Lucéole scrl n’est pas un outil spéculatif et ne vise pas à l’enrichissement de
                    ses coopérateurs.
                    Etre coopérateur, c’est avant tout de savoir en toute confiance et transparence, à quoi sert
                    votre argent et comment il est géré.
                    Nous cherchons donc à favoriser la participation citoyenne dans des projets locaux,
                    démocratiques et éducatifs.
                  </p>
                </li>
                <br>

              </ol>
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
