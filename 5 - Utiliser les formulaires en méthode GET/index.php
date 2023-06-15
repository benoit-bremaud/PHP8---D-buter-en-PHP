<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utiliser les formulaires en méthode GET</title>
</head>
<body>
    <!--
        <form action="nomdufichier.php" . . > . . . . </form>
        action="...", définit quel fichier exécutera l'action une fois le formulaire validé
        on retire l'attribut action si on veut que se soit la même page qui exécute le formulaire
     -->
     <!-- Méthode "get" -->
    <form methode="get"> <!--permet de lire directement dans l'URL-->
        <div>
            <label for="nombre1">Nombre 1</label>
            <input type="number" name="nb1" id="nombre1">
        </div>
        <div>
            <label for="nombre2">Nombre 2</label>
            <input type="number" name="nb2" id="nombre2">
        </div>
        <button type="submit">Calculer</button>
    </form>
    <?php
        // http://localhost/PHP8%20-%20D%c3%a9buter%20en%20PHP/5%20-%20Utiliser%20les%20formulaires%20en%20m%c3%a9thode%20GET/?nb1=124&nb2=36
        echo "<pre>";
        var_dump($_GET);
        var_dump($_GET["nb1"]);

        $total = $_GET["nb1"] + $_GET["nb2"];
        echo "<p>Total : $total</p>";



        echo "</pre>";
    ?>
    
</body>
</html>