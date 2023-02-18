<?php
  //session_start();
  require_once('lib/config.php');
  //require_once('lib/pdo.php');
  require_once('lib/tools.php');

  $currentPage = basename($_SERVER['SCRIPT_NAME']);
  
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quai Antique</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/override-bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- <script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</head>

<body>
  <div class="container">
    <header class="test d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="assets/images/logoquaiAntique.png" alt="Logo Cuisinea" width="300">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav nav-pills">
        <?php foreach ($mainMenu as $key => $value) { ?>
          <li class="nav-item">
            <a href="<?=$key; ?>" class="nav-link 
            <?php if ($currentPage === $key) { echo 'active'; } ?>"><?=$value ;?></a></li>
        <?php } ?>
      </ul>

      <div class="col-md-3 text-end"> 

        <?php

        if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
        ?>
            <p>Bonjour <?php echo ($_SESSION['username']) ?></p>
            <button type="button" class="btn btn-outline-primary me-2" onclick="window.location.href ='./logout.php';">Logout</button>
        <?php
          } else {
        ?>
            <button type="button" class="btn btn-outline-primary me-2" onclick="window.location.href ='./login.php';">Login</button>
            <button type="button" class="btn btn-primary" onclick="window.location.href ='./register.php';">Sign-in</button>
        <?php
            }

        //show delete button if admin    
        $level = getLevel();
        
        //show "Adminitrer" button
        if ($level == 1) { 
        ?>
          <button type="button" class="btn btn-primary" onclick="window.location.href ='./ajout_contenu.php';">Administrer</button>
        <?php 
        }
        ?>

      </div>
    </header>

    