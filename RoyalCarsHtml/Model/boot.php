<?php


class boot
{
    private $model;
    private $merk;
    private $locatie;
    private $database;
    private $bouwjaar;
    private $prijs;
    private $beschrijving;
    private $foto;
    private $services;
    private $id;

    public function __construct($bootId)
    {
        $this->database = new database();
        $bootIdArray = array("id", "plaatsen", "bouwjaar", "prijs");
        $bootDataArray = array("merk", "model", "beschrijving", "foto");
        $items = $this->database->getJoinWhere("yacht", "yachtmodels", $bootIdArray, $bootDataArray, "modelId", "id", "WHERE yacht.id = " . $bootId);

        if ($items->num_rows > 0) {

            while ($row = $items->fetch_assoc()) {
                $this->model = $row['model'];
                $this->locatie = $row['plaatsen'];
                $this->merk = $row['merk'];
                $this->bouwjaar = $row['bouwjaar'];
                $this->prijs = $row['prijs'];
                $this->beschrijving = $row['beschrijving'];
                $this->id = $row['id'];
                $this->foto = $row['foto'];
            }
        }

        $this->makeServices($this->id);
    }

    private function makeServices($id)
    {
        $item = array('naam', 'prijs', 'id');
        $items = $this->database->getWhere("mogelijkheden", $item, "idyacht", "=", $id);
        if ($items->num_rows > 0) {
            $this->services = array();
            while ($row = $items->fetch_assoc()) {
                $boot = array($row['naam'], $row['prijs'], $row['id']);
                array_push($this->services, $boot);
            }
        }

    }

    public function getFotos()
    {
        return explode(",", $this->foto);
    }

    public function getServices()
    {
        return $this->services;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getBeschrijving()
    {
        return $this->beschrijving;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function getPrijs()
    {
        return $this->prijs;
    }

    public function getBouwjaar()
    {
        return $this->bouwjaar;
    }

    public function getMerk()
    {
        return $this->merk;
    }

    public function getLocatie()
    {
        return $this->locatie;
    }
}