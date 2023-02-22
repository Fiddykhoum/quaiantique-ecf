<?php

 require_once('lib/pdo.php');

//const path pix for cards
define('_CARDS_IMG_PATH_', 'uploads/cards/');

//const path pix for front
define('_ASSETS_IMG_PATH_', 'assets/images/');

//const define number of cards in index.php
define('_HOME_CARDS_LIMIT_', 3);


// header's nav bar
$mainMenu = [
  'index.php' => 'Accueil', 
  'restaurant.php' => 'Le restaurant',
  'menus.php' => 'menu et carte',
  'reserver.php' => 'Réserver',    
];

//--------------------------------------------------------------------------------------------
// Change host's param here
function host() {
  $hostChange = [
      'host' => '127.0.0.1',
      'username' => 'root',
      'password' => '',
      'dbName' => 'studi_live_cuisinea',
    ];   
  return $hostChange;
}
// server LWS
// function host() {
//   $hostChange = [
//       'host' => '185.98.131.160',
//       'username' => 'fiddy2051642',
//       'password' => 'c32ogbitxz',
//       'dbName' => 'fiddy2051642',
//     ];   
//   return $hostChange;
// }
//--------------------------------------------------------------------------------------------

// server params call function host()
$host = host();
  define('DB_SERVER', ''.$host['host'].'');
  define('DB_USERNAME',''.$host['username'].'');
  define('DB_PASSWORD',''. $host['password'].'');
  define('DB_NAME',''. $host['dbName'].'');
  
  // database connexion
  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


//database informations version en dure
// define('DB_SERVER', '127.0.0.1');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'studi_live_cuisinea');

 
// try if connexion is ok
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}

  // users conexion
  if (isset($_POST['email']) && ($_POST['password'] )) {
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    // query search for email and password ok
    $req = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password = '$password' ");
    $num_ligne = mysqli_num_rows($req);
    if ($num_ligne > 1 ) { 
      header("location : ajout_contenu.php"); 
    } else {
      echo "identifiant ou mot de passe inconnu";
    }

  }