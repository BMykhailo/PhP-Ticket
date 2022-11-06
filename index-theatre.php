<?php require_once __DIR__ . '/classes/TicketTheatre.class.php'; ?>

<!DOCTYPE html>
<html>

<head>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="../index.css">
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
  <h1>Commmander un nouveau ticket </h1>
  <section class="section-products">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
          <form action="ticket-theatre.php" method="post">
            <div class="form-group">
              <label for="exampleInputPassword1">Piece</label>
              <select class="custom-select" name="piece">
                <option selected>Choissiez la piece </option>
                <?php foreach (TicketTheatre::getTheatreAvaiable() as $v) { ?>
                <option value="<?php echo $v; ?>">
                  <?php echo $v; ?>
                </option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Date</label>
              <input type="date" name="date" class="form-control" aria-describedby="emailHelp" placeholder="Date">
            </div>
            <div class="form-group row">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Heure de debut</label>
                <input type="time" name="heureDebut" class="form-control" placeholder="Time">
              </div>
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Heure d'entracte</label>
                <input type="time" name="heureEntracte" class="form-control" placeholder="Time">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Place</label>
              <input type="text" name="place" class="form-control" placeholder="Numero de place">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tarif</label>
              <select class="custom-select" name="tarif">
                <option selected>Choissiez un tarif</option>
                <option value="enfant">Enfant </option>
                <option value="adulte">Adulte </option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Age</label>
              <input type="number" name="age" class="form-control" placeholder="Age">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    </sec