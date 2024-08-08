<?php 
    require 'MVC\app\controllers\HomeController.php';
    require 'MVC\app\models\User.php';

    $controller = new HomeController();
    $controller->index();
