<h1>Login</h1>
<?php

if (isset($_POST['barnabe'])) {
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : "";

    $erreurs = array();

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
        array_push($erreurs, "Veuillez saisir une adresse mail valide.");

    if (mb_strlen($mdp) < 6)
        array_push($erreurs, "Votre mot de passe doit comporter 6 caractères minimum");

    if (count($erreurs) > 0) {
        $message = "<ul>";
        $i = 0;

        while ($i < count($erreurs)) {
            $message .= "<li>" . $erreurs[$i] . "</li>";
            $i++;
        }

        $message .= "</ul>";

        echo $message;

        include "frmLogin.php";
    } else {
        echo "Test matching login/password";
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        $sql = "SELECT COUNT(*) FROM t_users
                WHERE USEMAIL='". $mail . "'
                AND USEPASSWORD='" . $mdp ."'";
        $nombreOccurences = $pdo->query($sql)->fetchColumn();


    }

} else {
    require_once "frmLogin.php";
}
