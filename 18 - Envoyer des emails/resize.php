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

// Affiche les infos de l'image
// var_dump($infos);

// On récupère la largeur et la hauteur
$largeur = $infos[0];
$hauteur = $infos[1];

// On crée une nouvelle image "vierge" en mémoire
// Qui fait la moitié de l'image source
$nouvelleImage = imagecreatetruecolor($largeur/2, $hauteur/2);

switch ($infos["mime"]) {
    case 'image/png':
        // On ouvre l'image png
        $imageSource = imagecreatefrompng($image);
        break;
    case 'image/jpeg':
        // On ouvre l'image jpeg
        $imageSource = imagecreatefromjpeg($image);
        break;    
    default:
        die("Fomat d'image incorrect");
}

// On copie toute l'image source dans l'image de destination en la réduisant
imagecopyresampled(
    $nouvelleImage, // Image de destination
    $imageSource, // Image de départ
    0, // Position x du coin supérieur gauche dans l'image de destination
    0, // Position y du coin supérieur gauche dans l'image de destination
    0, // Position x du coin supérieur gauche dans l'image source
    0, // Position y du coin supérieur gauche dans l'image source
    $largeur / 2, // Largeur de l'image de destination
    $hauteur / 2, // Hauteur de l'image de destination
    $largeur, // Largeur de l'image source
    $hauteur // Hauteur de l'image source
);

// On enregistre la nouvelle image sur le serveur
switch ($infos["mime"]) {
    case 'image/png':
        // On enregistre l'image
        imagepng($nouvelleImage, __DIR__ . "/uploads/resize-" . $fichier);
        break;
    case 'image/jpeg':
        // On enregistre l'image
        imagejpeg($nouvelleImage, __DIR__ . "/uploads/resize-" . $fichier);
        break;

}

// On détruit les images dans la mémoire
imagedestroy($imageSource);
imagedestroy($nouvelleImage);
