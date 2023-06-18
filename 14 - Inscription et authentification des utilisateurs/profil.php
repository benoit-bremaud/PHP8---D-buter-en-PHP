<?php
    session_start();
    // On inclut le header
    include "includes/header.php";

    // On inclut la navbar
    include_once "includes/navbar.php";

    // On écrit le contenu de la page
?>

<h1>Profil de <?= $_SESSION["user"]["pseudo"] ?></h1>

<p>Pseudo : <?= $_SESSION["user"]["pseudo"] ?></p>
<p>Email : <?= $_SESSION["user"]["email"] ?></p>

<?php

    // On inclue le footer
    include_once "includes/footer.php";
?>

