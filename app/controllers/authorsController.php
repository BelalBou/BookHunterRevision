<?php

namespace App\Controllers\authorsController;

use \PDO;

function indexAction(PDO $connexion) {
    include_once '../app/models/authorsModel.php';
    $authors = \App\Models\AuthorsModel\findAll($connexion);

    //Je charge la vue 'HOME' dans $ content
    global $content,$title;
    $title ="Authors";

    ob_start();
    include '../app/views/authors/index.php';
    $content= ob_get_clean();
}