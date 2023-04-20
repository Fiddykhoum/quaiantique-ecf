<?php 
require_once "./lib/tools.php"
?>

<div class="col-md-4 mt-4">
  <div class="card">
      <img src="<?=getCardImage($card['image']); ?>" 
        class="card-img-top" 
        alt="<?= $card['title']; 
      ?>">
    <div class="card-body">
      <h5 class="card-title"><?= $card['title']; ?></h5>
      <p class="card-text"><?= $card['description']; ?></p>
      <a href="carte.php?id=<?=$card['id']; ?>"class="btn btn-primary">Détails</a>
      <?php
      
        $level = getLevel();
        if ($level == 1) {                    
          if(isset($_POST[$card['id']])) {
            
            $delquery = " DELETE FROM cards WHERE cards.id = " . $card['id'] .";";
            $query = $pdo->query($delquery);
           
           ?> 
              <script language="javascript">               
                 alert ("la carte a été supprimée")
                 location.reload();            
              </script>
          <?php
           
           } ?>

          <form method="post">
            <input type="submit" class="btn btn-primary mt-4"  name="<?=$card['id']; ?>" value="Supprimer"/> 
          </form>

        <?php } ?>
      </div>
  </div>
</div> 