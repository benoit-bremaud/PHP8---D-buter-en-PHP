<?php
// On démarre la session PHP
session_start();
// On vérifie si on a un id
if (!isset($_GET["id"]) || empty($_GET["id"])){
    // Je n'ai pas d'id
    header("Location: articles.php");
    exit;
}

// Je récupère l'id
$id = $_GET["id"];

// On se connecte à la base
require_once "includes/connect.php";

// On va chercher l'article dans la base
// On écrit la requête
$sql = "SELECT * FROM `articles` WHERE `id` = :id";

// On prépare la requête
$requete = $db->prepare($sql);

// On injecte les paramètres
$requete->bindValue(":id", $id, PDO::PARAM_INT); # on évite les injections de script en convertissant en un entier

// On exécute la requête
$requete->execute();

// On récupère l'article
$article = $requete->fetch();

// On vérifie si l'article est vide
if (!$article) {
    // Pas d'article, erreur 404
    http_response_code(404);
    echo "Article inexistant";
    exit;
}
// Ici on a un article

// On définit le titre de la page
$titre = strip_tags($article["title"]);

// On inclue le header
include "includes/header.php";

// On inclue la navbar
include "includes/navbar.php";
    
// On écrit le contenu de la page
?>
<article>
    <h1><?= strip_tags($article["title"]) ?></h1> <!--?= ça fait un "echo"-->
    <p>Publié le <?= $article["created_at"] ?></p>
    <div><?= strip_tags($article["content"]) ?></div> <!-- strip_tags() permet de protèger les données contre des failles de codage-->
</article>    
<?php

    // On inclue le footer
    include "includes/footer.php";

?>
