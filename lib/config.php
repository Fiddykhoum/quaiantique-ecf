<?php

// je l'importe pour => connection des utiisateurs, voisr si c'est la bonne chose à faire
 require_once('lib/pdo.php');

//constante qui définie les images déstinées à être postée en tant que photos
define('_CARDS_IMG_PATH_', 'uploads/cards/');
//constante qui définie les images déstinées à l'apparence du site
define('_ASSETS_IMG_PATH_', 'assets/images/');

//constante qui défini le nombre de cards à mettre dans index.php
define('_HOME_CARDS_LIMIT_', 3);

$mainMenu = [
  'index.php' => 'Accueil', 
  'restaurant.php' => 'Le restaurant',
  'menus.php' => 'menu et carte',
  'reserver.php' => 'Réserver',    
];

//for login and register
// test config admin dossier supprimé
  // Informations d'identification
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'studi_live_cuisinea');
 
// Connexion à la bdd MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}


  // connection des utiisateurs
  // https://youtu.be/K4JT0s1Sndg
  if (isset($_POST['email']) && ($_POST['password'] )) {
    $email = $_POST['email'];
    $password = $_POST['password'];
  

    //requete pour selectionner l'utilisateur qui a pour email et mdp les identifiants saisis
    $req = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password = '$password' ");
    $num_ligne = mysqli_num_rows($req);
    if ($num_ligne > 1 ) { // si le nb de lignes est sup à 1
      header("location : ajout_contenu.php"); 
    } else {
      echo "identifiant ou mot de passe inconnu";
    }

  }