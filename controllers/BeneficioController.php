<?php
class BeneficioController extends Controller {
    private $beneficio;

    public function __construct() {
        $this->beneficio = new Beneficio();
    }

    public function index() {
        $data['beneficios'] = $this->beneficio->obtenerTodos();
        $this->view('beneficios/index', $data);
    }

    public function crear() {
        $this->view('beneficios/crear');
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->beneficio->guardar($_POST);
            header('Location: /peoplepro/public/beneficio');
        }
    }

public function editar($id) {
    $data['beneficio'] = $this->beneficio->obtenerPorId($id);
    $this->view('beneficios/editar', $data);
}

public function eliminar($id) {
    $this->beneficio->eliminar($id);
    header('Location: /peoplepro/public/beneficio');
}

}