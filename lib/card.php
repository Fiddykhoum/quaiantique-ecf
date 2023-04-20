<?php

function getCardById(PDO $pdo, int $id) {
    $query = $pdo->prepare("SELECT * FROM cards WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

function getCardImage(string|null $image) {
    if ($image === null) {
        return _ASSETS_IMG_PATH_.'card_default.jpg';
    } else {
        return _CARDS_IMG_PATH_.$image;
    }
}

function getCards(PDO $pdo, int $limit = null) {
    $sql = 'SELECT * FROM cards ORDER BY id DESC';

    if ($limit) {
        $sql .= ' LIMIT :limit';
    }

    $query = $pdo->prepare($sql);

    if ($limit) {
        $query->bindParam(':limit', $limit, PDO::PARAM_INT);
        //echo  $sql;// ==> SELECT * FROM cards ORDER BY id DESC LIMIT :limit
        //var_dump($query); //==> "SELECT * FROM cards ORDER BY id DESC LIMIT :limit"
    }

    $query->execute();
    return $query->fetchAll();
}

function saveCard(PDO $pdo, string $title, string $description, string $content, string|null $image) {
    $sql = "INSERT INTO `cards` (`id`,  `title`, `description`, `content`, `image`) VALUES (NULL, :title, :description, :content, :image);";
    $query = $pdo->prepare($sql);
    $query->bindParam(':title', $title, PDO::PARAM_STR);
    $query->bindParam(':description', $description, PDO::PARAM_STR);
    $query->bindParam(':content', $content, PDO::PARAM_STR);
    $query->bindParam(':image', $image, PDO::PARAM_STR);
    return $query->execute();
}
 
function changeRole(PDO $pdo, int $role_id, string $username) {
  if ($role_id === 1 || $role_id === 2 || $role_id === 3) {
    $sql = "UPDATE `users` SET `role_id` = :role_id WHERE `username` = :username" ;
    $query = $pdo->prepare($sql);
    $query->bindParam(':role_id', $role_id, PDO::PARAM_INT);
    $query->bindParam(':username', $username, PDO::PARAM_STR);
    return $query->execute();
} else {
  ?>
    <script language="javascript">               
      alert ('Le rôle que vous voulez attribuer n\'existe pas')          
    </script>
  <?php
  }
}
?>