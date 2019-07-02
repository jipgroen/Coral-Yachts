<?php
require 'Model/user.php';
require 'View/adminItems.php';

$url = explode("/", $_GET['url']);
$tools = new tools();
session_start();

if ($url[1] == 'login') {
    require 'View/signin.php';
} elseif ($url[1] == 'loginHandler') {
    require 'Controller/login.php';
} elseif ($url[1] == 'loguit') {
    $_SESSION['user']->logOut();
    $tools->returnToLogin();
} else {
    if (!isset($_SESSION['user'])) {
        $tools->returnToLogin();
    } else {
        $user = $_SESSION['user'];
        if (!$user->loggedIn()) {
            $tools->returnToLogin();
        } else {
            switch ($url[1]) {
                case '':
                    require 'View/index.php';
                    break;
                case 'bootAanmaken':
                    require 'View/bootAanmaken.php';
                    break;
                case 'reserveringen':
                    require 'View/reserveringen.php';
                    break;
                default:
                    require 'View/notFound.php';
                    break;

            }
        }
    }
}






