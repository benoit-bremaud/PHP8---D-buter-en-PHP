<?php
// On démarre la session PHP
session_start();
    // On inclut le fichier functions.php
    require_once "includes/functions.php"; # Arrête le code si le fichier n'éxiste pas

    // On définit le titre de la page
    $titre = "Accueil";

    // On inclue le header
    include "includes/header.php";

    // On inclue la navbar
    include_once "includes/navbar.php";

    // On écrit le contenu de la page
?>

<p>Contenu de la page d'accueil</p>

<?php
    require_once "includes/connect.php";

    // Déclaration de variables pour la requete sql
    $username = "demo";
    $password = "wxcvbn";

    // Requete qui donne les détails de l'utilisateur qui cherche à se connecter
    $sql = "SELECT * FROM `users` WHERE `username` =:username AND `pass` =:pass"; # avec paramètres sql

    // On prépare la requête
    $requete = $db->prepare($sql);

    // On injecte les valeurs avec "bindValue" fonction de PDO
    $requete->bindValue(":username", $username, PDO::PARAM_STR); # avec paramètre sql
    $requete->bindValue(":pass", $password, PDO::PARAM_STR); # et peut importe l'ordre contrairement à ?

    // On exécute
    $requete->execute();

    $user = $requete->fetchAll();

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";

    // On inclue le footer
    include_once "includes/footer.php";

?>
