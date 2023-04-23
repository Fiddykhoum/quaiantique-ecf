<?php 
require_once "./lib/tools.php"
?>

<div class="col-md-4 mt-4">
  <div class="card">
      <img src="<?=getMenuImage($menu['image']); ?>" 
        class="card-img-top" 
        alt="<?= $menu['title']; 
      ?>">
    <div class="card-body">
      <h5 class="card-title"><?= $menu['title']; ?></h5>
      <p class="card-text"><?= $menu['content']; ?></p>
      <a href="carte_menu.php?id=<?=$menu['id']; ?>" class="btn btn-primary">Détails</a>
      <?php
      
        $level = getLevel();
        if ($level === 1) {     
               
          if(isset($_POST[$menu['id']])) {
            
            $delquery = " DELETE FROM menus WHERE menus.id = " . $menu['id'] .";";
            $query = $pdo->query($delquery);
            
            ?> 
              <script language="javascript">               
                alert ("la carte a été supprimée")
                location.reload();            
              </script>
            <?php

           } ?>
          <form method="post">
            <input type="submit" class="btn btn-primary mt-4" name="<?=$menu['id']; ?>" value="Supprimer"/> 
          </form>

        <?php } ?>
      </div>
  </div>
</div> 