<?php 
require_once "./lib/tools.php";
?>

<h2 class="display-5">Réservations</h2>
<div class="tableau col-md-6 mt-8">
  <table>
    <thead>
      <tr>
        <th class="col">Nom</th>
        <th class="col">Nombre de personnes</th>
        <th class="col">Heure</th>
      </tr>
    </thead>
    <tbody>
  <?php foreach ($reservations as $reservation) { ?>
      <tr>
        <td class="col"><?php echo($reservation['name']); ?></td>
        <td class="col"><?php echo($reservation['nbPersonnes']); ?></td>
        <td class="col"><?php echo($reservation['heure']); ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  
  