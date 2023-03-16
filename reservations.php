<?php
require_once('templates/header.php');
require_once('lib/tools.php');

$level = getLevel();
$errors = [];

if (isset($_POST['submit'])) {
    if (!$errors) {
      $quand = $_POST['bookedDate'];
      $reservations = getReservations($quand);  
    }
  }
    
if ($level == 2 || $level == 1) {   
  
  ?>
  <!-- day choice -->
  <div> 
  <form method="POST" enctype="multipart/form-data">
    <h2 class="display-4">Choisir le jour</h2>
    <input id="bookedDate" type="date" class="form-control box-input" name="bookedDate">
    <input type="submit" value="Voir réservations" name="submit" class="mt-2 box-button">
  </form>
  
  <?php 
  // Not showing table before selecting a date
  if (isset($_POST['submit'])) { ?>
    <div class="row">
      <?php require_once('templates/reservations_partial.php'); ?>
    </div>
  <?php };

} else {
  ?>
    <div class="mb-3">
      <p style="font-size: 2rem;">Seuls les administrateurs ont accès à cette page</p>
    </div>
  <?php
}
?>

<?php
  require_once('templates/footer.php');
?>
</div>