<?php
include "Controller/tools.php";
include "Controller/links.php";
include "Controller/database.php";
include "Model/getData.php";
include "View/items.php";


$url = explode( "/", $_GET['url']);

if($url[0] == ''){
    require 'View/index.php';
}else{
    $database = new database();

    $link = 'View/' . $database->getPage($url[0]);
    require $link;
}





