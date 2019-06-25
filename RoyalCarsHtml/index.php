<?php
include "C:/xampp\htdocs\yacht\RoyalCarsHtml\Controller/tools.php";
include "C:/xampp\htdocs\yacht\RoyalCarsHtml\Controller/links.php";
include "C:/xampp\htdocs\yacht\RoyalCarsHtml\Controller/database.php";
include "C:/xampp\htdocs\yacht\RoyalCarsHtml\Model/getData.php";
include "C:/xampp\htdocs\yacht\RoyalCarsHtml\View/items.php";


$url = explode( "/", $_GET['url']);

if($url[0] == ''){
    require 'View/index.php';
}else{
    $database = new database();

    $link = 'View/' . $database->getPage($url[0]);
    require $link;
}





