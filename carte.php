<?php
require_once('templates/header.php');
//require_once('lib/tools.php');
require_once('lib/card.php');

$id = (int)$_GET['id'];
$card = getCardById($pdo, $id);

if ($card) {

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
    <h2>Description</h2>
    <ul class="list-group">
        <?php $card['content']; { ?>
            <li class="list-group-item"><?= $card['content'] ?></li>
        <?php } ?>
    </ul>
</div>

<?php } else { ?>
    <div class="row text-center">
        <h1>Carte introuvable</h1>
    </div>
<?php } ?>


<?php
require_once('templates/footer.php');
?>