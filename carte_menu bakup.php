<?php
require_once('templates/header.php');
require_once('lib/tools.php');
require_once('lib/menu.php');

$id = (int)$_GET['id'];

$menu = getMenuById($pdo, $id);


if ($menu) {

 ?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?=getMenuImage($menu['image']); ?>" class="d-block mx-lg-auto img-fluid" alt="<?=$menu['title']; ?>" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3"><?=$menu['title']; ?></h1>
        <h2>Description</h2>
        <p class="lead"><?=$menu['content']; ?></p>
    </div>
</div>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <h2>Description</h2>
    <ul class="list-group">
        <?php $menu['content']; { ?>
            <li class="list-group-item"><?= $menu['content'] ?></li>
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