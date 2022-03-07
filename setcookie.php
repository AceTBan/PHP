<?php
setcookie('idUser', 145);
//setcookie('prefUser', 'light_theme', time() + 3600 * 24, '/', '', false, false);

setcookie('prefUser', 'light_theme', time() - 3600);


setcookie('idUser', 786555);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie and co</title>
</head>

<body>
    <h1>Test de cookies</h1>
    <?php
    if (isset($_COOKIE['idUser'])) {
        echo 'Votre ID est ' . $_COOKIE['idUser'] . '<br>';
    }
    if (isset($_COOKIE['prefUser'])) {
        echo 'Votre thême est le : ' . $_COOKIE['prefUser'];
    }
    ?>
</body>

</html>