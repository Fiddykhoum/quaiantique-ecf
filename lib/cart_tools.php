<?php

function saveCart(PDO $pdo, string $username, string $productname, string $productDescription, 
  int $qauntity,
  string $price
  ) {
    $sql = "INSERT INTO `cart` (`id`, `user`, `name`, `description`, `quantity`, `price`) 
    VALUES (NULL, :username, :productname, :productDescription, :qauntity, :price);";
    $query = $pdo->prepare($sql);
    $query->bindParam(':username', $username, PDO::PARAM_STR);
    $query->bindParam(':productname', $productname, PDO::PARAM_STR);
    $query->bindParam(':productDescription', $productDescription, PDO::PARAM_STR);
    $query->bindParam(':qauntity', $qauntity, PDO::PARAM_INT);
    $query->bindParam(':price', $price, PDO::PARAM_STR);
    return $query->execute();   
}

// getCart by connected user
function getCart(PDO $pdo, $username) {
  $sql = "SELECT  `id`, `name`, `description`, `quantity`, `price` FROM `cart` WHERE user = `user`";
  $query = $pdo->query($sql);
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}

?>