<?php
require_once(__DIR__ . '/../modelos/Permiso.php');

class PermisoController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Permiso();
    }

    public function listar()
    {
        $permisos = $this->modelo->obtenerTodos();
        require __DIR__ . '/../vistas/permiso/index.php';
    }

        public function crear()
        {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $empleado_id = $_SESSION["usuario_id"] ?? null;
            $tipo_permiso = $_POST["tipo_permiso"] ?? '';
            $fecha_inicio = $_POST["fecha_inicio"] ?? '';
            $fecha_fin = $_POST["fecha_fin"] ?? '';
            $motivo = $_POST["motivo"] ?? '';

            if ($empleado_id && !empty($tipo_permiso)) {
                $this->modelo->crear($empleado_id, $tipo_permiso, $fecha_inicio, $fecha_fin, $motivo);
                header("Location: index.php?accion=listarPermisos");
                exit;
            }
        }

            require __DIR__ . '/../vistas/permiso/crear.php';
    }


    public function editar()
    {
        $id = $_GET["id"] ?? null;
        if (!$id) {
            header("Location: index.php?accion=listarPermisos");
            exit;
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $empleado_id = $_POST["empleado_id"] ?? '';
            $tipo_permiso = $_POST["tipo_permiso"] ?? '';
            $fecha_inicio = $_POST["fecha_inicio"] ?? '';
            $fecha_fin = $_POST["fecha_fin"] ?? '';
            $motivo = $_POST["motivo"] ?? '';
            $estado = $_POST["estado"] ?? '';
            $comentarios = $_POST["comentarios"] ?? '';

            if (!empty($empleado_id)) {
                $this->modelo->editar($id, $empleado_id, $tipo_permiso, $fecha_inicio, $fecha_fin, $motivo, $estado, $comentarios);
                header("Location: index.php?accion=listarPermisos");
                exit;
            }
        }

        $permiso = $this->modelo->buscarPorId($id);
        require __DIR__ . '/../vistas/permiso/editar.php';
    }

    public function eliminar()
    {
        $id = $_GET["id"] ?? null;

        if (!$id) {
            header("Location: index.php?accion=listarPermisos");
            exit;
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["confirmar"])) {
            $this->modelo->eliminar($id);
            header("Location: index.php?accion=listarPermisos");
            exit;
        }

        $permiso = $this->modelo->buscarPorId($id);
        require __DIR__ . '/../vistas/permiso/eliminar.php';
    }
}