<?php

$name = $_POST['name'];
$firstname = $_POST['firstname'];
$mail = $_POST['email'];
$tel = $_POST['user_tel'];
$sujet = $_POST['sujet'];
$message = $_POST['user_message'];

var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
   
</head>
<body>
Merci <?= $firstname ." ". $name ?> de nous avoir contacté à propos de “<?=$sujet ?>”.

Un de nos conseillers vous contactera soit à l’adresse <?=$mail ?> ou par téléphone au <?=$tel ?> dans les plus brefs délais pour traiter votre demande : 

<?=$message ?>

   
</body>
</html>
