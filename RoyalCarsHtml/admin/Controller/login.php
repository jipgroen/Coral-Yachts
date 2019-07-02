<?php
$tool = new tools();
$user = new user();

if (isset($_POST['userNaam']) && isset($_POST['wachtwoord'])) {
    if ($user->login($_POST['userNaam'], $_POST['wachtwoord']))
    {
        $_SESSION['user'] = $user;
        $tool->returnAdmin();
    }else{
        $tool->returnToLogin();
    }
} else {
    $tool->returnToLogin();
}