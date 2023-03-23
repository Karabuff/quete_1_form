<?php

// Nettoyage avec trim
$data = array_map('trim', $_POST);

// Protection XSS avec htmlentities
$data = array_map('htmlentities', $data);

// Validation
$errors = [];


if (!isset($data['userName']) || empty($data['userName'])) {
    $errors[] = 'Le nom est obligatoire';
}
if (!isset($data['userFirstname']) || empty($data['userFirstname'])) {
    $errors[] = 'Le prénom est obligatoire';
}
if (!isset($data['userEmail']) || empty($data['userEmail'])) {
    $errors[] = 'Le champ email est obligatoire';
}
if (!filter_var($data['userEmail'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Le format du champ email n\'est pas valide';
}
if (!isset($data['contactMessage']) || empty($data['contactMessage'])) {
    $errors[] = 'Le message est obligatoire';
}

if (!isset($data['sujet']) || empty($data['sujet'])) {
    $errors[] = 'Le champ contact est obligatoire';
}


if (!empty($errors)) {
    require 'error.php';
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif - Réclamation</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<p>Merci <?=$data['userFirstname']?> <?=$data['userName']?> de nous avoir contacté à propos de “<?=$data['sujet']?>”.

Un de nos conseillers vous contactera soit à l’adresse <?=$data['userEmail']?> ou par téléphone au <?=$data['userPhone']?> dans les plus brefs délais pour traiter votre demande : 


</body>

</html>