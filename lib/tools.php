<?php

//converti les text en array séparé par sauts de lignes PHP_EOL
function linesToArray(string $string) {
    return explode(PHP_EOL, $string);
}

function getLevel() {

  if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    $pdo = new PDO('mysql:dbname=studi_live_cuisinea;host=127.0.0.1;charset=utf8mb4', 'root', '');
    //return connected  username
    $userConnected = $_SESSION['username'];

    //return db user row
    $myquery = "SELECT * FROM users JOIN roles ON users.role_id = roles.id WHERE username = '" . $userConnected . "';";
    $query = $pdo->query($myquery);
    $result = $query->fetch();
    
    //return user's slug
    return $result['slug'];

  } else {
    //echo 'user non connecté';
    //return '';
  }
  // function delete(string $cardId) {
  //  //query permettant de supprimer une carte de la base de donnée
  //   //echo $cardId;
  //   //$queryDelete = "DELETE FROM `utilisateur` WHERE `id` = " . $cardId . ";";
  // }
}
