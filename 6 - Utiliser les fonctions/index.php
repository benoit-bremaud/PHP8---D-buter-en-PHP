<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6 - Utiliser les fonctions</title>
</head>
<body>
    <?php
        function additionner($nb1, $nb2){
            echo $nb1 + $nb2;
        }

    ?>
    <p><?php echo additionner(12, 52); ?></p>  
</body>
</html>