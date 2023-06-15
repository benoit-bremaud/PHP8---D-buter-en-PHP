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
        function saluer($salutation, $prenom, $nom){
            echo "$salutation $prenom $nom";
        }

    ?>
    <p><?php  additionner(12, 52); ?></p>
    <p><?php  additionner(26, 85); ?></p>  
    <p><?php  additionner(15, 2); ?></p>  
    <p><?php  additionner(30, 25); ?></p> 
    
    <h1><?php saluer("Salut", "Benoit", "Bremaud") ?></h1>

</body>
</html>