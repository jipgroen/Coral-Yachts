<?php

switch ($_POST['action']) {
    case 'bootHuren':
        include "functions/huren.php";
        $hurenData = array(
            'currentLocation' => $_POST['currentLocation'],
            'newLocation' => $_POST['newLocation'],
            'beginDatum' => $_POST['beginDatum'],
            'eindDatum' => $_POST['eindDatum'],
            'voornaam' => $_POST['voornaam'],
            'achternaam' => $_POST['achternaam'],
            'email' => $_POST['email'],
            'telefoon' => $_POST['telefoon'],
            'gender' => $_POST['gender'],
            'extras' => substr($_POST['extras'], 0, -2),
            'betaalMethode' => $_POST['betaalMethode'],
            'extraGegevens' => $_POST['extraGegevens']

        );
        $huren = new huren($hurenData);

        break;
}
