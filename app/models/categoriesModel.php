<?php

namespace App\Models\CategoriesModel;

use \PDO;

function findAll(PDO $connexion):array {
    $sql = 'SELECT *
    FROM categories
    ORDER BY NAME ASC
    limit 10;';
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);

}