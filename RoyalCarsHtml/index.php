<?php
include "Controller/tools.php";
include "Controller/links.php";
include "Controller/database.php";
include "Model/getData.php";
include "View/items.php";
include "Model/klant.php";
include "Model/rit.php";

define('SECURE_PAGE', true);

$url = explode("/", $_GET['url']);

if ($url[0] == '') {
    require 'View/index.php';
} elseif ($url[0] == 'apiLink') {
    require 'API/index.php';
} elseif ($url[0] == 'admin') {
    require 'admin/index.php';
} else {
    $database = new database();

    $link = 'View/' . $database->getPage($url[0]);
    require $link;
}


if ($url[0] != 'apiLink') {
    include "Model/HostId.php";
}






