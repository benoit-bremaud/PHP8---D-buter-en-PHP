<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions et opérateurs de comparaison</title>
</head>
<body>
    <!-- Exemple 1 -->
    <p><?php
        // On pose une question
        $reponse = true;
        // Si la réponse est vrai
        if ($reponse) {
            // Alors affiche "Bravo
            echo "Bravo";
        } else {
            // Sinon affiche "Puni"
            echo "puni";
        }
    ?></p>
    <!-- Exemple 2 -->
    <p><?php
        // On pose une question
        $variable = 17;
        // Pour comparer
        // == : comparer une égalité entre 2 valeurs mais pas une égalité de type
        // === : comparer de façon stricte, valeur ET type (égalité stricte)
        // < : inférieur à
        // > : supérieur à
        // <= : inférieur ou égal à
        // >= : supérieur ou égal à
        if ($variable == 17) {
            // Alors
            echo "Egal";
        } else {
            // Sinon
            echo "Différent";
        }
        
    ?></p>
    
</body>
</html>