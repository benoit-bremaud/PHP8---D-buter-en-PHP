<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- commentaire HTML -->
    <?php # balise d'ouverture du code php
    // Commentaire simple ligne
    /* commentaire
    sur plusieurs
    lignes */
        echo "<h1>Hello World !!</h1>";
        // introduction aux variables
        // on décalre une variable en PHP en commencant par "$"
        // ici nous sommes en convention camel case
        $nomPersonne = "Benoit";

        echo $nomPersonne;

        echo "<h1>Bonjour $nomPersonne</h1>";
        
        echo "<p>Bonjour Benoit</p>";

    ?>
</body>
</html>