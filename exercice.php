<?php
if (isset($_GET['first_name']) || isset($_POST['first_name'])) {
    $first_name = isset($_GET['first_name']) ? htmlspecialchars($_GET['first_name']) : htmlspecialchars($_POST['first_name']);

    if (empty($first_name)) {
        echo 'Bonjour anonyme';
    } else {
        echo 'Bonjour ' . $first_name;
    }
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Superglobales</title>
</head>
<body>
<form action="exercice.php" method="post">
 <p>Votre nom : <input type="text" name="first_name" /></p>
 <p><input type="submit" name="OK" value="OK"></p>
</form>

</body>
</html>
