<?php
date_default_timezone_set('Europe/Paris');
include "./includes/header.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

else {
    $page = "accueil";
}

$path = "./includes/";
$contenu = glob($path . "*.inc.php");
var_dump($contenu);





$page = "./includes/" . $page . ".php";
include $page;

include "./includes/footer.php";