<?php
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
    $username = "admin'; --";
    $password = "wxcvbn";

    // Requete qui donne les détails de l'utilisateur qui cherche à se connecter
    $sql = "SELECT * FROM `users` WHERE `username` = ? AND `pass` = ?";

    // On prépare la requête
    $requete = $db->prepare($sql);

    // On injecte les valeurs avec "bindValue" fonction de PDO
    $requete->bindValue(1, $username, PDO::PARAM_STR); # 1 pour le premier ? dans la requete
    $requete->bindValue(2, $password, PDO::PARAM_STR); # 2 pour le deuxieme ? dans la requete

    // On exécute
    $requete->execute();

    $user = $requete->fetchAll();

    echo "<pre>";
    var_dump($user);
    echo "</pre>";

    // On inclue le footer
    include_once "includes/footer.php";

?>
