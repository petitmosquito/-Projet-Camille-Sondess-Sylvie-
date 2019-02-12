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
$page = $path . $page . ".inc.php";

if (in_array($page, $contenu)) {
    include $page;
}

else {
    include "./includes/accueil.inc.php";
}

include "./includes/footer.php";