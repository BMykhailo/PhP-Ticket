<?php
class Ticket
{
	private string $id;
	private string $nom;
	private string $date;
	private string $place;
	private string $tarif;

	public function __construct($nom, $date, $place, $tarif)
	{
		$idDate = date('m-Y', time());
		$idRand = rand(10, 99);
		$this->id = "$idDate-$idRand";
		$this->nom = $nom;
		$this->date = $date;
		$this->place = $place;
		$this->tarif = $tarif;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId(int $id)
	{
		$this->id = $id;
	}

	public function getNom()
	{
		return $this->nom;
	}

	public function setNom(string $nom)
	{
		$this->nom = $nom;
	}
	public function getDate()
	{
		return $this->date;
	}
	public function getDateFormat(string $format = 'l d F Y')
	{
		$date = new DateTime($this->date);
		return $date->format($format);
	}

	public function setDate(string $date)
	{
		$this->date = $date;
	}

	public function getPlace()
	{
		return $this->place;
	}

	public function setPlace(string $place)
	{
		$this->place = $place;
	}

	public function getTarif()
	{
		return $this->tarif;
	}

	public function setTarif(string $tarif)
	{
		$this->tarif = $tarif;
	}

}