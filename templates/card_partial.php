<?php 
require_once "./lib/tools.php"
?>

<div class="col-md-4">
  <div class="card">
      <img src="<?=getCardImage($card['image']); ?>" 
        class="card-img-top" 
        alt="<?= $card['title']; 
      ?>">
    <div class="card-body">
      <h5 class="card-title"><?= $card['title']; ?></h5>
      <p class="card-text"><?= $card['description']; ?></p>
      <a href="carte.php?id=<?=$card['id']; ?>" class="btn btn-primary">Détails</a>
      <?php
        $level = getLevel();
        if ($level == 1) {     
               
          if(isset($_POST[$card['id']])) {
            $pdo = new PDO('mysql:dbname=studi_live_cuisinea;host=127.0.0.1;charset=utf8mb4', 'root', '');

            $delquery = " DELETE FROM recipes WHERE recipes.id = " . $card['id'] .";";
            echo "cette carte a été supprimée de la base de données, Vous pouvez actualiser";
            $query = $pdo->query($delquery);
           } ?>
          <form method="post">
            <input type="submit"  name="<?=$card['id']; ?>" value="Supprimer"/> 
          </form>

        <?php } ?>
      </div>
  </div>
  </div> 