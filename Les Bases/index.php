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

        echo "<h1>Bonjour $nomPersonne, comment ça va ?</h1>";
        
        echo "<p>Bonjour Benoit</p>";

        // Les types de variables
        // Entiers
        $nombre = 85;
        // affichage d'un nom entier via une variable
        echo "<p>$nombre</p>";

        // Décimaux (float)
        $nombre2 = 85.2;
        echo "<p>$nombre2</p>";

        // chaine de caractères (string)
        $chaine = "Ceci est un texte";
        echo "<p>$chaine</p>";

        // Booléen (boolean)
        // permet de savoir si quelque est vrai ou faux, allumer ou éteint
        $booleen = true; // ou false

        echo "<p>$booleen</p>";


    ?>
</body>
</html>