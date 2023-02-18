<?php
require_once('templates/header.php');
require_once('lib/tools.php');
require_once('lib/card.php');

if (isset($_POST['saveCard'])) {
    $res = saveCard($pdo, $_POST['category'], $_POST['title'], $_POST['description'], $_POST['ingredients'], $_POST['instructions'], null);
    var_dump($res);
}


$level = getLevel();
echo $level;

if ($level == 1) { ?>

<form method="POST" enctype="multipart/form-rolr-data">
  <h2 class="display-4">Modifier les droits d'un utilisateur</h2>
  <div class="mb-3">
    <label for="title" class="form-label">Identifiant</label>
    <input type="text" name="id" id="id" class="form-control">
    <br>
      <label for="title" class="form-label">Role</label>
    <div class="d-flex role">
      <input type="text" name="role" id="role" class="form-control">

    <?php

    if (isset ($_POST['id'] ) && ($_POST['role'] )) {
      echo $_POST['id'];
      echo $_POST['id'];
    }
    ?>

    <input class="btnleft box-button" type="submit" value="Modifier" name="saveCard" class="btn btn-primary">
    </div>
      <p >1 pour client - 2 pour Chef/Directeur - 3 pour administrateur</p>
    </div>
</form>



<br>
<br>

<form method="POST" enctype="multipart/form-data">
  <h2 class="display-4">Ajouter du contenu</h2>
    <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="ingredients" class="form-label">Ingredients</label>
        <textarea name="ingredients" id="ingredients" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="instructions" class="form-label">Instructions</label>
        <textarea name="instructions" id="instructions" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Catégorie</label>
        <select name="category" id="category" class="form-select">
            <option value="1">Entrée</option>
            <option value="2">Plat</option>
            <option value="3">Dessert</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Image</label>
        <input type="file" name="file" id="file">
    </div>
    <input type="submit" value="Enregistrer" name="saveCard" class="btn btn-primary">

</form>
<?php
} else {
  ?>
    <div class="mb-3">
      <p>Seul les administrateurs ont accés à cett page</p>
    </div>
    
  <?php
}
?>




<?php
require_once('templates/footer.php');
?>