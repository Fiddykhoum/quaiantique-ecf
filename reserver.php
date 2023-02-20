<?php
// echo password_hash('user', PASSWORD_DEFAULT);
  require_once('templates/header.php');
  require_once('lib/card.php');
  require_once('lib/pdo.php');

  $cards = getCards($pdo, _HOME_CARDS_LIMIT_);

?>

<div class="bg-image">
  <div class="row flex-lg-row-reverse align-items-center g-1 py-5 content">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="assets/images/logoquaiAntique.png"
        class="d-block mx-lg-auto img-fluid" 
        alt="Logo Quai antique" 
        width="450" 
        loading="lazy">
    </div>
  
    <div class="col-lg-6 p-3">
      <h2 class="display-5  lh-1 mb-3">Réservations</h2>
        <p class="lead">
          Cette page est encore en construction. Pour réserver, nous vous invitons à nous contacter au 06 00 00 00 00<br>
          Merci de votre compréhension.
        </p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="cards.php" class="btn btn-primary">Visitez le restaurant</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-5">

  <?php foreach ($cards as $key => $card) { 
    include('templates/card_partial.php');
  } ?>

</div>

<?php
require_once('templates/footer.php');
?>