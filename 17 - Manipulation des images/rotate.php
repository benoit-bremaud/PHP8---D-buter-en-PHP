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

// On tourne l'image selon les caractériqtiques suivants
$nouvelleImage = imagerotate($imageSource, 45, 0);

// On enregistre la nouvelle image sur le serveur
switch ($infos["mime"]) {
    case 'image/png':
        // On enregistre l'image
        imagepng($nouvelleImage, __DIR__ . "/uploads/rotate-" . $fichier);
        break;
    case 'image/jpeg':
        // On enregistre l'image
        imagejpeg($nouvelleImage, __DIR__ . "/uploads/rotate-" . $fichier);
        break;

};

// On détruit les images dans la mémoire
imagedestroy($nouvelleImage);


