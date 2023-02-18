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

// ne fonctionne pas
// function getSlug(PDO $pdo, string $slug) {
//   $query = $pdo->prepare("SELECT * FROM users JOIN roles ON users.role_id = roles.id WHERE username = :username;");
//   $query->bindParam(':username', $slug, PDO::PARAM_INT);
//   $query->execute();
//   $query->fetch();
// }
