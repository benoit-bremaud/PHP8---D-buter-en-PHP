<?php
// On vérifie si un fichier a été envoyé
if (isset($_FILES["image"]) && $_FILES["image"]["error"] === 0){
    // On a reçu l'image
    // var_dump($_FILES);
    // On procède aux vérifications
    // On vérifie toujours l'extension ET le type MIME
    $allowed = [
        "jpg" => "image/jpeg",
        "jpeg" => "image/jpeg",
        "png" => "image/png",
        "pdf" => "application/pdf"
    ];

    // On récupère le nom, le type et la taille du fichier
    $filename = $_FILES["image"]["name"];
    $filetype = $_FILES["image"]["type"];
    $filesize = $_FILES["image"]["size"];

    // On peut maintenant faire les premières vérifications
    // On récupère l'extension du fichier
    $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    // On vérifie l'absence de l'extension dans les clés de $allowed ou l'absence du type MIME dans les valeurs
    if (!array_key_exists($extension, $allowed) || !in_array($filetype, $allowed)) {
        // Ici soit l'extension soit le type est incorrect
        die("Erreur: format de fichier incorrect");
    }

    // Ici le type est correct
    // On limite à 1Mo la taille du fichier
    if ($filesize > 1024 * 1024) {
        die("Fichier trop volumineux");
    }

    // On génère un nom unique
    $newname = md5(uniqid());

    // On génère maintenant le chemin complet d'acces
    $newfilename = __DIR__ . "/uploads/$newname.$extension";
    // echo $newfilename; # TEST

    // var_dump($_FILES); # TEST

    // On déplace le fichier de tmp à uploads en le renommant
    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $newfilename)) {
        die("L'upload a échoué");
    }

    // On interdit l'exécution du fichier
    chmod($newfilename, 0644);

}   
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ajout de fichiers</h1>
    <form method="post" enctype="multipart/form-data">
        <div>
            <label for="fichier">Fichier</label>
            <input type="file" name="image" id="fichier">
        </div>
        <!-- <div>
            <label for="fichier">Fichier</label>
            <input type="file" name="image" id="fichier">
        </div> -->
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>

