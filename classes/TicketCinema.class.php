<?php
require_once __DIR__ . '/Ticket.class.php';
class TicketCinema extends Ticket
{
  private int $ageMinimum;
  private string $heure;

  public function __construct($film, $date, $place, $tarif, $ageMinimum, $heure)
  {

    parent::__construct($film, $date, $place, $tarif);
    $this->ageMinimum = $ageMinimum;
    $this->heure = $heure;
  }

  public static function getFilmAvaiable()
  {
    return [
      "Cyrano de Bergerac (1897)",
      "Antigone",
      "Hamlet",
      "Roméo et Juliette",
      "Dom Juan",
      "Le Cid",
      "En attendant Godot",
      "Phèdre",
      "Macbeth",
      "L'Avare"
    ];
  }

  public function getFilm()
  {
    return $this->film;
  }

  public function setFilm(string $film)
  {
    $this->film = $film;
  }

  public function getSalle()
  {
    $keyFilm = self::getFilmAvaiable();

    switch (array_search($this->getNom(), $keyFilm)) {
      case 0:
      case 3:
      case 6:
        return "PhP";
        break;
      case 1:
      case 4:
      case 7:
        return "Laravel";
        break;
      case 2:
      case 8:
        return "React";
        break;
      case 9:
      case 5:
        return "Javascript";
        break;
      default:
        return "HTML";
    }
  }

  public function getAgeMinimum()
  {
    return $this->ageMinimum;
  }

  public function setAgeMinimum(int $ageMinimum)
  {
    $this->ageMinimum = $ageMinimum;
  }

  public function getHeure()
  {
    return $this->heure;
  }

  public function setHeure(int $heure)
  {
    $this->heure = $heure;
  }
}