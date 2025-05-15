<?php

class App {
    protected $controller = 'HomeController'; // controlador por defecto
    protected $method = 'index'; // método por defecto
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Controlador
        if (isset($url[0]) && file_exists(__DIR__ . '/../controllers/' . ucfirst($url[0]) . 'Controller.php')) {
            $this->controller = ucfirst($url[0]) . 'Controller';
            unset($url[0]);
        }

        // Instancia el controlador
        require_once __DIR__ . '/../controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Método
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Parámetros
        $this->params = $url ? array_values($url) : [];

        // Llama el método con los parámetros
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            // Retira barras al final y filtra caracteres
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
