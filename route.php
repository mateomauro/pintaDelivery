<?php
    require_once "app/controladores/controlador.php";

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    $action = 'home';

    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }

    $params = explode ("/", $action);

    $controlador = new Controlador();

    switch ($params[0]) {
        case 'home':
            $controlador->mostrarHome();
            break;
        case 'login':
            $controlador->mostrarLogin();
            break;
        case 'loguearse':
            $controlador->loguearse();
            break;
        case 'eliminar':
            $controlador->eliminar($params[1]);
            break;
        case 'editar':
            $controlador->editar($params[1]);
            break;
        case 'modificar':
            $controlador->modificar($params[1]);
            break;
        case 'desloguiar':
            $controlador->desloguiar();
            break;
        default:
            echo "ERROR NOT FOUND";
        break;
    }
?>