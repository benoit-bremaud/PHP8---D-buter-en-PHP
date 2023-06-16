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
        // != : différent de (en valeur)
        // !== : Strictement différent de (en valeur ET en type)
        if ($variable == 17) {
            // Alors
            echo "Egal";
        } else {
            // Sinon
            echo "Différent";
        }
        
    ?></p>
    <!-- Exemple 3 -->
    <p><?php
    // On pose un question
    $a = 17;
    $b = 21;
    // Avec opérateur combiné
    echo "<p>". ($a <=> $b) ."</p>";
    /*
    < -> -1 si a < b
    = -> 0 si a = b
    > -> 1 si a > b
    */
    // On peut le faire aussi avec une autre instruction qui s'appelle "switch"
    $animal = "Chat";

    switch($animal){
        case 'Chat':
            echo "Félin";
            break;
        case 'Poisson rouge':
            echo "Poisson";
            break;
        case 'Perroquet':
            echo "Oiseau";
            break;
    }
    ?></p>
    <p><?php
    // Opérateur combiné < = >
    // Combine les trois comparaison
    switch($a <=> $b){
        case -1:
            echo "a plus petit que b";
            break;
        case 0:
            echo "a égale b";
            break;
        case 1:
            echo "a plus grand que b";
            break;
    }


    ?></p>
    
</body>
</html>