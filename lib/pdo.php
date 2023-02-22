<?php
require_once 'lib/config.php';

session_start();

$host = host();
try {
 
 // $pdo = new PDO('mysql:dbname=studi_live_cuisinea;host=127.0.0.1;charset=utf8mb4', 'root', '');

 // function host in config.php sends host params
$pdo = new PDO('mysql:dbname='.$host['dbName'].';host='.$host['host'].';charset=utf8mb4',''.$host['username'].'', ''.$host['password'].'');

  return $pdo;

} catch (PDOException $e) {
    echo 'Impossible de se connecter à la base de données';
}
