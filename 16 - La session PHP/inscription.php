<?php
// On démarre la session PHP
session_start();
if (isset($_SESSION["user"])) {
    header("Location: profil.php");
    exit;
}
// On vérifie si le formulaire a été envoyé
if (!empty($_POST)) {
    // var_dump($_POST); vérification des valeurs depuis le formulaire
    // Le formulaire a été envoyé
    // On vérifie que TOUS les champs requis sont remplis
    if (isset($_POST["username"], $_POST["email"], $_POST["pass"])
        && !empty($_POST["username"]) && !empty($_POST["email"]) &&
        !empty($_POST["pass"])    
    ){
        // Le formulaire est complet
        // On réqupère les donnéesen les protégeant (failles XSS)
        $identifiant = strip_tags($_POST["username"]); # Enlève toutes les balises qui pourrait éventuellement être dedans
        // Initialisation de la zone error
        $_SESSION["error"] = [];

        // On veut vérifier que le pseudo fasse au moins 5 caractères
        if (strlen($identifiant) < 5) {
            $_SESSION["error"][] = "L'identifiant est trop court";
        }
        
        // On vérifie que l'email est vraiment un email
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            // Création d'une zone error dans ma session
            $_SESSION["error"][] = "L'adresse email est incorrecte"; # On push le message à l'intérieur
        }
        
        // On exécute la suite que si $_SESSION["error] est vide
        if ($_SESSION["error"] === []) {
           
            // On va hasher le mot de passe
            $pass = password_hash($_POST["pass"], PASSWORD_ARGON2ID);
            
            // die($pass); permet de voir le mot de passe hashé
            
            // Ajouter ici tous les contrôles souhaités
            
            // On enregistre en BDD
            require_once "includes/connect.php";
            
            $sql = "INSERT INTO `users`(`username`, `email`, `pass`, `roles`) VALUES 
            (:identifiant, :email, '$pass', '[\"ROLE_USER\"]')";

            // On prépare la requête
            $query = $db->prepare($sql);

            // On injecte les valeurs
            $query->bindValue(":identifiant", $identifiant, PDO::PARAM_STR);
            $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);

            // On exécute la requête
            $query->execute();

            // On récupère l'id du nouvel utilisateur
            $id = $db->lastInsertId();

            // On stocke dans $_SESSION les informations de l'utilisateur
            $_SESSION["user"] = [
                "id" => $id,
                "identifiant" => $identifiant,
                "email" => $_POST["email"],
                "roles" => ["ROLE_USER"]
            ];

            // On redirige vers la page de profil(par exemple)
            header("Location: profil.php");


        }
    }else{
        $_SESSION["error"] = ["Le formulaire est incomplet"];
    }
}

    // On inclue le header
    include "includes/header.php";

    // On inclue la navbar
    include_once "includes/navbar.php";

    // On écrit le contenu de la page
?>

<h1>Inscription</h1>
<!-- Affiche els éléments de la session -->
<!-- // echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>"; -->
<!-- Affichae de ou des erreurs présentes -->
<?php
    if (isset($_SESSION["error"])) {
        foreach ($_SESSION["error"] as $message) {
            ?>
            <p><?= $message ?></p>
            <?php
        }
        // Une fois qu'une erreur a été affichée, il faut par la suite l'effacer
        unset($_SESSION["error"]);
    }
?>


<!-- Un formulaire en méthode POST -->
<form method="post">
    <div>
        <label for="identifiant">identifiant</label>
        <input type="text" name="username" id="identifiant">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="pass">Mot de passe</label>
        <input type="password" name="pass" id="pass">
    </div>
    <button type="submit">M'inscrire</button>
</form>

<?php

// On inclue le footer
include_once "includes/footer.php";

