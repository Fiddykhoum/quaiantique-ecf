<?php

function saveBook(PDO $pdo, string $name, int $nbPersonnes, string $quand, string $heure ) {
    $sql = "INSERT INTO `reservations` 
    (`id`,  `name`, `nbPersonnes`, `quand`, `heure`) 
    VALUES (NULL, :name, :nbPersonnes, :quand, :heure);";
    $query = $pdo->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':nbPersonnes', $nbPersonnes, PDO::PARAM_INT);
    $query->bindParam(':quand', $quand, PDO::PARAM_STR);
    $query->bindParam(':heure', $heure, PDO::PARAM_STR);
    return $query->execute();   
}

?>