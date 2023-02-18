<?php
require_once('templates/header.php');
require_once('lib/tools.php');
require_once('lib/card.php');

$id = (int)$_GET['id'];

$card = getCardById($pdo, $id);

if ($card) {
  // linesToArray va transformer un exte en array selon un explode. 
  // cette fonction est dans lib/tools.php
    $ingredients = linesToArray($card['ingredients']);
    $instructions = linesToArray($card['instructions']);
    
?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?=getCardImage($card['image']); ?>" class="d-block mx-lg-auto img-fluid" alt="<?=$card['title']; ?>" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3"><?=$card['title']; ?></h1>
        <p class="lead"><?=$card['description']; ?></p>
    </div>
</div>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <h2>Ingrédients</h2>
    <ul class="list-group">
        <?php foreach ($ingredients as $key => $ingredient) { ?>
            <li class="list-group-item"><?=$ingredient; ?></li>
        <?php } ?>
    </ul>
</div>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <h2>Instructions</h2>
    <ol class="list-group list-group-numbered">
        <?php foreach ($instructions as $key => $instruction) { ?>
            <li class="list-group-item"><?=$instruction; ?></li>
        <?php } ?>
    </ol>
</div>

<?php } else { ?>
    <div class="row text-center">
        <h1>Carte introuvable</h1>
    </div>
<?php } ?>


<?php
require_once('templates/footer.php');
?>