<?php
session_start();

// Parámetros desde la URL
$action = $_GET['action'] ?? 'landing';
$method = $_GET['method'] ?? 'index';
$id = $_GET['id'] ?? null;

// Nombre del controlador y archivo
$controllerName = ucfirst($action) . 'Controller';
$controllerFile = __DIR__ . '/../controllers/' . $controllerName . '.php';

// Verificamos si el controlador existe
if (file_exists($controllerFile)) {
    require_once $controllerFile;

    if (class_exists($controllerName)) {
        $controller = new $controllerName();

        // Ejecutamos el método, con o sin ID
        if (method_exists($controller, $method)) {
            if ($id !== null) {
                $controller->$method($id);
            } else {
                $controller->$method();
            }
        } else {
            echo "Error: El método '$method' no existe en el controlador '$controllerName'.";
        }
    } else {
        echo "Error: La clase '$controllerName' no fue encontrada.";
    }
} else {
    echo "Error: El archivo del controlador '$controllerFile' no existe.";
}

