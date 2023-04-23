<?php
  require_once('templates/header.php');
  require_once('lib/card.php');
  require_once('lib/tools.php');
  require_once('./Class/Product.php');
  require_once('./Class/Cart.php');
  require_once('./lib/cart_tools.php');
  $cards = getCards($pdo);

  $flamm = new Product(
    'Fond pour Flamm',
    './assets/images/flamm.jpg',
    'Fond pour tarte flambée, fine de 40 cm de diamètre',
    0.75,
  );
  $pizza = new Product(
    'Fond pour Pizza',
    './assets/images/pizza.jpg',
    'Fond pour pizza , pâte à pain épaisse de 35 cm de diamètre',
    0.85,
  );
  $tarte = new Product(
    'Fond pour tarte',
    './assets/images/tarte.jpg',
    'Fond pâte sablée pour tarte sucrée, sablée de 35 cm de diamètre',
    1.80,
  );
 
  if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {

    if (isset($_POST['qtyFlamm'])) {
      $username = $_SESSION['username'];
      $qtyFlamm = $_POST['qtyFlamm'];
      savecart($pdo, $username, $flamm->productName,$flamm->productDescription, $qtyFlamm, $flamm->price);

      $message='Vous avez ajouté '.$_POST['qtyFlamm'].' fonds à votre panier';
      echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

    }

    if (isset($_POST['qtyPizza'])) {
      $username = $_SESSION['username'];
      $qtyPizza = $_POST['qtyPizza'];
      savecart($pdo, $username, $pizza->productName,$pizza->productDescription, $qtyPizza, $pizza->price);

      $message='Vous avez ajouté '.$_POST['qtyPizza'].' fonds à votre panier';
      echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    }

    if (isset($_POST['qtyTarte'])) {
      $username = $_SESSION['username'];
      $qtyTarte = $_POST['qtyTarte'];
      savecart($pdo, $username, $tarte->productName,$tarte->productDescription, $qtyTarte, $tarte->price);
      
      $message='Vous avez ajouté '.$_POST['qtyTarte'].' fonds à votre panier';
      echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    }
  }
  // } else {
  //   echo('vous devez être connecté pur commander nos produit. L\'inscription est gratuite');
  // }
     
 
$level = getLevel();

if ($level === 1 || $level === 2 || $level === 3) { 
?>
<div class="d-flex justify-content-between">
    <h1>Shop</h1>
    <a href="panier.php"><img src="assets/images/cart.png" style=width:50px;></a>
</div>

<div class="row">
 <div class="col-md-4 mt-4">
  <div class="card">
  <?php echo('<img class="card-img-top" src="'.$flamm->imageAdress.'">'); ?>
    <div class="card-body">
      <h5 class="card-title"><?= $flamm->productName ?></h5>
      <p class="card-text"><?= $flamm->productDescription ?></p>
      <p class="card-text"><?= $flamm->price.' € pièce' ?></p>
      <form method="POST" enctype="multipart/form-data">
        <label for="">Quantité</label>
        <input style=width:50px type="text" name="qtyFlamm" id="qtyFlamm">
        <input type="submit" value="Ajouter au panier" name="submitFlamm" class="btn btn-primary" /> 
      </form>
    </div>
  </div>
</div> 

<div class="col-md-4 mt-4">
  <div class="card">
  <?php echo('<img class="card-img-top" src="'.$pizza->imageAdress.'">'); ?>
    <div class="card-body">
      <h5 class="card-title"><?= $pizza->productName ?></h5>
      <p class="card-text"><?= $pizza->productDescription ?></p>
      <p class="card-text"><?= $pizza->price.' € pièce' ?></p>
      <form method="POST" enctype="multipart/form-data">
        <label for="">Quantité</label>
        <input style=width:50px type="text" name="qtyPizza" id="qtyPizza">
        <input type="submit" class="btn btn-primary" name="submitPizza" value="Ajouter au panier"/> 
      </form>
    </div>
  </div>
</div> 

<div class="col-md-4 mt-4">
  <div class="card">
  <?php echo('<img class="card-img-top" src="'.$tarte->imageAdress.'">'); ?>
    <div class="card-body">
      <h5 class="card-title"><?= $tarte->productName ?></h5>
      <p class="card-text"><?= $tarte->productDescription ?></p>
      <p class="card-text"><?= $tarte->price.' € pièce' ?></p>
      <form method="POST" enctype="multipart/form-data">
        <label for="">Quantité</label>
        <input style=width:50px type="text" name="qtyTarte" id="qtyTarte">
        <input type="submit" class="btn btn-primary" name="submitTarte" value="Ajouter au panier"/> 
      </form>
    </div>
  </div>
</div> 
<?php
} else {
?>
<div class="alert alert-danger text-center fs-5">
  Vous devez être connecté pour acceder au Shop, L'inscription est gratuite et ne vous prendra que cinq minutes
</div>
<?php
}
?>
<?php
  require_once('templates/footer.php');
?>