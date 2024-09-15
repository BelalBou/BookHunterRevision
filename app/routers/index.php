<?php

// router principal

// route des books
//Pattern: ?books
//ctrl: booksControllers
//action:indexAction

if(isset($_GET['books'])) :
include_once '../app/routers/books.php';

// route des authors
//Pattern: ?authors
elseif(isset($_GET['authors'])):
include_once '../app/routers/authors.php';


// route par défaut
// pattern: /
// ctrl: pagesController
// action: homeAction
else:
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);
endif;