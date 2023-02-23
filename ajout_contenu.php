<?php
require_once('templates/header.php');
require_once('lib/tools.php');
require_once('lib/card.php');

$errors = [];
$messages = [];
$card = [
    'title' => '',
    'description' => '',
    'content' => '',
];


if (isset($_POST['saveCard'])) {
    $fileName = null;
    // Si un fichier a été envoyé
    if(isset($_FILES['file']['tmp_name']) && $_FILES['file']['tmp_name'] != '') {
        // return false if file si not image
        $checkImage = getimagesize($_FILES['file']['tmp_name']);      
        if ($checkImage !== false) {
            // if the file is an image
            $fileName = uniqid().'-'.slugify($_FILES['file']['name']);
            move_uploaded_file($_FILES['file']['tmp_name'], _CARDS_IMG_PATH_.$fileName);
        } else {
            // if not error message
            $errors[] = 'Le fichier doit être une image';
        }
    }

    if (!$errors) {
        $res = saveCard($pdo, $_POST['title'], $_POST['description'], $_POST['content'], $fileName);
        
        if ($res) {
          //$messages[] = 'La carte a bien été sauvegardée';
          ?> 
            <script language="javascript">               
               alert ('La carte a bien été sauvegardée')
              //  location.reload();            
            </script>
          <?php
        } else {
          //$errors[] = 'La carte n\'a pas été sauvegardée';
          ?> 
            <script language="javascript">               
               alert ('La carte n\'a pas été sauvegardée')
              //  location.reload();            
            </script>
          <?php
        }
    }
    $card = [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'content' => $_POST['content'],
    ];

}

if (isset($_POST['changeRole'])) {
  $res = changeRole($pdo, (int)$_POST['role_id'], (string)$_POST['username']);
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
    // d'ou ça vient ça????
    // if (isset ($_POST['id'] ) && ($_POST['role'] )) {
    //   echo $_POST['id'];
    //   echo $_POST['id'];
    // }
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
        <label for="content" class="form-label">contenu</label>
        <textarea name="content" id="content" cols="30" rows="5" class="form-control"></textarea>
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