<?php
require_once('templates/header.php');
require_once('lib/tools.php');
require_once('lib/menu.php');


$errors = [];
$messages = [];
$menu = [
    'title' => '',
    'content' => '',
];






if (isset($_POST['saveMenu'])) {
    $res = saveMenu($pdo, $_POST['title'], $_POST['content'], null);
    $filePicName = null;
    // Si un fichier a été envoyé
    if(isset($_FILES['file']['tmp_name']) && $_FILES['file']['tmp_name'] != '') {
        // la méthode getimagessize va retourner false si le fichier n'est pas une image
        $checkImage = getimagesize($_FILES['file']['tmp_name']);      
        if ($checkImage !== false) {
            // Si c'est une image on traite
            $filePicName = uniqid().'-'.slugify($_FILES['file']['name']);
            echo $filePicName;
            move_uploaded_file($_FILES['file']['tmp_name'], _CARDS_IMG_PATH_.$filePicName);
        } else {
            // Sinon on affiche un message d'erreur
            $errors[] = 'Le fichier doit être une image';
        }
    }

    if (!$errors) {
        $res = saveMenu($pdo, $_POST['title'], $_POST['content'], $filePicName);
        
        if ($res) {
            $messages[] = 'La carte a bien été sauvegardée';
        } else {
            $errors[] = 'La carte n\'a pas été sauvegardée';
        }
    }
    $menu = [
        'title' => $_POST['title'],
        'content' => $_POST['content'],
    ];

  //fin de test de l'upload et rename de l'image_______________________________________________
}

if (isset($_POST['changeRole'])) {
  $res = changeRole($pdo, (int)$_POST['role_id'], (string)$_POST['username']);
}

$level = getLevel();

if ($level == 2 || $level == 1) { ?>

<!-- ajout de cntenu -->
<form method="POST" enctype="multipart/form-data">
  <h2 class="display-4">Ajouter du contenu</h2>

    <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Contenu</label>
        <textarea name="content" id="content" cols="30" rows="5" class="form-control"></textarea>
    </div>

    <div class="mb-3">
          <label for="file" class="form-label">Image</label>
          <input type="file" name="file" id="file">
      </div>
    <input type="submit" value="Enregistrer" name="saveMenu" class="btn btn-primary">

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