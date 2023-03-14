<?php
  require_once('templates/header.php');
  require_once('lib/book.php');
  require_once('lib/pdo.php');

$errors = [];
$messages = [];
$reservation = [
    'name' => '',
    'nbPersonnes' => '',
    'quand' => '',
];

if (isset($_POST['submit'])) {
  if (empty($_POST['heure'])) {
    ?>
    <script language="javascript">               
      alert ('Saisissez une heure');       
    </script>
    <?php
  } else if (empty($_POST['name'])) {
    ?>
    <script language="javascript">               
      alert ('Saisissez votre nom (ou titre de la réservation');       
    </script>
    <?php
  } else if (empty($_POST['nbPersonnes'])) {
    ?>
    <script language="javascript">               
      alert ('Saisissez un nombre de personnes');       
    </script>
    <?php
  }else if (empty($_POST['quand'])) {
    ?>
    <script language="javascript">               
      alert ('Saisissez une date');       
    </script>
    <?php
  } else 
 
  if (!$errors) {
    $res = saveBook($pdo, $_POST['name'], $_POST['nbPersonnes'], $_POST['quand'], $_POST['heure']);      
        if ($res) {
          ?> 
            <script language="javascript">               
                alert ('Vorte réservation a été enregistrée')           
            </script>
          <?php
        } else {
          ?> 
            <script language="javascript">               
              alert ('Vorte réservation n\'a pas été enregistrée')          
            </script>
          <?php
        }
    }
  $reservation = [
      'name' => htmlspecialchars($_POST['name']),
      'nbPersonnes' => htmlspecialchars($_POST['nbPersonnes']),
      'quand' => $_POST['quand'],
  ];
};
?>

<div class="bg-image h-auto">
  <div class="row flex-lg-row  justify-content-center align-items-center g-1 py-5 content">  
    <div class="col-lg-6 p-3">
        <form method="POST" enctype="multipart/form-data">  
          <h1 class="box-title">Reservez votre table</h1>
          <label>Nom, prénom (ou société)</label>
          <input type="text" class="box-input" name="name" placeholder="Nom">

          <label>Nombre de personnes</label>
          <input type="text" class="box-input" name="nbPersonnes" placeholder="Nombre">

          <input id="date" type="date" class="form-control box-input" name="quand">
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

          <input type="submit" value="Réserver" name="submit" class="mt-2 box-button">
        </form>
    </div>
  </div>
</div>
<script type="text/javascript" src="./assets/js/script.js"></script>

<?php 
require_once('templates/footer.php');
?>