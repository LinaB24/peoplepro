<?php
require_once '../models/User.php';
require_once '../models/Area.php'; // Asegúrate de requerir el modelo de área también

class UsuarioController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function index()
    {
        // Listar usuarios
        $data['usuarios'] = $this->userModel->obtenerTodos();
        $this->view('usuarios/index', $data);
    }

    public function asignar_area($id = null)
    {
        if ($id === null) {
            header('Location: /peoplepro/public/usuario');
            exit;
        }

        $usuarioModel = new User();
        $usuario = $usuarioModel->obtenerPorId($id);

        if (!$usuario) {
            header('Location: /peoplepro/public/usuario');
            exit;
        }

        $areaModel = new Area();
        $areas = $areaModel->getAll();

        $data = [
            'usuario' => $usuario,
            'areas' => $areas
        ];

        $this->view('usuarios/asignar_area', $data);
    }

    public function guardar_asignacion()
    {
        echo "Método alcanzado<br>"; // ← Mensaje de prueba

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userId = $_POST['user_id'];
            $areaId = $_POST['area_id'];

            if ($this->userModel->actualizarArea($userId, $areaId)) {
                header('Location: /peoplepro/public/usuario');
                exit;
            } else {
                echo "Error al actualizar el área del usuario.";
            }
        }
    }


    private function view($vista, $data = [])
    {
        require_once "../views/$vista.php";
    }
}
