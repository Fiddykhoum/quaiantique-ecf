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
      <form>  
        <h1 class="box-title">Reservez votre table</h1>
        <label>Nom, prénom (ou société)</label>
        <input type="text" class="box-input" name="username" placeholder="Nom">

        <label>Nombre de personnes</label>
        <input type="text" class="box-input" name="nbPersonnes" placeholder="Nombre">

        <input id="date" type="date" class="form-control box-input" name="date">
        
        <div class="box col-lg-8 p-3 " id="midiDiv"> 
          <h2 class="box-title">Le midi</h2>
          <?php 
            require_once ('./templates/resMidi.php');
          ?>
        </div>

        <div class="box col-lg-8 p-3" id="soirDiv">
          <h2 class="box-title">Le soir</h2>
          <?php 
            require_once ('./templates/resSoir.php');
          ?>
        </div>
        
        <input type="submit" value="Réserver " name="submit" class="mt-2 box-button">
      </form>
    </div>
  </div>
</div>
<script type="text/javascript" src="./assets/js/script.js"></script>

<?php 
require_once('templates/footer.php');
?>