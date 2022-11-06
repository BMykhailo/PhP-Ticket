<?php
require_once __DIR__ . '/classes/TicketCinema.class.php';

// Si on est pas en post, alors on redirige sur la page d'index   
if ($_SERVER["REQUEST_METHOD"] != "POST") {
  header('Location: index-cinema.php');
}

// On INSTANCIE notre nouveau produit, en récupérant ce qu'on as mis dans le formulaire a l'aide de POST
// $film, $date, $place, $tarif, $salle, $ageMinimum, $heure
$ticketCinema = new TicketCinema(
  $_POST["film"],
  $_POST["date"],
  $_POST["place"],
  $_POST["tarif"],
  $_POST["age"],
  $_POST["heure"]
  );

?>
<!DOCTYPE html>
<html>

<head>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
</head>

<body>
  <?php include __DIR__ . '/components/header.php'; ?>

  <section class="container">
    <h1>Ticket validé</h1>
    <div class="row">
      <article class="card col-sm-12 fl-left">
        <section class="date">
          <time datetime="23th feb">
            <span>
              <?php echo $ticketCinema->getDateFormat('d') ?>
            </span>
            <span>
              <?php echo $ticketCinema->getDateFormat('M') ?>
            </span>
          </time>
        </section>
        <section class="card-cont">
          <small>Commande n°
            <?php echo $ticketCinema->getId(); ?>
          </small>
          <h3>
            <?php echo $ticketCinema->getNom(); ?>
          </h3>
          <h4>
            Tarif :
            <?php echo $ticketCinema->getTarif(); ?>
          </h4>
          <div class="even-date">
            <i class="fa fa-calendar"></i>
            <time>
              <span>
                <?php echo $ticketCinema->getDateFormat() ?>
              </span>
              <span>
                <?php echo $ticketCinema->getHeure() ?>
              </span>
            </time>
          </div>
          <div class="even-info">
            <i class="fa fa-map-marker"></i>
            <p>Salle
              <?php echo $ticketCinema->getSalle(); ?>
            </p>
          </div>
          <a href="#">tickets</a>
        </section>
      </article>
    </div>
  </section>
  <?php include __DIR__ . '/components/footer.php'; ?>
</body>

</html>