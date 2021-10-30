<?php
try {
  $db = new PDO('mysql:host=localhost;dbname=fights', 'root', '');
}
catch(Exception $e) {
  die('Erreur :  '.$e->getMessage());
}