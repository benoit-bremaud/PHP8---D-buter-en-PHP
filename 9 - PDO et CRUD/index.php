<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO et CRUD</title>
</head>
<body>
    <?php
        // Constantes d'environement
        define("DBHOST", "localhost");
        define("DBUSER", "root");
        define("DBPASS", "motdepasse1@");
        define("DBNAME", "tuto_php");

        // Avec PDO nous avons besoin d'un DSN (Data Source Name)
        // $dsn = "mysql:dbname=tuto_php;host=localhost";
        $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

        // On va se connecter à la base
        // On utilise le "try catch"
        try {
            // On va instancier PDO, créer une instance, un élément de PDO qu'on va mettre dans une variable
            $db = new PDO($dsn, DBUSER, DBPASS);

            echo "On est connecté";

            // On s'assure d'envoyer les données en UTF8 (pour la gestion des accents)
            $db->exec("SET NAMES utf8");

            // On peut définir le mode de "fetch" par défaut
            $db->setAttribute(  PDO::ATTR_DEFAULT_FETCH_MODE, # Définition du mode fetch par défaut
                                PDO::FETCH_ASSOC); # Définition du mode par défaut en tableau associatif

        } catch (PDOException $e) {
            die("Erreur:".$e->getMessage());
        }

        // Ici nous sommes connectés à la base de données
        // On peut dès lors récupérer la liste des utilisateurs (users)

        $sql = "SELECT * FROM `users`";

        // On exécute directement la requête

        $requete = $db->query($sql);

        var_dump($requete);

        // On récupère les données (fetch ou fetchall)
        $user = $requete->fetch(); # Définition du "fetch" déjà faite plus haut , définit en tableau associatif

        $user = $requete->fetchAll();

        echo "<pre>";
        var_dump($user);
        echo "</pre>";

        // Ajouter un utilisateur
        $sql = "INSERT INTO `users`(`email`, `pass`, `roles`)
                VALUES ('demo@nouvelle-techno.fr', 'azerty', '[\"ROLE_USER\"]')";
        
        $requete = $db->query($sql);

        // Modifier un utilisateur
        $sql = "UPDATE `users` SET `password` = 'qsdfgh'
                WHERE `id` = 0";

        $requete = $db->query($sql);

         // Supprimer un utilisateur
         $sql = "DELETE FROM `users` WHERE `id` > 3";

        $requete = $db->query($sql);

        // 

    ?>    
</body>
</html>