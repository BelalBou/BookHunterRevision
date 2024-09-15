<?php

use App\Controllers\AuthorsController;

include '../app/controllers/authorsController.php';

switch($_GET['authors']):
    case'show':
        //Action:show
        AuthorsController\showAction($connexion,$_GET['id']);
    break;

    default:
        //ACTION:index
        AuthorsController\indexAction($connexion,$_GET['authors']);

    break;
endswitch;


