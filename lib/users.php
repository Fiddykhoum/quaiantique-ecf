<?php

function getUserById(PDO $pdo, int $id) {
    $query = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

function getUserPassword(PDO $pdo, string $password) {
  $query = $pdo->prepare("SELECT email FROM users WHERE id = :id");
  $query->bindParam(':id', $password, PDO::PARAM_INT);
  $query->execute();
  return $query->fetch();
  }

  function getUserName(PDO $pdo, string $name) {
    $query = $pdo->prepare("SELECT email FROM users WHERE id = :id");
    $query->bindParam(':id', $name, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

?>
