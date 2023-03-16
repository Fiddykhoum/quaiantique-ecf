<?php 
//require_once "./lib/tools.php";
require_once "./lib/tool_date.php";

if (empty($_POST['bookedDate'])) {
  echo ('<h2 class="display-5">Veuillez saisir une date valide</h2>');
  die();
} else {
  $date = $_POST['bookedDate'];
  $formatedDate = formatDate($date); 
}
?>

<h2 class="display-5">Réservations pour le <?php echo( $formatedDate );?></h2> 
<div class="tableau">
  <table>
    <thead>
      <tr>
        <th class="col">Nom</th>
        <th class="col">Nombre</th>
        <th class="col">Heure</th>
      </tr>
    </thead>
    <tbody>
  <?php foreach ($reservations as $reservation) { ?>
      <tr>
        <td class="col"><?php echo(htmlspecialchars($reservation['name'])); ?></td>
        <td class="col"><?php echo(htmlspecialchars($reservation['nbPersonnes'])); ?></td>
        <td class="col"><?php echo($reservation['heure']); ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  
  