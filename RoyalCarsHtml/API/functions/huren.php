<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 27-6-2019
 * Time: 23:47
 */

class huren
{
    private $dataArray;
    private $klantId;
    private $ritId;
    private $idBetaal;
    private $database;
    private $id;

    public function __construct($dataArray)
    {
        $this->dataArray = $dataArray;

        $klant = new klant($this->dataArray['voornaam'], $this->dataArray['achternaam'], $this->dataArray['email'], $this->dataArray['telefoon'], $this->dataArray['gender']);
        $rit = new rit($this->dataArray['currentLocation'], $this->dataArray['newLocation'], $this->dataArray['beginDatum'], $this->dataArray['eindDatum'], $this->dataArray['extras'], $this->dataArray['extraGegevens']);

        $klant->addToDatabase();
        $rit->addToDatabase();

        $this->klantId = $klant->getId();
        $this->ritId = $rit->getId();

        $this->idBetaal = $this->dataArray['betaalMethode'];

        $data = array('idklant', 'idrit', 'idbetaal');
        $values = array($this->klantId, $this->ritId, $this->idBetaal);
        $this->database = new database();

        $this->database->insert('reserveringen', $data, $values);
    }

    public function getId()
    {
        return $this->id;
    }

}