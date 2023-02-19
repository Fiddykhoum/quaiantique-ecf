<?php

function getMenuById(PDO $pdo, int $id) {
    $query = $pdo->prepare("SELECT * FROM menus WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

function getMenuImage(string|null $image) {
    if ($image === null) {
        return _ASSETS_IMG_PATH_.'menu_default.jpg';
    } else {
        return _CARDS_IMG_PATH_.$image;
    }
}

function getMenus(PDO $pdo, int $limit = null) {
    $sql = 'SELECT * FROM menus ORDER BY id DESC';

    if ($limit) {
        $sql .= ' LIMIT :limit';
    }

    $query = $pdo->prepare($sql);

    if ($limit) {
        $query->bindParam(':limit', $limit, PDO::PARAM_INT);
    }

    $query->execute();
    return $query->fetchAll();
}

function saveMenu(PDO $pdo, string $title, string $content, string|null $image) {
    $sql = "INSERT INTO `menus` (`id`, `title`, `content`, `image`) VALUES (NULL, :title, :content, :image);";
    $query = $pdo->prepare($sql);
    $query->bindParam(':title', $title, PDO::PARAM_STR);
    $query->bindParam(':content', $content, PDO::PARAM_STR);
    $query->bindParam(':image', $image, PDO::PARAM_STR);
    return $query->execute();
}

