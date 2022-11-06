<?php
$siteRootPath = '/Php-ticket/';
?>
<!-- Ici je ne met que le menu -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">E-Commerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteRootPath; ?>">Accueil</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteRootPath; ?>index-cinema.php">Ticket cinema</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteRootPath; ?>index-theatre.php">Ticket theatre</a>
      </li>
    </ul>
  </div>
</nav>