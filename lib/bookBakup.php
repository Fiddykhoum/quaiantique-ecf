<?php
// faire une fonction comme celle ci mais par quand au lieu de id
//à supprimer???
function getBookById(PDO $pdo, int $id) {
    $query = $pdo->prepare("SELECT * FROM reservations WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}


function getBooks(PDO $pdo, int $limit = null) {
    $sql = 'SELECT * FROM reservations ORDER BY id DESC';

    if ($limit) {
        $sql .= ' LIMIT :limit';
    }

    $query = $pdo->prepare($sql);

    if ($limit) {
        var_dump($query->bindParam(':limit', $limit, PDO::PARAM_INT));
    }

    $query->execute();
    return $query->fetchAll();
}

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