<?php
session_start();

try {
  $pdo = new PDO('mysql:dbname=studi_live_cuisinea;host=127.0.0.1;charset=utf8mb4', 'root', '');
  return $pdo;

} catch (PDOException $e) {
    echo 'Impossible de se connecter à la base de données';
}
