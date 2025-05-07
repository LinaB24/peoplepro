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
        require __DIR__ . '/../vistas/area/index.php';
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

}
