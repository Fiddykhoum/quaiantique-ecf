<?php
//require ('lib/pdo.php');
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

}

function slugify($text, string $divider = '-')
{
  // replace non letter or digits by divider
  $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

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
