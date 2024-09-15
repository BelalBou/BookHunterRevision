<?php

use App\Controllers\BooksController;

include '../app/controllers/booksController.php';

switch($_GET['books']):
    case'show':
        //Action:show
        BooksController\showAction($connexion,$_GET['id']);
    break;

    default:
        //ACTION:index
        BooksController\indexAction($connexion,$_GET['books']);

    break;
endswitch;


