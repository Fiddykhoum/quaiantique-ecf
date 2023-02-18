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
          //zone echo et var_dump
          echo $card['id'];
          ?>
            <!-- declencher une fonction delete (query) à partir de ce bouton -->
            <!-- recupérer l'id de la card et l'utliser pour une query sql qui suppeimera les données de la db -->
            <a href="carte.php?id=<?=$card['id']; ?>" class="btn btn-primary" onclick="delete(<?php $card['id'] ?>)">Supprimer</a>

        <?php } ?>
      </div>
  </div>
</div>