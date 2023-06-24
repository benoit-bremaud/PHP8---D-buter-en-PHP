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
    if (isset($_POST["email"], $_POST["pass"])
        && !empty($_POST["email"]) && !empty($_POST["pass"])
    ){
        // Initialisation du tableau gestion des erreur
        $_SESSION["error"] = [];

        // On vérifie que l'eamil est valide
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $_SESSION["error"][] = "Ce n'est pas un email";
        }

        if ($_SESSION["error"] === []) {
                        
            // On se connecte à la bdd
            require_once "includes/connect.php";
            
            // On écrit la requête
            $sql = "SELECT * FROM  `users` WHERE `email` = :email";
            
            // On prépare la requête
            $query = $db->prepare($sql);
            
            // On injecte les valeurs
            $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
            
            // On exécute la requete
            $query->execute();
            
            // On récupère les données
            $user = $query->fetch();
            
            // On affiche le résultat
            // var_dump($user);die;
            // Gestion de si oui ou non il y a un user
            if (!$user) {
                $_SESSION["error"][] = "L'utilisateur et/ou le mot de passe est incorrect";
            }
            
            // Ici on a un user existant, on peut vérifier son mot de passe
            // var_dump(password_verify($_POST["pass"], $user["pass"]));
            if (!password_verify($_POST["pass"], $user["pass"])) {
                $_SESSION["error"][] = "L'utilisateur et/ou le mot de passe est incorrect";
            }
        
            // Ici l'utilisateur et le mot de passe sont corrects
            // On va pouvoir "connecter" l'utilisateur (ouvrir la session)
        
            if ($_SESSION["error"] === []) {
                // On stocke dans $_SESSION les informations de l'utilisateur
                $_SESSION["user"] = [
                    "id" => $user["id"],
                    "identifiant" => $user["username"],
                    "email" => $user["email"],
                    "roles" => $user["roles"]
                ];
                
                // On redirige vers la page de profil(par exemple)
                header("Location: profil.php");
            }
        }
    }
}

// On inclue le header
include "includes/header.php";

// On inclue la navbar
include_once "includes/navbar.php";

// On écrit le contenu de la page
?>

<h1>Connexion</h1>
<!-- Afficher les messages d'erreur -->
<?php
    if (isset($_SESSION["error"])) {
        foreach ($_SESSION["error"] as $message) {
            ?>
            <p><?= $message ?></p>
            <?php
        }
        unset($_SESSION["error"]);
    }
?>

<!-- Un formulaire en méthode POST -->
<form method="post">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="pass">Mot de passe</label>
        <input type="password" name="pass" id="pass">
    </div>
    <button type="submit">Me connecter</button>
</form>

<?php

    // On inclue le footer
    include_once "includes/footer.php";
?>

