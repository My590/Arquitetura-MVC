<?php 
require_once 'Model.php';
require_once 'View.php';
require_once 'Controller.php';

// Criar instancias
$model = new Model();
$controller = new Controller($model);
$view = new View($model);

// Verifica a ação e executa
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'somar':
            $controller->somar();
            break;
        case 'subtrair':
            break;
            $controller->subtrair();
            break;
        case 'multiplicar':
            $controller->multiplicar();
            break;
        case 'dividir':
            $controller->dividir();   
    }
}

// Exibe na tela
echo $view->output();
