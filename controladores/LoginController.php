<?php
require_once(__DIR__ . '/../modelos/Usuario.php');

class LoginController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Usuario();
    }

    public function mostrarLogin()
    {
        require __DIR__ . '/../vistas/login/login.php';
    }

    public function autenticar()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $usuario = $_POST["usuario"] ?? '';
            $clave = $_POST["clave"] ?? '';

            $usuarioValido = $this->modelo->validar($usuario, $clave);

            if ($usuarioValido) {
                session_start();
                $_SESSION["usuario"] = $usuarioValido["usuario"];
                $_SESSION["usuario_id"] = $usuarioValido["id"]; // esto guarda su ID

                header("Location: index.php?accion=inicio");
                exit;
            } else {
                $error = "Usuario o clave incorrectos.";
                require __DIR__ . '/../vistas/login/login.php';
            }
        }
    }

    public function registrar()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $usuario = $_POST["usuario"] ?? '';
            $clave = $_POST["clave"] ?? '';

            if (!empty($usuario) && !empty($clave)) {
                $this->modelo->registrar($usuario, $clave);
                header("Location: index.php?accion=login");
                exit;
            }
        }

        require __DIR__ . '/../vistas/login/registro.php';
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: index.php?accion=login");
        exit;
    }
}