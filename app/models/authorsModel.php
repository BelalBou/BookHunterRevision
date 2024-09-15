<?php

namespace App\Models\AuthorsModel;

use \PDO;

function findAll(\PDO $connexion) {
    $sql="SELECT * FROM authors ORDER BY created_at DESC LIMIT 4;";

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);

}
