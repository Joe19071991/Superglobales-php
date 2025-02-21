<?php
if ($_GET['first_name'] == null){
  echo 'Bonjour anonyme !';
} else {
  echo 'Bonjour'.' '.htmlspecialchars($_GET['first_name'].' '.'!');
}
?>
