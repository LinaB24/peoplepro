<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Area.php';

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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->area->guardar($_POST);
            $this->redirect('/peoplepro/public/index.php?action=area');
        }
    }

    public function editar($id) {
        $area = $this->area->obtenerPorId($id);
        if (!$area) {
            echo "Área no encontrada";
            return;
        }
        $this->view('areas/editar', ['area' => $area]);
    }

    public function actualizar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->area->actualizar($_POST);
            $this->redirect('/peoplepro/public/index.php?action=area');
        }
    }

    public function eliminar($id) {
        $this->area->eliminar($id);
        $this->redirect('/peoplepro/public/index.php?action=area');
    }
}


