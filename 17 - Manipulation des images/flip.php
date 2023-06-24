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

// J'ouvre mon image
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

// On retourne (miroir) l'image selon les caractériqtiques suivants
imageflip($imageSource, IMG_FLIP_HORIZONTAL); // ou IMG_FLIP_VERTICAL ou IMG_FLIP_BOTH

// On enregistre la nouvelle image sur le serveur
switch ($infos["mime"]) {
    case 'image/png':
        // On enregistre l'image
        imagepng($imageSource, __DIR__ . "/uploads/flip-" . $fichier);
        break;
    case 'image/jpeg':
        // On enregistre l'image
        imagejpeg($imageSource, __DIR__ . "/uploads/flip-" . $fichier);
        break;

};

// On détruit les images dans la mémoire
imagedestroy($imageSource);


