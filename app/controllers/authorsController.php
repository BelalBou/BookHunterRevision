<?php

namespace App\Controllers\authorsController;

use \PDO;

function indexAction(PDO $connexion) {
    include_once '../app/models/authorsModel.php';
    $authors = \App\Models\AuthorsModel\findAll($connexion,10);

    //Je charge la vue 'HOME' dans $ content
    global $content,$title;
    $title ="Authors";

    ob_start();
    include '../app/views/authors/index.php';
    $content= ob_get_clean();
}


function showAction(PDO $connexion,int $id){
    include_once '../app/models/authorsModel.php';
    $author = \App\Models\AuthorsModel\findOneByID($connexion,$id);

    global $content,$title;
    $title = $author['firstname'];
    ob_start();
    
    include '../app/views/authors/show.php';
    $content = ob_get_clean();

} 