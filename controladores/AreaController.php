<?php
require_once(__DIR__ . '/../modelos/Area.php');

class AreaController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Area();
    }

   public function listar()
    {
        $areas = $this->modelo->obtenerTodas();

        require_once(__DIR__ . '/../modelos/Usuario.php');
        $usuarioModel = new Usuario();

        // Asociar usuarios a cada área
        foreach ($areas as &$area) {
            $area['usuarios'] = $usuarioModel->obtenerPorArea($area['id']);
        }

        require(__DIR__ . '/../vistas/area/index.php');
    }

    public function crear()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nombre = $_POST["nombre"] ?? '';
            $descripcion = $_POST["descripcion"] ?? '';
            if (!empty($nombre)) {
                $this->modelo->crear($nombre, $descripcion);
                header("Location: index.php?accion=listar");
                exit;
            }
        }
        require __DIR__ . '/../vistas/area/crear.php';
    }

    public function editar()
    {
        $id = $_GET["id"] ?? null;
        if (!$id) {
            header("Location: index.php?accion=listar");
            exit;
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nombre = $_POST["nombre"] ?? '';
            $descripcion = $_POST["descripcion"] ?? '';
            if (!empty($nombre)) {
                $this->modelo->editar($id, $nombre, $descripcion);
                header("Location: index.php?accion=listar");
                exit;
            }
        }

        $area = $this->modelo->buscarPorId($id);
        require __DIR__ . '/../vistas/area/editar.php';
    }

        public function eliminar()
    {
        $id = $_GET["id"] ?? null;

        if (!$id) {
            header("Location: index.php?accion=listar");
            exit;
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["confirmar"])) {
            $this->modelo->eliminar($id);
            header("Location: index.php?accion=listar");
            exit;
        }

        $area = $this->modelo->buscarPorId($id);
        require __DIR__ . '/../vistas/area/eliminar.php';
    }

    public function asignarUsuarios()
    {
        $area_id = $_GET['area_id'] ?? null;
        if (!$area_id) {
            header("Location: index.php?accion=listar");
            exit;
        }

        require_once(__DIR__ . '/../modelos/Usuario.php');
        $usuarioModel = new Usuario();

        $area = $this->modelo->buscarPorId($area_id);
        $usuariosAsignados = $usuarioModel->obtenerPorArea($area_id);
        $usuariosDisponibles = $usuarioModel->obtenerSinArea();

        require __DIR__ . '/../vistas/area/asignar_usuarios.php';
    }

    public function asignarUsuarioArea()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $usuario_id = $_POST["usuario_id"] ?? null;
            $area_id = $_POST["area_id"] ?? null;

            if ($usuario_id && $area_id) {
                require_once(__DIR__ . '/../modelos/Usuario.php');
                $usuarioModel = new Usuario();
                $usuarioModel->asignarArea($usuario_id, $area_id);
            }

            header("Location: index.php?accion=asignarUsuarios&area_id=" . $area_id);
            exit;
        }
    }

    public function quitarUsuarioArea()
    {
        $usuario_id = $_GET["usuario_id"] ?? null;
        $area_id = $_GET["area_id"] ?? null;

        if ($usuario_id) {
            require_once(__DIR__ . '/../modelos/Usuario.php');
            $usuarioModel = new Usuario();
            $usuarioModel->quitarArea($usuario_id);
        }

        header("Location: index.php?accion=asignarUsuarios&area_id=" . $area_id);
        exit;
    }

}