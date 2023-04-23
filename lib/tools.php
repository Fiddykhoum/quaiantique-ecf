<?php
require_once ('config.php');
require_once('./Class/Cart.php');

//convert text in array separate by PHP_EOL
function linesToArray(string $string) {
    return explode(PHP_EOL, $string);
}

function getLevel() {
  if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    
    $host = host();
    $pdo = new PDO('mysql:dbname='.$host['dbName'].';host='.$host['host'].';charset=utf8mb4',''.$host['username'].'', ''.$host['password'].'');
   
    //return connected  username
    $userConnected = $_SESSION['username'];

    //return db user row
    $myquery = "SELECT * FROM users JOIN roles ON users.role_id = roles.id WHERE username = '" . $userConnected . "';";
    $query = $pdo->query($myquery);
    $result = $query->fetch();
    
    //return user's slug
    return (int) $result['slug'];

  } else {
    return 'user non connecté';;
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
      //echo(<"Vous devez être administrateur");
      return ;
  }
}

function addFlamm($productName, $qtyFlamm, $price) {
  $cartFlamm = new Cart($productName, $qtyFlamm, $price);
  $quantity = $cartFlamm->getQuantity();
  return ('<div>'.$quantity.'</div>');
}

function addPizza($productName, $qtyPizza, $price) {
 $qty = $qtyPizza;
  $cartPizza = new Cart($productName, $qtyPizza, $price);
  $quantity = $cartPizza->getQuantity();
  return $quantity;
}

function addTarte($productName, $qtyTarte, $price) {
  $cartTarte = new Cart($productName, $qtyTarte, $price);
  $quantity = $cartTarte->getQuantity();
  return $quantity;
}

function ifUserExist($userTry){
  $host = host();
  $pdo = new PDO('mysql:dbname='.$host['dbName'].';host='.$host['host'].';charset=utf8mb4',''.$host['username'].'', ''.$host['password'].'');
  
  $myquery = "SELECT COUNT(*) FROM users WHERE  username = '" . $userTry ."';";
    $query = $pdo->query($myquery);
    $result = $query->fetchAll(PDO::FETCH_NUM);
    $result=$result[0][0];
    return $result;
}
