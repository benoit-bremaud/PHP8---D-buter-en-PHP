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

    ?>    
</body>
</html>