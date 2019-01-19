<div class="header_logo">
  <img src="<?php echo constant('ROOT_URL'); ?>index.php?page=header_logo&mode=html" style="border-radius: 5px;height: 75px;">
</div>

<nav class="navbar rounded navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          La Coopérative
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=coop_carte_id&mode=html" target="_top">Carte d'identité</a>
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=vision_globale" target="_top">Vision Globale</a>
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=missions" target="_top">Missions</a>
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=valeurs" target="_top">Valeurs</a>
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=reseau_luceole" target="_top">Le réseau Lucéole</a>
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=gouvernance" target="_top">Gouvernance</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Projets
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=habay-la-neuve" target="_top">Habay-la-Neuve</a>
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=fauvillers" target="_top">Fauvillers</a>
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=hose" target="_top">Hose</a>
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=autres" target="_top">Autres</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Fourniture d'électricité</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Lettres d'information</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Devenir Coopérateur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
