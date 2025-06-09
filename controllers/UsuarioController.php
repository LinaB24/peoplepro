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
        $data['usuarios'] = $this->userModel->obtenerTodos();

        $areaModel = new Area();
        $data['areas'] = $areaModel->getAll();

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

    public function editar($id = null)
{
    if ($id === null) {
        header('Location: /peoplepro/public/usuario');
        exit;
    }

    $usuario = $this->userModel->obtenerPorId($id);
    if (!$usuario) {
        header('Location: /peoplepro/public/usuario');
        exit;
    }

    // Cargar todas las áreas para el select
    $areaModel = new Area();
    $areas = $areaModel->getAll();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = [
            'id' => $_POST['id'],
            'nombre' => $_POST['nombre'],
            'email' => $_POST['email'],
            'rol' => $_POST['rol'],
            'area_id' => $_POST['area_id'] ?? null
        ];
        if ($this->userModel->actualizar($data)) {
            header('Location: /peoplepro/public/usuario');
            exit;
        } else {
            echo "Error al actualizar el usuario.";
        }
    } else {
        $this->view('usuarios/editar', [
            'usuario' => $usuario,
            'areas' => $areas
        ]);
    }
}


    public function eliminar($id)
    {
        if ($this->userModel->eliminar($id)) {
            header('Location: /peoplepro/public/usuario');
        } else {
            echo "Error al eliminar el usuario.";
        }
    }

    private function view($vista, $data = [])
    {
        extract($data); // Esto convierte ['usuario' => $usuario] en $usuario dentro de la vista
        require_once "../views/$vista.php";
    }

        public function crear()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = [
            'nombre' => $_POST['nombre'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT), // Hashea la contraseña
            'rol' => $_POST['rol'],
            'area_id' => $_POST['area_id']
        ];

        if ($this->userModel->crear($data)) {
            header('Location: /peoplepro/public/usuario');
            exit;
        } else {
            echo "Error al crear el usuario.";
        }
    }
}


}

