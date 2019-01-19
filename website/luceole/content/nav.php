<div class="header_logo">
  <img src="<?php echo constant('ROOT_URL'); ?>index.php?page=header_logo&mode=html" style="border-radius: 5px;height: 75px;">
</div>

<nav class="navbar rounded navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo constant('ROOT_URL'); ?>index.php?page=home&mode=html" target="_top">Accueil</a>
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
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=coop_carte_id&mode=html" target="_top">Qui sommes-nous ?</a>
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=coop_vis_val" target="_top">Visions & Valeurs</a>
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=coop_ca" target="_top">Le Conseil d'administration</a>
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=coop_statuts" target="_top">Statuts</a>
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=coop_roi" target="_top">ROI</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Projets
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=pr_habay" target="_top">Eolien - Habay</a>
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=pr_fauvillers" target="_top">Eolien - Fauvillers</a>
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=pr_arlon_vds" target="_top">Eolien - Arlon - VDS</a>
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=pr_nantimont" target="_top">Eolien - Nantimont</a>
          <a class="dropdown-item" href="<?php echo constant('ROOT_URL'); ?>index.php?page=pr_hydro_sambre" target="_top">Hydraulique - Sambre & Ourthe</a>
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
