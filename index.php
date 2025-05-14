<?php
require_once("controladores/AreaController.php");
require_once("controladores/PermisoController.php");
require_once("controladores/LoginController.php");

session_start();

// Lista de acciones públicas (que no requieren estar logueado)
$accionesPublicas = ["login", "autenticar", "registrar"];

// Detectar acción desde la URL
$accion = $_GET["accion"] ?? "inicio";

// Proteger rutas si no está logueado
if (!isset($_SESSION["usuario"]) && !in_array($accion, $accionesPublicas)) {
    header("Location: index.php?accion=login");
    exit;
}

// Enrutamiento según acción
switch ($accion) {
    // Inicio personalizado
    case "inicio":
        require("vistas/inicio.php");
        break;

    // Login / logout / registro
    case "login":
        $login = new LoginController();
        $login->mostrarLogin();
        break;

    case "autenticar":
        $login = new LoginController();
        $login->autenticar();
        break;

    case "logout":
        $login = new LoginController();
        $login->logout();
        break;

    case "registrar":
        $login = new LoginController();
        $login->registrar();
        break;

    // CRUD de Áreas
    case "listar":
        $controlador = new AreaController();
        $controlador->listar();
        break;

    case "crear":
        $controlador = new AreaController();
        $controlador->crear();
        break;

    case "editar":
        $controlador = new AreaController();
        $controlador->editar();
        break;

    case "eliminar":
        $controlador = new AreaController();
        $controlador->eliminar();
        break;

    // CRUD de Permisos
    case "listarPermisos":
        $permiso = new PermisoController();
        $permiso->listar();
        break;

    case "crearPermiso":
        $permiso = new PermisoController();
        $permiso->crear();
        break;

    case "editarPermiso":
        $permiso = new PermisoController();
        $permiso->editar();
        break;

    case "eliminarPermiso":
        $permiso = new PermisoController();
        $permiso->eliminar();
        break;
        // Gestión de usuarios por área
    case "asignarUsuarios":
        $controlador = new AreaController();
        $controlador->asignarUsuarios();
        break;

    case "asignarUsuarioArea":
        $controlador = new AreaController();
        $controlador->asignarUsuarioArea();
        break;

    case "quitarUsuarioArea":
        $controlador = new AreaController();
        $controlador->quitarUsuarioArea();
        break;

    // Acción por defecto
    default:
        require("vistas/inicio.php");
        break;
}


