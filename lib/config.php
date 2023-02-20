<?php

 require_once('lib/pdo.php');

//const path pix for cards
define('_CARDS_IMG_PATH_', 'uploads/cards/');

//const path pix for front
define('_ASSETS_IMG_PATH_', 'assets/images/');

//const define number of cards in index.php
define('_HOME_CARDS_LIMIT_', 3);

$mainMenu = [
  'index.php' => 'Accueil', 
  'restaurant.php' => 'Le restaurant',
  'menus.php' => 'menu et carte',
  'reserver.php' => 'Réserver',    
];

// database informations
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'studi_live_cuisinea');

// database connexion
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
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