<?php
// On va chercher les articles dans la base
// On se connecte à la base
require_once "includes/connect.php";

// On écrit la requête
$sql = "SELECT * FROM `articles` ORDER BY `created_at` DESC";

// On exécute à la requête
// Ici requête non préparée
$requete = $db->query($sql);

// On récupère les données
$articles = $requete->fetchAll();

// On définit le titre de la page
$titre = "Liste des articles";

// On inclue le header
include "includes/header.php";

// On inclue la navbar
include "includes/navbar.php";

    
// On écrit le contenu de la page
?>

<h1>Liste des articles</h1>

<!-- Après un fetchAll il y a forcément une boucle -->
<section>
<?php foreach($articles as $article): ?>
    <article>
        <h1><?= strip_tags($article["title"]) ?></h1> <!--?= ça fait un "echo"-->
        <p>Publié le <?= $article["created_at"] ?></p>
        <div><?= strip_tags($article["content"]) ?></div> <!-- strip_tags() permet de protèger les données contre des failles de codage-->
    </article>    
<?php endforeach; ?>
</section>

<?php

    // On inclue le footer
    include "includes/footer.php";

?>
