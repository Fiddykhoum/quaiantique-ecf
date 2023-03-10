<?php
  require_once('templates/header.php');
  require_once('lib/menu.php');

  $menus = getMenus($pdo);

?>

    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <h1>Menus et carte</h1>
    </div>

    <div class="row">
      <?php foreach ($menus as $key => $menu) { 
        include('templates/menu_partial.php');
      } ?>
    </div>

<?php
require_once('templates/footer.php');
?>