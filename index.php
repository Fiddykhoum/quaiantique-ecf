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
      <h1 class="display-5 fw-bold lh-1 mb-3">Quai antique</h1>
      <h2 class="display-5  lh-1 mb-3">Restaurant gastronomique</h2>
        <p class="lead">
          Venez déguster les plat du chef étoilé Arnaud Michant 
          dans un cadre de rêve ou règne le calme et la serenité.
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