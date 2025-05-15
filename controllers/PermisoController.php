<?php
class PermisoController extends Controller {
    public function index() {
        $permiso = $this->model('Permiso');
        $data = $permiso->obtenerTodos();
        $this->view('permisos/index', ['permisos' => $data]);
    }

public function crear() {
    $this->view('permisos/crear');
}

public function guardar() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tipo = $_POST['tipo'];

        $permiso = $this->model('Permiso');
        $permiso->crear($tipo);

        header('Location: /peoplepro/public/permiso/index');
    }
}
// Método para mostrar el formulario de edición
public function editar($id) {
    $permiso = $this->model('Permiso');
    $data = $permiso->obtenerPorId($id);
    $this->view('permisos/editar', ['permiso' => $data]);
}

// Método para actualizar el permiso
public function actualizar($id) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tipo = $_POST['tipo'];
        $permiso = $this->model('Permiso');
        $permiso->actualizar($id, $tipo);
        header('Location: /peoplepro/public/permiso/index');
    }
}

// Método para eliminar un permiso
public function eliminar($id) {
    $permiso = $this->model('Permiso');
    $permiso->eliminar($id);
    header('Location: /peoplepro/public/permiso/index');
}


}