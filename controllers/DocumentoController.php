<?php

class DocumentoController extends Controller
{
    public function crear()
    {
        $this->view('documentos/crear');
    }

    public function guardar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $archivo = $_FILES['archivo'];

            if ($archivo['type'] === 'application/pdf') {
                $rutaDestino = dirname(__DIR__) . '/uploads/' . basename($archivo['name']);


                if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
                    $documento = $this->model('Documento');
                    $documento->guardar($nombre, $rutaDestino);
                    header('Location: /peoplepro/public/documento/index');
                } else {
                    echo "Error al subir el archivo.";
                }
            } else {
                echo "Solo se permiten archivos PDF.";
            }
        }
    }

    public function index()
{
    $documento = $this->model('Documento');
    $documentos = $documento->obtenerTodos();

    $this->view('documentos/index', ['documentos' => $documentos]);
}

public function eliminar($id)
{
    $documento = $this->model('Documento');
    $doc = $documento->obtenerPorId($id);

    if ($doc) {
        // Eliminar el archivo físico del servidor
        $rutaArchivo = dirname(__DIR__) . '/uploads/' . basename($doc['archivo']);
        if (file_exists($rutaArchivo)) {
            unlink($rutaArchivo); // Borra el archivo
        }

        // Eliminar el registro de la base de datos
        $documento->eliminar($id);
    }

    header("Location: /peoplepro/public/documento/index");
}

public function editar($id)
{
    $documento = $this->model('Documento');
    $doc = $documento->obtenerPorId($id);

    $this->view('documentos/editar', ['documento' => $doc]);
}

public function actualizar()
{
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

    $documento = $this->model('Documento');
    $docActual = $documento->obtenerPorId($id);

    // Si se sube un nuevo archivo, reemplazarlo
    if (!empty($_FILES['archivo']['name'])) {
        $archivo = $_FILES['archivo'];
        $nombreArchivo = time() . '_' . basename($archivo['name']);
        $rutaDestino = dirname(__DIR__) . '/uploads/' . $nombreArchivo;

        if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
            // Eliminar el archivo anterior
            $archivoAnterior = dirname(__DIR__) . '/uploads/' . basename($docActual['archivo']);
            if (file_exists($archivoAnterior)) {
                unlink($archivoAnterior);
            }

            // Actualizar con nuevo archivo
            $documento->actualizar($id, $nombre, $nombreArchivo);
        } else {
            echo "Error al subir el nuevo archivo.";
            return;
        }
    } else {
        // Solo se cambia el nombre
        $documento->actualizar($id, $nombre, null);
    }

    header("Location: /peoplepro/public/documento/index");
}

}
