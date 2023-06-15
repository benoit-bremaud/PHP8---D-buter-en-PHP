<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 - Utiliser les tableaux</title>
</head>
<body>
    <?php
    echo "<pre>"; # permet de mettre en forme les "var_dump"

    // déclarer un tableau
    $tableau = [];

    var_dump($tableau);


    $tableau = ["Bonjour", 15, true, 58.15];

    var_dump($tableau); # affiche toutes les valeurs du tableau avec leur index correspondant

    var_dump($tableau[1]); # affiche la valeur de lindex 1, soit ici "int(15)"

    var_dump($tableau[0]); # affiche "Bonjour"

    // Ajouter des valeurs dans le tableau
    // A la fin du tableau
    array_push($tableau, "Fin");

    var_dump($tableau);

    // Si on ne doit ajouter qu'une seule valeur à la fin d'une tableau
    // il éxiste une écriture alternative
    $tableau[] = "Fin";

    var_dump($tableau);

    // Au début du tableau (unshift)
    array_unshift($tableau, "Début");

    var_dump($tableau);

    // Supprimer des valeurs
    // A la fin du tableau (pop)
    array_pop($tableau);

    var_dump($tableau);

    // Supprimer la dernière valeur du tableau et la récupérer
    $valeur = array_pop($tableau);

    var_dump($tableau);
    echo "<p>$valeur</p>";

    // Supprimer la première valeur du tableau
    // fonction (shift)
    $valeur = array_shift($tableau);
    var_dump($tableau);
    echo "<p>$valeur</p>";
    
    echo "</pre>"; # permet de mettre en forme les "var_dump"
    ?>    
</body>
</html>