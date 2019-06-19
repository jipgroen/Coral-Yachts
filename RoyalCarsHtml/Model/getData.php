<?php


include "C:/xampp\htdocs\yacht\RoyalCarsHtml\View/items.php";

class getData
{
    public $database;
    public $itemsBuilder;

    public function __construct()
    {
        $this->database = new database();
        $this->itemsBuilder = new items;
    }

    function getYachtAanbod()
    {
        $bootIdArray = array("id", "plaatsen", "bouwjaar", "prijs");
        $bootDataArray = array("merk", "model", "beschrijving", "foto");
        $items = $this->database->getJoin("yacht", "yachtmodels", $bootIdArray, $bootDataArray, "modelId", "id");
        $html = '';
        if ($items->num_rows > 0) {

            while ($row = $items->fetch_assoc()) {
                $foto = explode(",", $row['foto']);
                $html .= $this->itemsBuilder->yachtAanbod($row['model'], $row['plaatsen'], $row['prijs'], $foto[0], $row['id']);

            }
        }

        return $html;
    }

    public function getLocaties($id, $keuze = false)
    {
        $itemsLoad = array('naam', 'locatie');
        $html = "";

        if (!$keuze) {
            $items = $this->database->getWhere("haven", $itemsLoad, "id", "=", $id);
            if ($items->num_rows > 0) {

                while ($row = $items->fetch_assoc()) {
                    $html = $this->itemsBuilder->locatieAanbod($row['naam'], $row['locatie']);
                }
            }
        } else {
            $items = $this->database->getWhere("haven", $itemsLoad, "id", "!=", $id);
            if ($items->num_rows > 0) {

                while ($row = $items->fetch_assoc()) {
                    $html .= $this->itemsBuilder->locatieAanbod($row['naam'], $row['locatie']);
                }
            }
        }

        return $html;
    }
}