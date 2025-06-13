<?php
// index.php

require_once __DIR__ . '/config/database.php'; // conexión a la base de datos y configuraciones


// Definir controlador y acción por defecto
$controller = isset($_GET['controller']) ? $_GET['controller'] . 'Controller' : 'HomeController';
$action     = isset($_GET['action']) ? $_GET['action'] : 'index';

try {
    // Ruta al archivo del controlador
    $controllerFile = 'controllers/' . $controller . '.php';

    if (!file_exists($controllerFile)) {
        throw new Exception("El controlador '$controller' no existe.");
    }

    require_once $controllerFile;

    if (!class_exists($controller)) {
        throw new Exception("La clase '$controller' no está definida.");
    }

    $controllerInstance = new $controller();

    if (!method_exists($controllerInstance, $action)) {
        throw new Exception("La acción '$action' no existe en el controlador '$controller'.");
    }

    // Ejecutar acción
    $controllerInstance->$action();

} catch (Exception $e) {
    echo "<h4 style='color:red;'>⚠️ Error: {$e->getMessage()}</h4>";
}
