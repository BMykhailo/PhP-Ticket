<?php
require_once __DIR__ . '/Ticket.class.php';
class TicketTheatre extends Ticket
{
  private string $piece;
  private string $heureDebut;
  private string $heureEntracte;

  public function __construct($piece, $date, $place, $tarif, $heureDebut, $heureEntracte)
  {

    parent::__construct($piece, $date, $place, $tarif);
    $this->heureDebut = $heureDebut;
    $this->heureEntracte = $heureEntracte;
  }
  public static function getTheatreAvaiable()
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
      "L'Avare",
    ];
  }
  public function getSalle()
  {
    $keyFilm = self::getTheatreAvaiable();

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
  public function getHeureDebut()
  {
    return $this->heureDebut;
  }

  public function setHeureDebut(string $heureDebut)
  {
    $this->heureDebut = $heureDebut;
  }

  public function getHeureEntracte()
  {
    return $this->heureEntracte;
  }

  public function setHeureEntracte(int $heureEntracte)
  {
    $this->heureEntracte = $heureEntracte;
  }
}