<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipuler les chaines de caractères</title>
</head>
<body>
    <?php
        $chaine = "Ceci est une chaine de caractères";

        echo $chaine;

        // Afficher un caractère particulier de la chaine
        echo "<p>$chaine[3]</p>";

        // modifier un caractère de la chaine
        $chaine[0] = "f";

        echo "<p>$chaine</p>";

        $chaine = "Ceci est une chaine de caractères";

        // extraire une partie de la chaine
        echo substr($chaine, 0, 4); # Dans ma chaine de caractère, commence par l'index 0 et fini par le 4
        var_dump(substr($chaine, 0, 4));
        var_dump(substr($chaine, 13, 6));
        var_dump(substr($chaine, -1));

        // remplacer une partie de la chaine
        $chaine = str_replace('Ceci', 'Celà', $chaine);

        var_dump($chaine);

        // str_replace est sensible à la casse
        $chaine = "Ceci est une chaine de caractères";

        $chaine = str_replace('ceci', 'Celà', $chaine);

        var_dump($chaine);

        // str_ireplace n'est pas sensible à la casse
        $chaine = str_ireplace('ceci', 'Celà', $chaine);

        var_dump($chaine);

        // vérifier si une chaine de caractère contient quelque chose
        // nouvelles fonctions avec PHP8 en gestion de chaines
        // str_contains
        var_dump(str_contains($chaine, 'brouette')); # retourne false car le mot 'brouette' n'est pas présent dans la chaine $chaine
        var_dump(str_contains($chaine, 'une')); # retourne true car le mot 'une' est bien présent dans la chaine $chaine

        // vérifier si une chaine de caractère commence par caractère ou une chaine de caractère précise
        var_dump(str_starts_with($chaine, 'Ce')); # retourne true car la chaine commence bien par 'Ce'
        var_dump(str_ends_with($chaine, 'res')); # retourne true car la chaine se termine bien par 'res'

        // supprime les espaces en début et en fin de chaine
        var_dump(trim($chaine));







    ?>    
</body>
</html>