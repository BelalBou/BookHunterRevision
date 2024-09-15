<?php


namespace App\Controllers\PagesController;

use \PDO;

function homeAction(PDO $connexion) {
    // Je demande des données aux modèles
    include_once '../app/models/booksModel.php';
    $books = \App\Models\BooksModel\findAll($connexion);

        // Je demande des données aux modèles
    include_once '../app/models/authorsModel.php';
    $authors = \App\Models\AuthorsModel\findAll($connexion);

    //Je charge la vue 'HOME' dans $ content
    global $content,$title;
    $title ="HomePage";

    ob_start();
    include '../app/views/pages/home.php';
    $content= ob_get_clean();
}