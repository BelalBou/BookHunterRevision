<?php

// router principal

// route des books
//Pattern: ?photos
//ctrl: booksControllers
//action:indexAction
if(isset($_GET['books'])) :
include_once '../app/controllers/booksController.php';
\App\Controllers\BooksController\indexAction($connexion);

elseif(isset($_GET['authors'])):
include_once '../app/controllers/authorsController.php';
\App\Controllers\authorsController\indexAction($connexion);


// route par défaut
// pattern: /
// ctrl: pagesController
// action: homeAction
else:
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);
endif;