<?php
// Gère la connexion à la base de données avec une instance de PDO, similaire à la correction du QCM.

try {
  $dsn = 'mysql:host=localhost;dbname=tp_combat';
  $user = 'root';
  $password = '';

  $db = new PDO($dsn, $user, $password);
  
} catch (Exception $e) {
  echo 'an error occured: '. $e->getMessage();
}