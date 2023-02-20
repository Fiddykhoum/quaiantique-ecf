<?php
require_once('templates/header.php');
require_once('lib/tools.php');
require_once('lib/card.php');
require_once('lib/category.php');

$errors = [];
$messages = [];
$card = [
    'title' => '',
    'description' => '',
    'ingredients' => '',
    'instructions' => '',
    'category_id' => '',
];

$categories = getCategories($pdo);

if (isset($_POST['saveCard'])) {
    $fileName = null;
    // Si un fichier a été envoyé
    if(isset($_FILES['file']['tmp_name']) && $_FILES['file']['tmp_name'] != '') {
        // la méthode getimagessize va retourner false si le fichier n'est pas une image
        $checkImage = getimagesize($_FILES['file']['tmp_name']);      
        if ($checkImage !== false) {
            // Si c'est une image on traite
            $fileName = uniqid().'-'.slugify($_FILES['file']['name']);
            echo $fileName;
            move_uploaded_file($_FILES['file']['tmp_name'], _CARDS_IMG_PATH_.$fileName);
        } else {
            // Sinon on affiche un message d'erreur
            $errors[] = 'Le fichier doit être une image';
        }
    }

    if (!$errors) {
        $res = saveCard($pdo, $_POST['category'], $_POST['title'], $_POST['description'], $_POST['ingredients'], $_POST['instructions'], $fileName);
        
        if ($res) {
            $messages[] = 'La carte a bien été sauvegardée';
        } else {
            $errors[] = 'La carte n\'a pas été sauvegardée';
        }
    }
    $card = [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'ingredients' => $_POST['ingredients'],
        'instructions' => $_POST['instructions'],
        'category_id' => $_POST['category'],
    ];

}

if (isset($_POST['changeRole'])) {
  $res = changeRole($pdo, (int)$_POST['role_id'], (string)$_POST['username']);
  var_dump($res);
}

$level = getLevel();

if ($level == 1) { ?>

<!-- modification role -->
<form method="POST" enctype="multipart/form-data">
  <h2 class="display-6">Modifier les droits d'un utilisateur</h2>
  <div class="mb-3">
    <label for="username" class="form-label">Identifiant</label>
    <input type="text" name="username" id="username" class="form-control">
    <br>
      <label for="role_id" class="form-label">Role</label>
    <div class="d-flex role">
      <input type="text" name="role_id" id="role_id" class="form-control">

    <?php

    if (isset ($_POST['id'] ) && ($_POST['role'] )) {
      echo $_POST['id'];
      echo $_POST['id'];
    }
    ?>

    <input class="btn btn-primary btnleft" type="submit" value="Modifier" name="changeRole" class="btn btn-primary">
    </div>
      <p >1 pour administrateur - 2 pour Chef/Directeur - 3 pour client</p>
    </div>
</form>

<br>
<br>


<!-- add content -->
<form method="POST" enctype="multipart/form-data">
  <h2 class="display-6">Ajouter du contenu</h2>
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