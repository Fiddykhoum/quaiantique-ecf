<?php

  require_once('lib/config.php');
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
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/override-bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="container">
    <header class="test d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="assets/images/logoquaiAntique.png" alt="Logo Quai Antique" class="logo" >
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav nav-pills">
        <?php foreach ($mainMenu as $key => $value) { ?>
          <li class="nav-item">
            <a href="<?=$key; ?>" class="nav-link 
            <?php if ($currentPage === $key) { echo 'active'; } ?>"><?=$value ;?></a></li>
        <?php } ?>
      </ul>

      <div class="col-lg-3 text-end"> 

        <?php

        if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
        ?>
          <div class="d-inline" >
            <p class="d-inline">Bonjour <?php echo ($_SESSION['username']) ?></p>
            <button type="button" class="d-inline btn btn-outline-primary me-2" onclick="window.location.href ='./logout.php';">Logout</button>
          </div>
        <?php
          } else {
        ?>
            <button type="button" class="btn btn-outline-primary me-2" onclick="window.location.href ='./login.php';">Login</button>
            <button type="button" class="btn btn-primary me-2" onclick="window.location.href ='./register.php';">Sign-in</button>
        <?php
            }

        //show the "delete" button if admin    
        $level = getLevel();
        
        //show "Adminitrer" button
        if ($level == 1) { 
        ?>
          <div>
            <button type="button" class="btnAdmin btn btn-primary mt-4" onclick="window.location.href ='./ajout_contenu.php';">Administrer</button>
            <button type="button" class="btnAdmin btn btn-primary mt-4" onclick="window.location.href ='./ajout_menu.php';">Menus</button>
            <button type="button" class="btnAdmin btn btn-primary mt-4" onclick="window.location.href ='./reservations.php';">Réservations</button>
          </div>
        <?php 
        } elseif ($level == 2) { 
        ?>
          <button type="button" class="btnAdmin btn btn-primary mt-4" onclick="window.location.href ='./ajout_menu.php';">Admin menus</button>
          <button type="button" class="btnAdmin btn btn-primary mt-4" onclick="window.location.href ='./reservations.php';">Réservations</button>
        <?php 
        }
        ?>

      </div>
    </header>

    