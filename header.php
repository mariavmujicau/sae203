<header>
<?php 
$page =$_SERVER['PHP_SELF']; 
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LA GALERIE <br>DU LUXE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li <?php if(strpos($page,"index.php")) echo'class="active"'; ?> >
       <a href="index.php">Accueil</a>
        </li>
        <li <?php if(strpos($page,"listing.php")) echo'class="active"'; ?>>
          <a  href="listing.php">Nos articles</a>
        </li>
        <li <?php if(strpos($page,"form_recherche.php")) echo'class="active"'; ?>>
          <a href="form_recherche.php">Formulaire</a>
        </li>
        <li <?php if(strpos($page,"admin/admin.php")) echo'class="active"'; ?>>
          <a  href="admin/admin.php">Admin</a>
        </li>
          <!-- <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> -->
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
