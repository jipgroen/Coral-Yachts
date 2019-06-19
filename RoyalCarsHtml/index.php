<?php
include "C:/xampp\htdocs\yacht\RoyalCarsHtml\Controller/database.php";
include "C:/xampp\htdocs\yacht\RoyalCarsHtml\Model/getData.php";

$url = explode( "/", $_GET['url']);

if($url[0] == ''){
    require 'index.html';
}else{
    $database = new database();

    $link = 'View/' . $database->getPage($url[0]);
    require $link;
}





