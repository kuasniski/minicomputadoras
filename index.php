<?php
ob_start();
session_start();
//require_once 'config/conexion.php';
require_once 'helpers/utils.php';
require_once "views/layout/header.php";

if (isset($_SESSION['identity']) || isset($_GET['controller'])) {
    //require_once 'views/layout/sidebar.php';
    require_once 'autoload.php';

    if (isset($_GET['controller'])) {
        $nombreControlador = $_GET['controller'] . "Controller";
        $titulo = $_GET['controller'];
    }elseif(!isset($_GET['controller'])){
        $nombreControlador = "homeController";
        $titulo = "Home";
    } else {
        echo 'Error controlador';
    }

    if (isset($_GET['action'])) {
        $nombreAccion = $_GET['action'];
    }elseif(!isset($_GET['action'])) {
        $nombreAccion = "inicio";
    }
    else {
        echo 'Error al cargar acction';
    }

    if (class_exists($nombreControlador) && method_exists($nombreControlador, $nombreAccion)) {
        $controlador = new $nombreControlador();
        $controlador->$nombreAccion();
    }else{
        echo 'Error al cargar la clase';
    }

}else{
    header('Location: http://localhost/minicomputadoras/?controller=home&action=inicio');
    //require_once 'views/home/inicio.php';
}
require_once 'views/layout/footer.php';