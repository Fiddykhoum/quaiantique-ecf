<?php
require_once ('config.php');
//converti les text en array séparé par sauts de lignes PHP_EOL
function linesToArray(string $string) {
    return explode(PHP_EOL, $string);
}

function getLevel() {

  if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    
    $host = host();
    //ok works with const
    $pdo = new PDO('mysql:dbname='.$host['dbName'].';host='.$host['host'].';charset=utf8mb4',''.$host['username'].'', ''.$host['password'].'');
   

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

}

function slugify($text, string $divider = '.') {
 
  // replace non letter or digits by divider
  $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '.', $text);
  // trim
  $text = trim($text, $divider);
  // remove duplicate divider
  $text = preg_replace('~-+~', $divider, $text);
  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }
  return $text;
}

function getReservations($quand) {
 
  if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    
    $host = host();
    $pdo = new PDO('mysql:dbname='.$host['dbName'].';host='.$host['host'].';charset=utf8mb4',''.$host['username'].'', ''.$host['password'].'');
   
    //return sorted table 
    $myquery = "SELECT * FROM `reservations` WHERE quand = '" . $quand . "' ORDER BY heure ASC;";
    $query = $pdo->query($myquery);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;


  } else {  
      echo("Vous devez être administrateur");
  }
}
