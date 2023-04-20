<?php
// echo password_hash('user', PASSWORD_DEFAULT);
  require_once('templates/header.php');
  require_once('lib/card.php');
  require_once('lib/pdo.php');

  $cards = getCards($pdo, _HOME_CARDS_LIMIT_);
  
?>
<!-- carousel -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner ">

      <div class="carousel-item active ">
        <div class="carouselContent">
          <!-- <h1>Quai Antique</h1>           -->
          <h2 class="fTitleSize lh-1 mb-3">Restaurant gastronomique</h2>
          <p class="lead fSize">
            Venez déguster les plat du chef étoilé Arnaud Michant 
            dans un cadre de rêve ou règne le calme et la serenité.
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="cards.php" class="btn btn-primary carBtn">Visitez le restaurant</a>
          </div>
        </div>
          <img src="assets/images/carPix/01-2.jpg" class="d-block w-100"  alt="Restaurant">
      </div>

      <div class="carousel-item">            
        <div class="carouselContent">
          <!-- <h1>Quai Antique</h1>           -->
          <h2 class="fTitleSize  lh-1 mb-3">Restaurant gastronomique</h2>
          <p class="lead fSize">
            Réservez une table pour passer un bon moment dans nos salles.
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a href="cards.php" class="btn btn-primary carBtn">Visitez le restaurant</a>
          </div>
        </div>
        <img src="assets/images/carPix/02-2.jpg" class="d-block w-100"  alt="Equipe">
      </div>

      <div class="carousel-item">
        <div class="carouselContent">
          <!-- <h1>Quai Antique</h1>           -->
          <h2 class="fTitleSize  lh-1 mb-3">Des plats soignés</h2>
          <p class="lead fSize">
            Découvrez la carte et nos menus.
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a href="menus.php" class="btn btn-primary carBtn">Voir la carte</a>
          </div>
        </div>
        <img src="assets/images/carPix/03-2.jpg" class="d-block w-100"  alt="Cuisine">
      </div>
    </div>
    
    <!-- <button class="carousel-control-prev bg-dark h-25 mt-4 rounded-end-5 pe-2" 
        type="button" 
        data-bs-target="carouselExampleControls"  
        role="button" 
        data-slide="prev">

      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    
    <button class="carousel-control-next bg-dark h-25 mt-4 rounded-start-5"  
        type="button" 
        data-bs-target="carouselExampleControls" 
        role="button" 
        data-slide="next">

      <span class="sr-only">Next</span>
      <span class="carousel-control-next-icon" aria-hidden="true"></span> -->

  </div>
  
  <!-- fin carousel -->


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
      <!-- <h1 class="display-5 fw-bold lh-1 mb-3">Quai antique</h1> -->
      <h2 class="display-5  lh-1 mb-3">La qualité avant tout</h2>
        <p class="lead">
          Venez déguster les plat du chef étoilé Arnaud Michant 
          dans un cadre de rêve ou règne le calme et la serenité. Lorem ipsum dolor, sit amet 
          consectetur adipisicing elit. Unde expedita ab cupiditate illum corporis corrupti, 
          culpa ullam alias deleniti, aperiam repellendus fugit officia cum sapiente sit rerum 
          soluta, dignissimos necessitatibus repudiandae? Beatae facere deleniti laboriosam nihil
           earum animi velit, corrupti vero at sint consequatur, natus reprehenderit non quaerat, 
           sit eius.

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