<?php
// Je démarre ma session non pas utilisateur mais PHP
// Si elle n'éxiste pas, je la créée, si elle existe je la récupère
session_start();

// Mise en forme
echo "<pre>";

// Affichage infos de la variable superglobale $_SESSION
var_dump($_SESSION);
echo "</pre>";

// C'est un tableau, il faut créer des clés
$_SESSION["panier"] = [
    "produits" => [
        "Brouette", "Dameuse", "Chaise"
    ]
];

