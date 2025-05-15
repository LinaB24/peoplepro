<?php
class AreaController extends Controller {
    private $area;

    public function __construct() {
        $this->area = new Area();
    }

    public function index() {
        $data['areas'] = $this->area->getAll();
        $this->view('areas/index', $data);
    }

    public function crear() {
        $this->view('areas/crear');
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->area->guardar($_POST);
            header('Location: /peoplepro/public/area');
        }
    }

    public function editar($id) {
        $data['area'] = $this->area->obtenerPorId($id);
        $this->view('areas/editar', $data);
    }

    public function actualizar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->area->actualizar($_POST);
            header('Location: /peoplepro/public/area');
        }
    }

    public function eliminar($id) {
        $this->area->eliminar($id);
        header('Location: /peoplepro/public/area');
    }
}
