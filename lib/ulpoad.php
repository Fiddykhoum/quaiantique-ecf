<?php 
        
  $dir = "uploads/cards";
  $namefile = $_FILES['file']['name'];
  $tmpFIle = $_FILES['file']['tmp_name'];
  $typeFIle = explode(".", $namefile)[1];

  $correct = array('png', 'jpg', 'gif');

  if (in_array($typeFIle, $correct)) {
    if (move_uploaded_file($tmpFIle, $dir.$namefile)){

    } else {
 
        echo "l'upload a échoué";
    }

  } else {

    echo "Type d'image non supporté";
  }