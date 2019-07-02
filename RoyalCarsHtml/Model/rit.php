<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 28-6-2019
 * Time: 00:23
 */

class rit
{
    private $currentLocation;
    private $newLocation;
    private $beginDatum;
    private $eindDatum;
    private $extras;
    private $extraGegevens;
    private $id;
    private $database;

    public function __construct($currentLocation, $newLocation, $beginDatum, $eindDatum, $extras, $extraGegevens)
    {
        $this->currentLocation = $currentLocation;
        $this->newLocation = $newLocation;
        $this->beginDatum = $beginDatum;
        $this->eindDatum = $eindDatum;
        $this->extras = $extras;
        $this->extraGegevens = $extraGegevens;
    }

    public function addToDatabase()
    {
        $data = array('currentLocation', 'newLocation', 'beginDatum', 'eindDatum', 'extras', 'extraGegevens');
        $values = array($this->currentLocation, $this->newLocation, $this->beginDatum, $this->eindDatum, $this->extras, $this->extraGegevens);
        $this->database = new database();

        $this->id = $this->database->insert('rit', $data, $values);
    }

    public function getId()
    {
        return $this->id;
    }

}