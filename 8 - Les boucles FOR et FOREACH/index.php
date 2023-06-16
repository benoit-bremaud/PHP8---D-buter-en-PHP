<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les boucles FOR et FOREACH</title>
</head>
<body>
    <?php
        // boucle de 1 à 10 avec incrément de 1
        for ($nombre = 1; $nombre <= 10; $nombre++) { 
            echo "<p>$nombre</p>";
        }
        // boucle de 0 à 100 avec incrément de 5
        for ($nombre = 0; $nombre <= 100; $nombre += 5) { 
            echo "<p>$nombre</p>";
        }
        // boucle de 100 à 0 avec décrément de 5
        for ($nombre = 100; $nombre >= 0; $nombre -= 5) { 
            echo "<p>$nombre</p>";
        }
        $clients = [
            "ref1" => [
                "nom" => "Bremaud",
                "prenom" => "Benoit"
            ],
            "ref2" => [
                "nom" => "César",
                "prenom" => "Jules"
            ]
        ];

        var_dump($clients);

        // Fonction pour pourcourir les tableaux
        foreach ($clients as $client) {
            // var_dump($client);
            echo "<p>{$client["nom"]} {$client["prenom"]}</p>";
        }

         // Fonction pour pourcourir les tableaux avec référence associative
         foreach ($clients as $ref => $client) {
            // var_dump($client);
            echo "<p>Référence client : $ref</p>";
            echo "<p>{$client["nom"]} {$client["prenom"]}</p>";
        }


    ?>    
</body>
</html>