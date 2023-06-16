<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6 - Utiliser les fonctions</title>
</head>
<body>
    <?php
        // fonction qui affiche directement le résultat avec la fonction "echo"
        function additionner($nb1, $nb2){
            echo $nb1 + $nb2;
        }
        // Fonction avec paramètres optionnels à la fin
        /**
         * Fonction qui permet d'afficher un texte de salutation
         *
         * @param string $prenom
         * @param string $nom
         * @param string $civilite
         * @param string $salutation
         * @return string $salutation $civilite $prenom $nom
         */
        function saluer($prenom, $nom, $civilite = "", $salutation = "Hello"){
            echo "$salutation $civilite $prenom $nom";
        }
        // Fonction avec une fonction return
        /**
         * Permet de calculer la différence entre 2 valeurs
         *
         * @param float $nb1
         * @param float $nb2
         * @return float différence des 2 nombres
         */
        function soustraction($nb1, $nb2){
            return $nb1 - $nb2;
        }

    ?>
    <p><?php  additionner(12, 52); ?></p>
    <p><?php  additionner(26, 85); ?></p>  
    <p><?php  additionner(15, 2); ?></p>  
    <p><?php  additionner(30, 25); ?></p> 
    
    <h1><?php saluer("Salut", "Benoit", "Bremaud") ?></h1>

    <!-- Depuis PHP8 on peut utiliser des arguments nommés -->
    <h1><?php saluer(prenom: "Benoit", nom: "Bremaud") ?></h1>

    <!-- plus pratique avec les champs nommés -->
    <h1><?php saluer(prenom: "Benoit", nom: "Bremaud", civilite: "Mr.", salutation: "Bonjour") ?></h1>

    <!-- récupérer l'information de la fonction "soustraction" avec fonction "return" -->
    <?php
        $total = soustraction(18, 8);
        var_dump($total);
        echo $total;
    ?>


</body>
</html>