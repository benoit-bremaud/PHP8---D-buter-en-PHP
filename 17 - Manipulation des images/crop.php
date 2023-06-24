<?php
// Nom de l'image à manipuler
$fichier = "573fb658b29baa904167bf8a8b4f004d.jpg";

// Récupère le chemin absolue de l'image
$image = __DIR__ . "/uploads/" . $fichier;

// Affiche le chemin absolue de l'image
// echo $image;

// On récupère les infos de l'image
// ATTENTION, normalement il y a des contrôles à faire avant
$infos = getimagesize($image);
