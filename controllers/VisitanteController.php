<?php
class VisitanteController extends Controller
{
    public function index()
    {
        $visitante = $this->model('Visitante');
        $data = ['visitantes' => $visitante->obtenerTodos()];
        $this->view('visitantes/index', $data);
    }

    public function crear()
    {
        $this->view('visitantes/crear');
    }

    public function guardar()
    {
        $visitante = $this->model('Visitante');

        $visitante->insertar(
            $_POST['nombre'],
            $_POST['documento'],
            $_POST['empresa'],
            $_POST['fecha_ingreso'],
            $_POST['motivo']
        );

        header("Location: /peoplepro/public/visitante/index");
    }

    public function editar($id)
    {
        $visitante = $this->model('Visitante');
        $data = ['visitante' => $visitante->obtenerPorId($id)];
        $this->view('visitantes/editar', $data);
    }

    public function actualizar()
    {
        $visitante = $this->model('Visitante');

        $visitante->actualizar(
            $_POST['id'],
            $_POST['nombre'],
            $_POST['documento'],
            $_POST['empresa'],
            $_POST['fecha_ingreso'],
            $_POST['motivo']
        );

        header("Location: /peoplepro/public/visitante/index");
    }

    public function eliminar($id)
    {
        $visitante = $this->model('Visitante');
        $visitante->eliminar($id);
        header("Location: /peoplepro/public/visitante/index");
    }
}
