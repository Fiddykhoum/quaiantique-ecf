<?php
require_once('templates/header.php');
require_once('lib/tools.php');
require_once('lib/menu.php');

$id = (int)$_GET['id'];

$menu = getMenuById($pdo, $id);

if ($menu) {
 
  $contents = linesToArray($menu['content']);
 ?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">

    <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?=getMenuImage($menu['image']); ?>" class="d-block mx-lg-auto img-fluid" alt="<?=$menu['title']; ?>" width="700" height="500" loading="lazy">
    </div>

    <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3"><?=$menu['title']; ?></h1>
        <ul class="list-group list-group">
          <?php foreach ($contents as $key => $content) { ?>
              <li class="list-group-item"><?=$content; ?></li>
          <?php } ?>
        </ul>
    </div>

</div>

<?php } else { ?>
    <div class="row text-center">
        <h1>Carte introuvable</h1>
    </div>
<?php } ?>


<?php
require_once('templates/footer.php');
?>