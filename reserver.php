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
<!-- <script src="./assets/js/script.js"> -->
<script>
    const midiDiv = document.getElementById('midiDiv');
    const soirDiv = document.getElementById('soirDiv');

    // listen date input
    const date = document.getElementById("date") 
    
    // after select date, show resMidi or resSoir
    date.addEventListener('input', function() {

      // split date delete "-" ==> format  ['2023', '03', '15']
      var myDate = date.value.split("-");
      var newDate = new Date( myDate[0], myDate[1] - 1, myDate[2]);
      $timestamp = newDate.getTime();
      const day = newDate.getDay($timestamp);
      console.log(day);
      if (day === 1) {
        // montrer que le soir
        midiDiv.style.display = 'none';
        soirDiv.style.display = 'block';
        alert('Ouvert que le soir');

      } else if ( day === 0) {
        //montrer que le matin
        soirDiv.style.display = 'none';
        midiDiv.style.display = 'block';
        alert('Ouvert que le midi');

      } else {
        //Monter les 2
        console.log('les 2');
        midiDiv.style.display = 'block';
        soirDiv.style.display = 'block';
      }
    })
</script>
<?php 
require_once('templates/footer.php');
?>