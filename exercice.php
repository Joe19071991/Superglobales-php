<?php
session_start();

if(isset($_GET['first_name'])){
  $first_name = $_GET['first_name'];

} else if (isset($_POST['first_name']) and !empty($_POST['first_name'])) {
  $_SESSION['name'] = $_POST['first_name'];
  $first_name = $_POST['first_name'];

} else if (isset($_SESSION['name'])){
  $first_name = $_SESSION['name'];
  

} else {
  $first_name = 'Anonyme';
}

if(isset($_POST['reset'])){
   unset($_SESSION['name']);
   header("Location: exercice.php");
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
 <p><input type="submit" name="reset" value="Reset"></p>
</form>
<?php 
echo $first_name; ?>

</body>
</html>
