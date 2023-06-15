<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipuler les nombres</title>
</head>
<body>
    <?php
        $nombre1 = 14;
        $nombre2 = 85;

        // Addition
        $resultat = $nombre1 + $nombre2;
        var_dump($resultat);

        // Soustraction
        $resultat = $nombre1 - $nombre2;
        var_dump($resultat);

        // Multiplication
        $resultat = $nombre1 * $nombre2;
        var_dump($resultat);

        // Divicion
        $resultat = $nombre1 / $nombre2;
        var_dump($resultat);

        // Calcul "complexe"
        // La priorité des calculs est respectée
        $resultat = $nombre1 + $nombre2 / 5;
        var_dump($resultat);

        // Modulo nous donne le reste de la division entière des deux nombres
        // permet de savori si un nombre est multiple d'un autre
        $resultat = $nombre2 % $nombre1;
        var_dump($resultat);

        // 9 est-il multiple de 3 ?
        var_dump(9 % 3); # retourne 0, donc oui, 9 est un multiple de 3

        var_dump(8 % 3); # retourne 2, donc 8 n'est pas un multiple de 3

        // Incrémenter (ajouter 1)
        // Première écriture
        $nombre1 = $nombre1 + 1;
        var_dump($nombre1);

        // Deuxième écriture
        $nombre1 += 1;

        // Troisième écriture
        $nombre1++; # se fait à la fin de l'exécution elle même, affiche puis incrémente

        var_dump(++$nombre1); # se fait avant l'éxécution de la fonction, incrémente puis affiche

        // Même chose pour décrémenter
        $nombre1 = $nombre1 - 1;
        $nombre1 -= 1;
        $nombre1--;


    ?>    
</body>
</html>