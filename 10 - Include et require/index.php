<?php
    // On inclut le fichier functions.php
    require_once "includes/functions.php"; # Arrête le code si le fichier n'éxiste pas

    // On définit le titre de la page
    $titre = "Accueil";

    // On inclue le header
    include "includes/header.php";

    // On inclue la navbar
    include_once "includes/navbar.php";

    // On écrit le contenu de la page
?>

<p>Contenu de la page d'accueil</p>

<?php
    verifForm();
    // On inclue le footer
    include "includes/footer.php";

?>
